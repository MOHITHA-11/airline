<?php
if (isset($_POST['token']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    if ($new_password == $confirm_password) {
        // Database connection
        $conn = new mysqli('localhost', 'root', '123456', 'airline_reservation');
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Get the email associated with the token
        $sql = "SELECT email FROM password_resets WHERE token=? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $email = $row['email'];
            
            // Update the user's password in the users table
            $sql_update_password = "UPDATE customer SET pwd=? WHERE email=?";
            $stmt_update_password = $conn->prepare($sql_update_password);
            $stmt_update_password->bind_param("ss", $new_password, $email);
            
            if ($stmt_update_password->execute()) {
                // Delete the token so it cannot be used again
                $sql_delete_token = "DELETE FROM password_resets WHERE token=?";
                $stmt_delete_token = $conn->prepare($sql_delete_token);
                $stmt_delete_token->bind_param("s", $token);
                
                if ($stmt_delete_token->execute()) {
                    echo "Password has been reset successfully.";
                } else {
                    echo "Error deleting token: " . $stmt_delete_token->error;
                }
            } else {
                echo "Error updating password: " . $stmt_update_password->error;
            }
        } else {
            echo "Invalid token.";
        }
        
        $conn->close();
    } else {
        echo "Passwords do not match.";
    }
} else {
    echo "Invalid request.";
}
?>