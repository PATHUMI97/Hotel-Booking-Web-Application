<?php
include './dbconnection.php';
include './errorHandling.php';

$deleteHotelId="";

if(isset($_GET['id'])){$deleteHotelId=$_GET['id'];
}

$delQuery ="DELETE FROM hotelss WHERE id = '".$deleteHotelId."' ";
$result=$connection->query($delQuery);

if ($result===true) {
     header("Location:../hotel_manager.php?msg=product deleted successfully");die(); 
echo $delQuery;
} else {
     header("Location:../admin_panel/hotel_manager.php?msg=product deleted error");die(); 
}

?>


