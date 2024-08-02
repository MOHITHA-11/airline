<?php
session_start();

if(isset($_POST['username'], $_POST['password'], $_POST['user_type'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    // Validate inputs (optional)
    $username = htmlspecialchars(strip_tags(trim($username)));
    $password = htmlspecialchars(strip_tags(trim($password)));
    $user_type = htmlspecialchars(strip_tags(trim($user_type)));

    // Perform authentication based on user_type
    if($user_type == 'customer') {
        // Authenticate customer
        require_once('Database Connection file/mysqli_connect.php');
        $query = "SELECT count(*) FROM Customer WHERE customer_id=? AND pwd=?";
    } elseif($user_type == 'admin') {
        // Authenticate admin
        require_once('Database Connection file/mysqli_connect.php');
        $query = "SELECT count(*) FROM Admin WHERE admin_id=? AND pwd=?";
    } else {
        // Handle invalid user_type
        echo "Invalid user type";
        exit;
    }

    // Prepare and execute query
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $count);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($dbc);

    // Check result
    if($count == 1) {
        // Successful login
        $_SESSION['login_user'] = $username;
        if($user_type == 'customer') {
            header("location: customer_homepage.php");
        } elseif($user_type == 'admin') {
            header("location: admin_homepage.php");
        }
        exit;
    } else {
        // Failed login
        header("location: login_page.php?msg=failed");
        exit;
    }
} else {
    // Handle if form not submitted correctly
    echo "Submit request not received";
}
?>
