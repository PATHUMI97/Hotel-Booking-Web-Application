<?php
include './dbconnection.php';
include './errorHandling.php';
$id=$_POST['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$tele=$_POST['tele'];  


echo '<br>';

$sql = "UPDATE customer SET username ='".$username."',username = '".$username."',email = '".$email."',password = '".$password."',tele = '".$tele."' WHERE id ='".$id."' ";

$isUpdated = mysqli_query($connection, $sql);
if($isUpdated){
echo 'User Updated successfully';
} else {
    echo 'Oops! Something went wrong!';
}
mysqli_close($connection);

?>
<a href="cus_signup_tbl.php">back</a>
