<?php
    include("connect.php");
    
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $result = mysqli_query($conn,"SELECT * FROM users WHERE userid='$username' and password='$password'")or die('Error: '.mysqli_error($conn));

$r=mysqli_fetch_row($result);
if($r[0]==$username){
  session_start();
  if(isset($_SESSION['username'])){
    session_unset();
  }
  $_SESSION["username"]=$username;
  header("location:home\home.php");

}
else {
	/*
  echo("Invalid Username or Passsword"); */
  echo "<script>
alert('Invalid Username or password');
window.location.href='index.php';
</script>";
}
?>
