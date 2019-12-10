<?php
  session_start();
  include("../connect.php");
  $password=$_POST['password'];
  $email=$_SESSION['email'];

  mysqli_select_db($conn,"id11475573_confer");

  $update2="update `users` SET `password` = '$password' where `email`='$email'";
  $Data=mysqli_query($conn,"$update2")or die("Not Updating".mysqli_error($conn));
if(!$Data){
    echo ("<script>alert('Error in Updated');</script>").mysqli_error($conn);
}
else{
    echo ("<script>alert('Password Changed');
    window.location.href='setting.php';
    </script>");
}
mysql_close($conn);
?>