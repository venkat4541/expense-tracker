<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>data</title>
</head>
<body>

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

echo "Connected";

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

 echo "<table width=600px border=1px>
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

</body>
</html>