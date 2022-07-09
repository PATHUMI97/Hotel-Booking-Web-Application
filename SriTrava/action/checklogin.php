<?php

session_start();
include './dbconnection.php';


$email = "";
$password = "";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if ($email == "") {
    header("Location:../login.php?msg=email required");
    die();
}
if ($password == "") {
    header("Location:../login.php?msg=password required");
    die();
}

$selectQuery = "SELECT * FROM user WHERE email='" . $email . "'";

$result = $connection->query($selectQuery);
if ($result->num_rows > 0) {
    //echo 'usr found';
    while ($row = $result->fetch_assoc()) {
        if ($row['is_active'] != '1') {
            echo 'inactive user';
        } elseif ($password == $row['password']) {
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION['is_login'] = TRUE;
            if ($row['user_type'] === '1') {
                header("Location:../admin_panel/adminpanel.php?msg=welcome to Admin Panel");
                die();
            } else {
                header("Location:../index.php?msg=welcome to Home Panel");
                die();
            }
        } else {
            header("Location:../login.php?msg=invalid password");
            die();
        }
    }
} else {
    //  echo 'invalid user';
    header("Location:../signup.php?msg=please sign up first");
}



//include '../admin_panel/adminpanel.php';