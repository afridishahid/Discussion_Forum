<?php
  session_start();
  include("../connect.php");

  $username=$_POST['username'];
 
  $email=$_POST['email'];

  mysqli_select_db($conn,"id11475573_confer");

  $update2="UPDATE `users` SET username = '$username' where email='$email'";
  $Data=mysqli_query($conn,"$update2")or die("Not Updating".mysqli_error($conn));
if(!$Data){
    echo ("<script>alert('Error in Updated');</script>").mysqli_error($conn);
}
else{
    echo ("<script>alert('Registration Done');
    window.location.href='setting.php';
    </script>");
}
mysqli_close($conn);
?>