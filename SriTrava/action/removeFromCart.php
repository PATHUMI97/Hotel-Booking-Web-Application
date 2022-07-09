<?php
session_start();

$hotelId="";

if (isset($_GET['hid'])) {
    $hotelId = $_GET['hid'];
}
if (isset($_POST['hid'])) {
    $hotelId = $_POST['hid'];
}

if ($hotelId == "") {
   header("Location:../hotel.php?msg=Wrong feed @ cart page");   die();
    die();
}
$cart;
if (isset($_SESSION['cart'])) {
    $cart=$_SESSION['cart'];
}else{
    $cart=array();
}
foreach ($cart as $key =>$value) {
    if ($value[0]==$hotelId) {
        unset($cart[$key]);
    }
}

$_SESSION['cart']=$cart;
header("Location:../cart.php");