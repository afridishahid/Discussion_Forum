<?php
   include('..\connect.php');
   session_start();
   
   $user_check = $_SESSION['username'];
   
  $ses_sql = mysqli_query($conn,"select * from users where userid = '$user_check' ")or die("".mysql_error($conn));

   
   $row = mysqli_fetch_array($ses_sql)or die("".mysqli_error($conn));
   
   $username = $row['userid'];
   $full_name = $row['name'];
   $email = $row['email'];
   $password = $row['password'];
   $mobile = $row['mobile'];
   $gender= $row['gender'];
  /* $id=$row['id']; */
   /*$image=$row['image']; */


   $_SESSION['username']=$username;
   $_SESSION['email']=$email;
   $_SESSION['password']=$password;
   
   $q_sql = mysqli_query($conn,"select * from questions");
   $r = mysqli_fetch_array($q_sql)or die("".mysqli_error($conn));
   $date = $r['date'];

   $_SESSION['date']=$date;

   if(!isset($_SESSION['username'])){
      header("location:..\index.php")or die("".mysqli_error($conn));
      die();
   }
?>