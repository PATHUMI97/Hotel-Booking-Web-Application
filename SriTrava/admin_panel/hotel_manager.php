<!DOCTYPE html>
<?php
include '../action/dbconnection.php';
?>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <?php
        // put your code here
        ?>

        <h1 align="center">THIS IS HOTEL MANAGER</h1>
        <div class="table-responsive-sm">
            <table class="table table-success table-striped table-hover">
                <tr>
                    <td>Id</td>
                    <td>HotelName</td>
                    <td>City</td>
                    <td>Discription</td>
                    <td>Image</td>
                    <td>Location</td>
                    <td>Contact Number</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Price</td>
                    <td>Category</td>

                    <td>update</td>
                    <td>Delete</td>
                </tr>
                <?php
                $query = "SELECT * FROM hotels";
                $result = $connection->query($query);
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <form action="hotelupdate.php" method="POST">
                        <tr>
                            <td><input type="text" name="id" id="id" value="<?php echo $row["id"]; ?>" /></td>
                            <td><input type="text" name="hotel_name" id="hotel_name" value="<?php echo $row["hotel_name"]; ?>" /></td>
                            <td><input type="text" name="city" id="city" value="<?php echo $row["city"]; ?>" /></td>
                            <td><input type="text" name="hotel_disc" id="hotel_disc" value="<?php echo $row["hotel_disc"]; ?>" /></td>
                            <td><img name="image" src="<?php echo "../action/" . $row["imageurl"]; ?>" width="200" height="200"></td>
                            <td><input type="text" name="locationurl" id="locationurl" value="<?php echo $row["locationurl"]; ?>" /></td>
                            <td><input type="text" name="contactNo" id="contactNo" value="<?php echo $row["hotel_contact_no"]; ?>" /></td>
                            <td><input type="text" name="email" id="email" value="<?php echo $row["hotel_email"]; ?>" /></td>
                            <td><input type="text" name="address" id="address" value="<?php echo $row["hotel_address"]; ?>" /></td>
                            <td><input type="text" name="price" id="price" value="<?php echo $row["hotel_price"]; ?>" /></td>

                            <td>
                                <select class="form-select" name="category" aria-label="Default select example">
                                    <?php
                                    $queryCat = "SELECT * FROM hotel_category";
                                    $resultCat = $connection->query($queryCat);
                                    if ($resultCat->num_rows > 0) {

                                        while ($rowx = $resultCat->fetch_assoc()) {
                                            ?>
                                            <option <?php
                                            if ($row['hotel_category'] == $rowx['id_hotel_category']) {
                                                echo 'selected';
                                            }
                                            ?> 
                                                value="<?php echo $rowx['id_hotel_category'] ?>"><?php echo $rowx ['category_name'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                </select>
                            </td>


                            <td><input type="submit" value="Update" /></td>
                            <td><a href="hoteldelete.php?id=<?php echo $row["id"]; ?>">delete</a></td>
                            <?php ?>
                        </tr>
                    </form>

                    <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>
