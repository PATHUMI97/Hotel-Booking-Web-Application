
<?php
include './dbconnection.php';
include './errorHandling.php';

$userID = $_GET['id'];
echo 'going to delete'.$userID ;

$sql = "DELETE FROM customer WHERE id = '".$userID."' ";
 
mysqli_query($connection, $sql);

$isDelete = mysqli_query($connection, $sql);
if($isDelete){
echo 'User Deleted successfully';
} else {
    echo 'Oops! Something went wrong!';
}
mysqli_close($connection);

?>
<a href="cus_signup_tbl.php">back</a>