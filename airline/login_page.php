<!DOCTYPE html>
<html>
<head>
    <title>Login - SkyWave Airlines</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/login.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1;
        }
        .header {
            width: 100%;
            height: 100px; /* Fixed height for the header */
            background-color: rgba(3, 3, 55, 0.9);
            color: white;
            padding: 10px 0;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .header img {
            max-height: 80px; /* Max height for the logo */
            max-width: 80px;  /* Max width for the logo */
            margin-right: 10px;
        }
        .header h1 {
            font-size: 36px;
            margin: 0;
            vertical-align: middle;
            color: deepskyblue;
        }
        .nav-header {
            width: 100%;
            background-color: rgba(3, 3, 55, 0.7);
            color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .nav-header ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        .nav-header ul li {
            display: inline;
            margin-right: 10px;
        }
        .nav-header ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: inline-block;
        }
        .nav-header ul li a:hover {
            background-color: #D3D3D3B3;
        }
        .login-box {
            background-color: rgba(255, 255, 255, 0.8);  
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 400px;
            text-align: center;
            margin-top: 20px;
        }
        .login-box h1 {
            margin-bottom: 20px;
            font-size: 24px;
            background: rgba(255, 255, 255, 0.8);
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            color: darkblue;
        }
        .login-box input[type="text"],
        .login-box input[type="password"],
        .login-box select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-box input[type="submit"] {
            background-color: #030337;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
            margin-top: 20px;
        }
        .login-box input[type="submit"]:hover {
            background-color: #05053d;
        }
        .login-box .link-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .login-box a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            background-color: #030337;
            transition: background-color 0.3s ease;
        }
        .login-box a:hover {
            background-color: #05053d;
        }
        footer {
            background-color: #030337;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <img src="images/logo.jpg" alt="SkyWave Airlines Logo">
        <h1> SkyWave Airlines </h1>
    </div>
    <div class="nav-header">
        <ul>
            <li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
            <li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
        </ul>
    </div>
    <div class="login-box">
        <h1>Login</h1>
        <form action="login_handler.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="user_type" required>
                <option value="customer">Customer</option>
                <option value="admin">Administrator</option>
            </select>
            <input type="submit" name="Login" value="Login">
            <br><br>
        </form>
        <div class="link-container">
            <a href="new_user.php">New User? Sign Up</a>
            <a href="forgot_password.php">Forgot Password?</a>
        </div>
    </div>
    <footer>
        &copy; 2024 SkyWave Airlines. All rights reserved.
    </footer>
</body>
</html>


