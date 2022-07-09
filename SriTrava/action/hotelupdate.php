<?php
include './dbconnection.php';
//include './errorHandling.php';

$hotel_name ="";
$city ="";
$hotel_disc ="";  
$hotel_image="";
$locationurl ="";
$hotel_contact="";
$email ="";
$address ="";


if (isset($_POST['hotel_name'])) { $hotel_name = $_POST['hotel_name'];}
if (isset($_POST['city'])) { $city = $_POST['city'];}
if (isset($_POST['hotel_disc'])) { $hotel_disc = $_POST['hotel_disc'];}
if (isset($_POST['image'])) { $hotel_image = $_POST['image'];}
if (isset($_POST['locationurl'])) { $locationurl = $_POST['locationurl'];}
if (isset($_POST['contactNo'])) { $hotel_contact = $_POST['contactNo'];}
if (isset($_POST['email'])) { $email = $_POST['email'];}
if (isset($_POST['address'])) { $address = $_POST['address'];}


if ($hotel_name === '') {header("Location:../admin_panel/hotel_manager.php?msg=hotel name not found");die();}
if ($city === '') {header("Location:../admin_panel/hotel_manager.php?msg=city description not found");die();}
if ($hotel_disc === '') {header("Location:../admin_panel/hotel_manager.php?msg=discription price not found");die();}
if ($hotel_image === '') {header("Location:../admin_panel/hotel_manager.php?msg=image price not found");die();}
if ($locationurl === '') {header("Location:../admin_panel/hotel_manager.php?msg=location not found");die();}
if ($hotel_contact === '') {header("Location:../admin_panel/hotel_manager.php?msg=category not found");die();}
if ($email === '') {header("Location:../admin_panel/hotel_manager.php?msg=email not found");die();}
if ($address === '') {header("Location:../admin_panel/hotel_manager.php?msg=address not found");die();}

echo '<br>';

$sql = "UPDATE hotels SET "
        . "hotel_name ='".$hotel_name."',"
        . "city = '".$city."',"
        . "hotel_disc = '".$hotel_disc."',"
        . "imageurl = '".$hotel_image."',"
        . "locationurl = '".$locationurl."'"
        . "hotel_contact_no = '".$hotel_contact."',"
        . "hotel_email = '".$email."',"
        . "hotel_address = '".$address."',"
        
        . " WHERE id ='".$id."' ";

$result=$connection->query($updateQuery);
if ($result===TRUE){
    header("Location:../hotel_manager.php?msg=product updated successfully");die();
} else {
    header("Location:../hotel_manager.php?msg=product update failed");die();
echo $connection->connect_error;
}
mysqli_close($connection);

?>

<a href=""></a>


