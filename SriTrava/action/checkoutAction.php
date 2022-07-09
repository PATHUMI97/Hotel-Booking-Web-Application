<?php
session_start();
include './dbconnection.php';
$name = "";
$city="";
$contactNo = "";
$email = "";
$username = "";
$password = "";
$cart = "";
$birthday="";


$user_ID = "";
if (isset($_SESSION['userid'])) {
    $user_ID = $_SESSION['userid'];
}

$is_login = false;
if (isset($_SESSION['is_login'])) {
    $is_login = $_SESSION['is_login'];
}
$last_id_invoice = "";
if (isset($_SESSION['current_invoice_id'])) {
    $last_id_invoice = $_SESSION['current_invoice_id'];
}



if(isset($_POST['name'])){$name = $_POST['name'];}

if(isset($_POST['city'])){$city = $_POST['city'];}
if(isset($_POST['contactNumber'])){$contactNo = $_POST['contactNumber'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['birthday'])){$birthday = $_POST['birthday'];}

if(isset($_POST['username'])){$username = $_POST['username'];}
if(isset($_POST['password'])){$password = $_POST['password'];}

//cart data
if(isset($_SESSION['cart'])){$cart = $_SESSION['cart'];}

    if($cart==''){header("Location:../cart.php?msg=Cart not found !");die();}

 
    if(!$is_login){
    ///register new user part not require for registerd and logged in users !
$insertQuery = "INSERT INTO `user`
(
`name`,
`username`,
`birthday`,
`contact_no`,
`email`,
`password`,
`city`,
`user_type`,
`is_active`)
VALUES
('".$name."','".$username."','".$birthday."',
'".$contactNo."',
'".$email."',
'".$password."',
    '".$city."',
'2',
'1')";
// echo $insertQuery;
 $result = $connection->query($insertQuery); 
 
   $user_ID =0;
   if($result===TRUE){
      $user_ID =  $connection->insert_id;
       $_SESSION["userid"] = $user_ID;
   }else{
       echo "ERROR ".mysqli_error($connection);
   }
  }
   
   
    if($last_id_invoice!=""){
        //remove previous temp carts
        $dropCartQuery = "delete from invoice_item  where invoice_id = '".$last_id_invoice."' ";

$res = $connection->query($dropCartQuery);
    }
       $totalAmu = 0.0; 
               
  if($last_id_invoice==""){
   $saveInvoice = "insert into "
           . "invoice(amount,date,status,invoiced_to,invoice_checked_by) "
           . "values('".$totalAmu."',now(),'".$user_ID."',null,'2')";   
   
   $resultx = $connection->query($saveInvoice);
   if ($resultx==TRUE) {
        echo "invoice saved Successfully !";
   }else{
       echo 'error'. mysqli_errno($connection);
   }
      
     $last_id_invoice = $connection->insert_id;
     $_SESSION["current_invoice_id"] = $last_id_invoice;     
       echo "Invoice ID : ".$last_id_invoice; 
  }
       
       
       
       //save all the items !!!
           foreach ($cart as $cartItem){
               $querySaveItem = "insert into invoice_item(product_id,invoice_id,line_qty,line_unit_price)"
              . " values('".$cartItem[0]."', '".$last_id_invoice."', '".$cartItem[1].
                       "',(select hotel_price from hotels where id ='".$cartItem[0]."' ) )"; 
              $pitem = $connection->query($querySaveItem);
              if($pitem===true){
                  echo $cartItem[0]." saved success";
               }else{
                   echo "error".mysqli_error($connection);
                   }      
   } 
   
   
             $updateInvoiceTotal = "update invoice i set i.amount = (select sum(ii.line_unit_price*ii.line_qty) from 
invoice_item ii where ii.invoice_id = i.id) where i.id =  '".$last_id_invoice."' ";
   
              if($connection->query($updateInvoiceTotal)===true){
                  echo " invoice total updated successfully !";
               }else{
                   echo "error".mysqli_error($connection);
                   }      
     
               
               //payment Confirmation page
               header("Location:../paymentconfirmationpage_1.php");
              // include '../paymentconfirmationpage.php';
   
   ?>