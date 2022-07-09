<?php
include '../action/dbconnection.php';


$deleteHotelId="";

if(isset($_GET['id'])){$deleteHotelId=$_GET['id'];
}

$delQuery ="DELETE FROM hotels WHERE id = '".$deleteHotelId."' ";
$result=$connection->query($delQuery);

if ($result===true) {
     header("Location:hotel_manager.php?msg=product deleted successfully");die(); 
echo $delQuery;
} else {
    header("Location:hotel_manager.php?msg=product deleted error");die(); 
   echo mysqli_error($connection);
}

?>


