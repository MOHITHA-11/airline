<?php
session_start();
?>
<html>
    <head>
        <title>Submit Payment Details</title>
    </head>
    <body>
        <?php
        if (isset($_POST['Pay_Now'])) {
            $no_of_pass = isset($_SESSION['no_of_pass']) ? $_SESSION['no_of_pass'] : null;
            $flight_no = isset($_SESSION['flight_no']) ? $_SESSION['flight_no'] : null;
            $journey_date = isset($_SESSION['journey_date']) ? $_SESSION['journey_date'] : null;
            $class = isset($_SESSION['class']) ? $_SESSION['class'] : null;
            $pnr = isset($_SESSION['pnr']) ? $_SESSION['pnr'] : null;
            $payment_id = isset($_SESSION['payment_id']) ? $_SESSION['payment_id'] : null;
            $total_amount = isset($_SESSION['total_amount']) ? $_SESSION['total_amount'] : null;
            $payment_date = isset($_SESSION['payment_date']) ? $_SESSION['payment_date'] : null;
            $payment_mode = isset($_POST['payment_mode']) ? $_POST['payment_mode'] : null;
            
            $payment_id = mt_rand(100000000, 999999999);  // Generates a 9-digit random number

            // Debugging Statements
            echo "no_of_pass: $no_of_pass<br>";
            echo "flight_no: $flight_no<br>";
            echo "journey_date: $journey_date<br>";
            echo "class: $class<br>";
            echo "pnr: $pnr<br>";
            echo "payment_id: $payment_id<br>";
            echo "total_amount: $total_amount<br>";
            echo "payment_date: $payment_date<br>";
            echo "payment_mode: $payment_mode<br>";

            if ($no_of_pass && $flight_no && $journey_date && $class && $pnr && $payment_id && $total_amount && $payment_date && $payment_mode) {
                require_once('Database Connection file/mysqli_connect.php');

                if ($class == 'economy') {
                    $query = "UPDATE Flight_Details SET seats_economy = seats_economy - ? WHERE flight_no = ? AND departure_date = ?";
                    $stmt = mysqli_prepare($dbc, $query);
                    mysqli_stmt_bind_param($stmt, "iss", $no_of_pass, $flight_no, $journey_date);
                } elseif ($class == 'business') {
                    $query = "UPDATE Flight_Details SET seats_business = seats_business - ? WHERE flight_no = ? AND departure_date = ?";
                    $stmt = mysqli_prepare($dbc, $query);
                    mysqli_stmt_bind_param($stmt, "iss", $no_of_pass, $flight_no, $journey_date);
                } else {
                    echo "Invalid class type.";
                    exit();
                }

                if (mysqli_stmt_execute($stmt)) {
                    $affected_rows_1 = mysqli_stmt_affected_rows($stmt);
                    mysqli_stmt_close($stmt);

                    if ($affected_rows_1 == 1) {
                        $query = "INSERT INTO Payment_Details (payment_id, pnr, payment_date, payment_amount, payment_mode) VALUES (?, ?, ?, ?, ?)";
                        $stmt = mysqli_prepare($dbc, $query);
                        mysqli_stmt_bind_param($stmt, "sssis", $payment_id, $pnr, $payment_date, $total_amount, $payment_mode);

                        if (mysqli_stmt_execute($stmt)) {
                            $affected_rows_2 = mysqli_stmt_affected_rows($stmt);
                            mysqli_stmt_close($stmt);

                            if ($affected_rows_2 == 1) {
                                mysqli_close($dbc);
                                header('Location: ticket_success.php');
                                exit();
                            } else {
                                echo "Submit Error: Could not insert payment details. " . mysqli_error($dbc);
                            }
                        } else {
                            echo "Submit Error: Could not execute payment details query. " . mysqli_error($dbc);
                        }
                    } else {
                        echo "Submit Error: Could not update seats. " . mysqli_error($dbc);
                    }
                } else {
                    echo "Submit Error: Could not execute update seats query. " . mysqli_error($dbc);
                }

                mysqli_close($dbc);
            } else {
                echo "Missing required fields.";
            }
        } else {
            echo "Payment request not received";
        }
        ?>
    </body>
</html>


