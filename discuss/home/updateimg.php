<?php
  session_start();
  include("../connect.php");
  $image=$_POST['image'];
  $email=$_SESSION['email'];

  mysqli_select_db($conn,"confer");

  $update2="update `users` SET `image` = '$image' where `email`='$email'";
  $Data=mysqli_query($conn,"$update2")or die("Not Updating".mysql_error());
if(!$Data){
    echo ("<script>alert('Error in Updated');</script>").mysql_error();
}
else{
    echo ("<script>alert('Profile Picture Uploaded');
    window.location.href='setting.php';
    </script>");
}
mysql_close($conn);
?>