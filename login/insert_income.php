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
$income_name = mysqli_real_escape_string($link, $_POST['label']);
$income_received= mysqli_real_escape_string($link, $_POST['amount']);
$account = mysqli_real_escape_string($link, $_POST['account']);
$account_type= mysqli_real_escape_string($link, $_POST['acc_typ']);
$income_source = mysqli_real_escape_string($link, $_POST['source']);
$notes= mysqli_real_escape_string($link, $_POST['notes']);
 
// attempt insert query execution
$sql = "INSERT INTO income(label, amount, account, acc_type, source, notes) VALUES ('$income_name', '$income_received', '$account', '$account_type' ,'$income_source' , '$notes')";
if(mysqli_query($link, $sql)){
    header('Location: ../income_view.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>