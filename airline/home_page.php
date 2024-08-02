<!DOCTYPE html>
<html>
<head>
    <title>Home Page - SkyWave Airlines</title>
    <style>
        body {
            background-color: #FFFFFFCC; /* Light transparent white */
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }
        .header {
            width: 100%;
            height: 50px; /* Fixed height for the header */
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
            max-height: 70px; /* Max height for the logo */
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
            background-color: rgba(3, 3, 55, 0.9);
            color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 10px 0;
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
        .container {
            width: 100%;
            text-align: center;
            margin-top: 0px;
        }
        .container img {
            width: 100%;
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
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
        <h1>SkyWave Airlines</h1>
    </div>
    <div class="nav-header">
        <ul>
            <li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
            <li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
        </ul>
    </div>
    </div>
    <div class="container">
        <img src="images/home.jpg" alt="SkyWave Airlines">
    </div>
    <footer>
        &copy; 2024 SkyWave Airlines. All rights reserved.
    </footer>
</body>
</html>


