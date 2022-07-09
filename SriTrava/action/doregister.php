<?php
include './dbconnection.php';
//include './errorHandling.php';

$inName = "";

$inUsername ="";
$inBirthday = "";
$inContactNo ="";
$inEmail = "";
$inPassword = "";
$inCity="";
$userType="";


if(isset($_POST['inName'])){$inName=$_POST['inName'];}

if(isset($_POST['inUsername'])){$inUsername=$_POST['inUsername'];}
if(isset($_POST['inBirthday'])){$inBirthday=$_POST['inBirthday'];}
if(isset($_POST['inContactNo'])){$inContactNo=$_POST['inContactNo'];}
if(isset($_POST['inEmail'])){$inEmail=$_POST['inEmail'];}
if(isset($_POST['inPassword'])){$inPassword=$_POST['inPassword'];}
if(isset($_POST['inCity'])){$inCity=$_POST['inCity'];}
if(isset($_POST['userType'])){$userType=$_POST['userType'];}

if($inName==''){    header("Location:../signup.php?msg= Name is not found");    die();}

if ($inUsername=='') {    header("Location:../signup.php?msg=username no not found");    die();}
if ($inBirthday=='') {    header("Location:../signup.php?msg=email not found");    die();}
if ($inContactNo=='') {    header("Location:../signup.php?msg=contact number not found");    die();}
if ($inEmail=='') {    header("Location:../signup.php?msg=username not found");    die();}
if ($inPassword=='') {    header("Location:../signup.php?msg=password not found");    die();}
if ($inCity=='') {    header("Location:../signup.php?msg=city not found");    die();}
if ($userType=='') {    header("Location:../signup.php?msg= usertype not found");    die();}


$insertquery = "INSERT INTO user (name,username,birthday,contact_no,email,password,city,user_type,is_active)"
        . " values ('".$inName."','".$inUsername."', '".$inBirthday."','".$inContactNo."','".$inEmail."', '".$inPassword."', '".$inCity."','".$userType."','1')";

$result=$connection->query($insertquery);
if ($result===TRUE) {
     header("Location:../login.php?msg=user registered successfully please login");    die();
} else {
  echo 'oops! something went wrong'.$connection->error;   
}
mysqli_close($connection);

?>
