<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50));

    $conn = new mysqli('localhost', 'root', '123456', 'airline_reservation');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use ON DUPLICATE KEY UPDATE to handle duplicate email entries
    $sql = "INSERT INTO password_resets (email, token, created_at) VALUES ('$email', '$token', NOW())
            ON DUPLICATE KEY UPDATE token='$token', created_at=NOW()";
    
    if ($conn->query($sql) === TRUE) {
        $reset_link = "http://localhost/airline/reset_password.php?token=" . $token;

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'raghavarapumohitha@gmail.com';
            $mail->Password   = 'hnqf jxhs xdrn riie'; // Use an app-specific password if 2FA is enabled
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('raghavarapumohitha@gmail.com', 'SkyWave Airlines');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Request';
            $mail->Body    = 'Click the following link to reset your password: <a href="' . $reset_link . '">Reset Password</a>';

            $mail->send();
            echo 'Password reset link has been sent to your email.';
        } catch (Exception $e) {
            echo "Failed to send the password reset email. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
