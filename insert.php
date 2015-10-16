<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "venkyujg_user", "_l.rhJKa=^ST", "venkyujg_fb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_POST['name']);
$phone= mysqli_real_escape_string($link, $_POST['phone']);
$email_address = mysqli_real_escape_string($link, $_POST['email']);
$feedback= mysqli_real_escape_string($link, $_POST['comments']);
 
// attempt insert query execution
$sql = "INSERT INTO feedback(name, phone, email, feedback) VALUES ('$first_name', '$phone', '$email_address', '$feedback')";
if(mysqli_query($link, $sql)){
    header('Location: ../fbsuccess.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>