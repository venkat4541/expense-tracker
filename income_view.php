<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Incomes</title>
	<link rel="stylesheet" href="css\bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<style>
	.panel { width: 70%; margin:auto;}
	.panel-default>.panel-heading { text-align: center; }
	</style>
</head>


<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			<h3>Expense<span>Tracker</span></h3>
			</div>
			<!--	<a class="navbar-brand" href="index.html" style="color: #0099FF;">EXPENSE TRACKER</a>  -->
			<ul class="nav navbar-nav">
				<li><a href="login/index.html">Home</a></li>
				<li><a href="login/features.html">Feature Guide</a></li>
				<li><a href="login/help.html">Need help?</a></li>
				<li><a href="login/feedback.html">Feedback</a></li>
				<li><a href="login/about.html">About Us</a></li>
      		</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login/dashboard.html"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Dashboard</a></li>
				<li><a href="login/logout.html"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Log out</a></li>
			  </ul>
		</div>		
	</nav>
	<br>

        </div>
        
        <br>

<div class="panel panel-default">
   <div class="panel-heading"><h2>INCOME HISTORY</h2> </div>
  <div class="panel-body">
    <p>Summary of all the Income records are diplayed below:</p>
  </div>


<?php
$servername = "localhost";
$username = "venkyujg_user";
$password = "_l.rhJKa=^ST";
$dbname = "venkyujg_fb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM income";
$result = $conn->query($sql);

 echo "<table class=\"table table-striped\"  >
	<tr>
	<th>LABEL</th>
	<th>AMOUNT</th>
	<th>ACCOUNT</th>
	<th>ACC_TYPE</th>
	<th>SOURCE</th>
	<th>NOTES</th>";	

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
        echo "<td>" . $row["label"] 	. "</td>";
        echo "<td>" . $row["amount"] 	. "</td>";
        echo "<td>" . $row["account"] 	. "</td>";
        echo "<td>" . $row["acc_type"] 	. "</td>";
	echo "<td>" . $row["source"] 	. "</td>";
	echo "<td>" . $row["notes"] 	. "</td>";
    }
} else {
     echo "<tr><td colspan=\"6\"><b>There is no data to display. Please insert some data.<b></td></tr>";	
}
mysqli_close($conn);
?>
</table>
<div class="panel-footer">
<div class="row">
        <a href="login/dashboard.html"><button type="button" class="btn btn-danger col-lg-1 col-lg-offset-4">GO BACK</button></a>
        <a href="login/add_income.html"><button type="button" class="btn btn-primary col-lg-1 col-lg-offset-2">ADD INCOME</button></a>
 	</div>
</div>
</div>
</div>

		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Expense<span>Tracker</span></h3>

				<p class="footer-links">
					<a href="index.html">Home</a>
					.
					<a href="features.html">Features</a>
					.
					<a href="help.html">Help</a>
					.
					<a href="feedback.html">Feedback</a>
				</p>
				<p class="footer-company-name">Expense Tracker &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>4400 University Dr</span> Fairfax, Virginia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 703 12345</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@support@venkatp.xyz">support@venkatp.xyz</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Expense Tracker is a free online tool created and maintained by a group of Indian 				                    students.
                </p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js\jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>