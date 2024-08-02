<!DOCTYPE html>
<html>
<head>
    <title>Add Flight Schedule Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        input {
            border: 1.5px solid #030337;
            border-radius: 4px;
            padding: 7px 30px;
        }
        input[type=submit] {
            background-color: #030337;
            color: white;
            border-radius: 4px;
            padding: 7px 45px;
            margin: 10px auto;
            display: block;
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
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            display: flex;
            justify-content: center;
        }
        li {
            margin: 0 10px;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        h2, h3 {
            margin: 10px 0;
            text-align: center;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        td, th {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .fix_table {
            width: 50%;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #030337;
            color: white;
            padding: 10px;
        }
        .header img {
            height: 70px;
            margin-right: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 3em;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <img src="images/logo.jpg" alt="AADITH AIRLINES Logo">
        <h1>SkyWave Airlines</h1>
    </div>
    <div>
        <ul>
            <li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
            <li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
    </div>
    <form action="add_flight_details_form_handler.php" method="post" class="container">
        <h2>ENTER THE FLIGHT SCHEDULE DETAILS</h2>
        <table cellpadding="5">
            <tr>
                <td class="fix_table">Flight Number</td>
            </tr>
            <tr>
                <td class="fix_table"><input type="text" name="flight_no" required></td>
            </tr>
        </table>
        <br>
        <hr>
        <table cellpadding="5">
            <tr>
                <td class="fix_table">Origin</td>
                <td class="fix_table">Destination</td>
            </tr>
            <tr>
                <td class="fix_table"><input type="text" name="origin" required></td>
                <td class="fix_table"><input type="text" name="destination" required></td>
            </tr>
        </table>
        <br>
        <hr>
        <table cellpadding="5">
            <tr>
                <td class="fix_table">Departure Date</td>
                <td class="fix_table">Arrival Date</td>
            </tr>
            <tr>
                <td class="fix_table"><input type="date" name="dep_date" required></td>
                <td class="fix_table"><input type="date" name="arr_date" required></td>
            </tr>
        </table>
        <br>
        <hr>
        <table cellpadding="5">
            <tr>
                <td class="fix_table">Departure Time</td>
                <td class="fix_table">Arrival Time</td>
            </tr>
            <tr>
                <td class="fix_table"><input type="time" name="dep_time" required></td>
                <td class="fix_table"><input type="time" name="arr_time" required></td>
            </tr>
        </table>
        <br>
        <hr>
        <table cellpadding="5">
            <tr>
                <td class="fix_table">Number of Seats in Economy Class</td>
                <td class="fix_table">Number of Seats in Business Class</td>
            </tr>
            <tr>
                <td class="fix_table"><input type="number" name="seats_eco" required></td>
                <td class="fix_table"><input type="number" name="seats_bus" required></td>
            </tr>
        </table>
        <br>
        <hr>
        <table cellpadding="5">
            <tr>
                <td class="fix_table">Ticket Price(Economy Class)</td>
                <td class="fix_table">Ticket Price(Business Class)</td>
            </tr>
            <tr>
                <td class="fix_table"><input type="number" name="price_eco" required></td>
                <td class="fix_table"><input type="number" name="price_bus" required></td>
            </tr>
        </table>
        <br>
        <hr>
        <table cellpadding="5">
            <tr>
                <td class="fix_table">Jet ID</td>
            </tr>
            <tr>
                <td class="fix_table"><input type="text" name="jet_id" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit" name="Submit" style="margin: 20px auto; display: block;">
    </form>
    <footer>
        &copy; 2024 SkyWave Airlines. All rights reserved.
    </footer>
</body>
</html>