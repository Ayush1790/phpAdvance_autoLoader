<?php
include '../config.php';
if (isset($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    // adding the data in database
    $stmt = "INSERT into `user`(`id`,`name`,`email`,`pswd`) values (null,'$name','$email','$pswd')";
    $result = mysqli_query($conn, $stmt);
    if ($result) {
        setcookie("email", $email,time() + (86400 * 30), "/");
        setcookie("pswd", $pswd,time() + (86400 * 30), "/");
        header('location:../task4.php');
       
    } else {
        header('location:../task6.php?msg='.mysqli_connect_error($result));
    }
}
