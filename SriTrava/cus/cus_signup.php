<!DOCTYPE html>

<?php
include './dbconnection.php';
//include './errorHandling.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="login.css">
 </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <?php
        // put your code here
        ?>

        <div class="container" style="width: 500px; height: 800px;">
            <!-- Content here -->
            <form class="row g-3" action="cus_register.php" method="POST">

                <span for="validationServer01" class="form-label">username</span>
                <span>  <input type="text" name="inUsername" class="form-control is-valid" id="inUsername" ></span>

                <span for="validationServer02" class="form-label">email</span>
                <span><input type="email" name="inEmail" class="form-control is-valid" id="inEmail"></span>

                <span for="validationServer01" class="form-label">password</span>
                <span> <input type="password" name="inPassword" class="form-control is-valid" id="inPassword"  ></span>

                <span for="validationServer01" class="form-label">telephone</span>
                <span><input type="tel" name="inTele" class="form-control is-valid" id="inTele" ></span>

                <br>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">SIGN UP</button> 
                </div>
            </form>

        </div>

        <div>
            <table class="table table-dark table-hover">
                <tr>
                    <td>id</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Telephone</td>
                    <td>update</td>
                    <td>delete</td>
                </tr>
                <?php
                $query = "SELECT id,username,email,password,tele FROM customer";
                $result = $connection->query($query);

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <form action="cus_update.php" method="POST">
                        <tr>
                            <td><input type="text" name="id" id="id" value="<?php echo $row["id"]; ?>" /></td>
                            <td><input type="text" name="username" id="username" value="<?php echo $row["username"]; ?>" /></td>
                            <td><input type="email" name="email" id="email" value="<?php echo $row["email"]; ?>" /></td>
                            <td><input type="text" name="password" id="password" value="<?php echo $row["password"]; ?>" /></td>
                            <td><input type="text" name="tele" id="tele" value="<?php echo $row["tele"]; ?>" /></td>
                            <td><input type="submit" value="Update" /></td>
                            <td><a href="cus_delete.php?id=<?php echo $row["id"]; ?>">delete</a></td>

                        </tr>
                    </form>
                    <?php
                }
                ?>
            </table>
        </div>

</body>
</html>
