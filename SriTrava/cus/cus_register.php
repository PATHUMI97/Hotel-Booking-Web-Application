<?php
include './action/dbconnection.php';
include './errorHandling.php';

$inUsername = $_POST['inUsername'];
$inEmail = $_POST['inEmail'];
$inPassword =$_POST['inPassword'];
$inTele = $_POST['inTele'];


echo '<br>';

$sql = "INSERT INTO customer (username,email,password,tele) values ('".$inUsername."','".$inEmail."', '".$inPassword."', '".$inTele."')";

$isSaved = mysqli_query($connection, $sql);
if($isSaved){
echo 'User saved successfully';
} else {
    echo 'Oops! Something went wrong!'.$connection->error;
}
mysqli_close($connection);

?>
<a href="cus_signup_tbl.php">view details</a>