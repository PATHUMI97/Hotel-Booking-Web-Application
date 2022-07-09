<?php
include './dbconnection.php';
include '../errorHandling.php';

$inHotelName = "";
$inCity = "";
$inDiscription = "";
$inCategory ="";
$inLocation = "";
$inContactNo="";
$inEmail="";
$inAddress="";
//$inPackages="";
        

if (isset($_POST['inHotelName'])) { $inHotelName = $_POST['inHotelName'];}
if (isset($_POST['inCity'])) { $inCity = $_POST['inCity'];}
if (isset($_POST['inDiscription'])) { $inDiscription = $_POST['inDiscription'];}
if (isset($_POST['inCategory'])) { $inCategory = $_POST['inCategory'];}
if (isset($_POST['inLocation'])) { $inLocation = $_POST['inLocation'];}
if (isset($_POST['inContactNo'])) { $inContactNo = $_POST['inContactNo'];}
if (isset($_POST['inEmail'])) { $inEmail = $_POST['inEmail'];}
if (isset($_POST['inAddress'])) { $inAddress = $_POST['inAddress'];}
//if (isset($_POST['inPackages'])) { $inPackages = $_POST['inPackages'];}


if ($inHotelName === '') {header("Location:../hotelmanager.php?msg=Hotel name not found");die();}
if ($inCity === '') {header("Location:../hotelmanager.php?msg=city not found");die();}
if ($inDiscription === '') {header("Location:../hotelmanager.php?msg=discription not found");die();}
if ($inCategory === '') {header("Location:../hotelmanager.php?msg=category not found");die();}
if ($inLocation === '') {header("Location:../hotelmanager.php?msg=location not found");die();}
if ($inContactNo === '') {header("Location:../hotelmanager.php?msg=contact number not found");die();}
if ($inEmail === '') {header("Location:../hotelmanager.php?msg=email not found");die();}
if ($inAddress === '') {header("Location:../hotelmanager.php?msg=address not found");die();}
//if ($inPackages === '') {header("Location:../hotelmanager.php?msg=package not found");die();}

//image upload here
$target_dir = "hotels/";
$target_file = $target_dir . basename($_FILES["inImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk=0;
}

if ($uploadOk == 0) {
  header("Location:../hotelmanager.php?msg=sorry. file format does not support");die(); 

} else {
  move_uploaded_file($_FILES["inImage"]["tmp_name"], $target_file);
    
  }



$sql="INSERT INTO `hotels` ( `hotel_name`, "
        . "`city`, "
        . "`hotel_disc`,"
        . " `imageurl`, "
        . "`locationurl`, "
        . "`hotel_contact_no`, "
        . "`hotel_email`, "
        . "`hotel_address`,"
        . "`hotel_category`) VALUES ('".$inHotelName."',"
        . " '".$inCity."', "
        . "'".$inDiscription."',"
        . " '".$target_file."', "
        . "'".$inLocation."',"
        . " '".$inContactNo."', "
        . "'".$inEmail."', "
        . "'".$inAddress."','".$inCategory ."');";
echo $sql;
$result=$connection->query($sql);
if ($result===TRUE){
    header("Location:../hotel_register.php?msg=product saved successfully");
    die();
} else {
    header("Location:../hotel_register.php?msg=product saved failed");die();
echo $connection->connect_error;
echo $sql;
}

include '../hotel_register.php';
?>
<a href="adminpanel.php"> </a>