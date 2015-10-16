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
$expense_name = mysqli_real_escape_string($link, $_POST['label']);
$expense_spent= mysqli_real_escape_string($link, $_POST['amount']);
$bank_name = mysqli_real_escape_string($link, $_POST['bank']);
$account_type= mysqli_real_escape_string($link, $_POST['account']);
$expense_category = mysqli_real_escape_string($link, $_POST['category']);
$notes= mysqli_real_escape_string($link, $_POST['notes']);
 
// attempt insert query execution
$sql = "INSERT INTO expense(label, amount, bank, account, category, notes) VALUES ('$expense_name', '$expense_spent', '$bank_name', '$account_type' ,'$expense_category' , '$notes')";
if(mysqli_query($link, $sql)){
    header('Location: ../expense_view.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>