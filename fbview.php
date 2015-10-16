<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Feedback</title>
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
				<li><a href="index.html">Home</a></li>
				<li><a href="features.html">Feature Guide</a></li>
				<li><a href="help.html">Need help?</a></li>
				<li><a href="feedback.html">Feedback</a></li>
				<li><a href="about.html">About Us</a></li>
      		</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login.html"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login</a></li>
				<li><a href="register.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Register</a></li>
			  </ul>
		</div>		
	</nav>
	<br>


<div class="panel panel-default">
   <div class="panel-heading"><h2>USERS FEEDBACK</h2> </div>
  <div class="panel-body">
    <p>Below is the feedback left by our users</p>
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

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

 echo "<table class=\"table table-striped\"  >
	<tr>
	<th>NAME</th>
	<th>PHONE</th>
	<th>EMAIL</th>
	<th>FEEDBACK</th>";	

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
        echo "<td>" . $row["name"] 	. "</td>";
        echo "<td>" . $row["phone"] 	. "</td>";
        echo "<td>" . $row["email"] 	. "</td>";
        echo "<td>" . $row["feedback"] 	. "</td>";
    }
} else {
    echo "0 results";	
}
mysqli_close($conn);
?>

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