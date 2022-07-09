<?php
include '../action/dbconnection.php';
//include './errorHandling.php';

$hotel_name ="";
$city ="";
$hotel_disc ="";  
$hotel_image="";
$locationurl ="";
$hotel_contact="";
$email ="";
$address ="";
$price="";
$id="";


if (isset($_POST['hotel_name'])) { $hotel_name = $_POST['hotel_name'];}
if (isset($_POST['city'])) { $city = $_POST['city'];}
if (isset($_POST['hotel_disc'])) { $hotel_disc = $_POST['hotel_disc'];}
if (isset($_POST['image'])) { $hotel_image = $_POST['image'];}
if (isset($_POST['locationurl'])) { $locationurl = $_POST['locationurl'];}
if (isset($_POST['contactNo'])) { $hotel_contact = $_POST['contactNo'];}
if (isset($_POST['email'])) { $email = $_POST['email'];}
if (isset($_POST['address'])) { $address = $_POST['address'];}
if (isset($_POST['price'])) { $price = $_POST['price'];}
if (isset($_POST['id'])) { $id = $_POST['id'];}




echo '<br>';

$updateQuery = "UPDATE hotels SET hotel_name ='".$hotel_name."',city = '".$city."',hotel_disc = '".$hotel_disc."',imageurl = '".$hotel_image."',locationurl = '".$locationurl."',hotel_contact_no = '".$hotel_contact."',hotel_email = '".$email."',hotel_address = '".$address."',hotel_price = '".$price."' WHERE id ='".$id."' ";

$result=$connection->query($updateQuery);
if ($result===TRUE){
    header("Location:hotel_manager.php?msg=product updated successfully");die();
} else {
    header("Location:hotel_manager.php?msg=product update failed");
    echo mysqli_error($connection);
   die();

}


?>

<a href=""></a>


