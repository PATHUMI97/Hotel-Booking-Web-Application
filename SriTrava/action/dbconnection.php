 <?php 
 $username = "root";
 $password = "pathu@1997.4";
 $databasename = "sri_trava";
 $Hosturl = "localhost";
 $Hostport = 3307;

 
 $connection = new mysqli($Hosturl, $username,  $password, $databasename, $Hostport);
 
 
 if($connection->connect_error){
     echo 'error!, not connected'.$connection->connect_error;
 } else {
   // echo 'connected successfully';
}



 ?>


