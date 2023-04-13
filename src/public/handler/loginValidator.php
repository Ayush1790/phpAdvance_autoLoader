<?php
include '../config.php';
if(isset($_GET)){
$stmt = "SELECT * from `user` where `name`='$_GET[name]' and `pswd`='$_GET[pswd]'";
$result = mysqli_query($conn, $stmt);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $str=$row['id'].".".$row['name'].".".$row['pswd'];
   $_SESSION['detail']=base64_encode($str);
   header('location:../showData.php');   
}else{
    header('location:../task4.php'); 
}
}