<?php
	session_start();
?>
<html>
	<head>
		<title>
			Enter Travel/Ticket Details
		</title>
		<style>
			body {
				font-family: Arial, sans-serif;
				margin: 0;
				padding: 0;
			}
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=number] {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 0px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 20px 0;
    			display: block;
				margin-left: auto;
				margin-right: auto;
			}
			input[type=radio] {
    			margin-right: 30px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 15px;
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
				overflow: hidden;
				background-color: #333;
			}
			li {
				float: left;
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
				padding: 20px;
				margin-top: 20px;
			}
			h2, h3 {
				margin: 10px 0;
			}
			table {
				width: 100%;
				margin-bottom: 20px;
			}
			td {
				padding: 5px;
			}
			.fix_table_short {
				width: 20%;
			}
			.fix_table {
				width: 30%;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/logo.jpg" alt="Logo"/> 
		<h1 id="title">
			SkyWave Airlines
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<div class="container">
			<?php
				$no_of_pass = $_SESSION['no_of_pass'];
				$class = $_SESSION['class'];
				$count = $_SESSION['count'];
				$flight_no = $_POST['select_flight'];
				$_SESSION['flight_no'] = $flight_no;

				echo "<h2>ADD PASSENGERS DETAILS</h2>";
				echo "<form action=\"add_ticket_details_form_handler.php\" method=\"post\">";
				while ($count <= $no_of_pass) {
					echo "<p><strong>PASSENGER " . $count . "</strong></p>";
					echo "<table cellpadding=\"0\">";
					echo "<tr>";
					echo "<td class=\"fix_table_short\">Passenger's Name</td>";
					echo "<td class=\"fix_table_short\">Passenger's Age</td>";
					echo "<td class=\"fix_table_short\">Passenger's Gender</td>";
					echo "<td class=\"fix_table_short\">Passenger's Inflight Meal</td>";
					echo "<td class=\"fix_table_short\">Passenger's Frequent Flier ID (if applicable)</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_name[]\" required></td>";
					echo "<td class=\"fix_table_short\"><input type=\"number\" name=\"pass_age[]\" required></td>";
					echo "<td class=\"fix_table_short\">";
					echo "<select name=\"pass_gender[]\">";
					echo "<option value=\"male\">Male</option>";
					echo "<option value=\"female\">Female</option>";
					echo "<option value=\"other\">Other</option>";
					echo "</select>";
					echo "</td>";
					echo "<td class=\"fix_table_short\">";
					echo "<select name=\"pass_meal[]\">";
					echo "<option value=\"yes\">Yes</option>";
					echo "<option value=\"no\">No</option>";
					echo "</select>";
					echo "</td>";
					echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_ff_id[]\"></td>";
					echo "</tr>";
					echo "</table>";
					echo "<br><hr>";
					$count = $count + 1;
				}
				echo "<br><h2>ENTER TRAVEL DETAILS</h2>";
				echo "<table cellpadding=\"5\">";
				echo "<tr>";
				echo "<td class=\"fix_table_short\">Do you want access to our Premium Lounge?</td>";
				echo "<td class=\"fix_table_short\">Do you want to opt for Priority Checkin?</td>";
				echo "<td class=\"fix_table_short\">Do you want to purchase Travel Insurance?</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class=\"fix_table\">";
				echo "Yes <input type='radio' name='lounge_access' value='yes' checked/> No <input type='radio' name='lounge_access' value='no'/>";
  				echo "</td>";
  				echo "<td class=\"fix_table\">";
				echo "Yes <input type='radio' name='priority_checkin' value='yes' checked/> No <input type='radio' name='priority_checkin' value='no'/>";
  				echo "</td>";
  				echo "<td class=\"fix_table\">";
				echo "Yes <input type='radio' name='insurance' value='yes' checked/> No <input type='radio' name='insurance' value='no'/>";
  				echo "</td>";
				echo "</tr>";
				echo "</table>";
				echo "<br><br>";
				echo "<input type=\"submit\" value=\"Submit Travel/Ticket Details\" name=\"Submit\">";
				echo "</form>";
			?>
		</div>
		<footer>
			&copy; 2024 SkyWave Airlines. All rights reserved.
		</footer>
	</body>
</html>
