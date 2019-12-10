<?php 
include('index.php');
include('connect.php');

$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];


mysqli_select_db($conn,"id11475573_confer");

$data="insert into users(userid,name,password,email,mobile,gender)values('$username','$name','$password','$email','$mobile','$gender')";
$insertData=mysqli_query($conn,"$data");

if(!$insertData){
    echo ("<script>alert('Registration fail');</script>").mysqli_error($conn);
}
else {
    echo ("<script>alert('Registration Done');
    window.location.href='index.php';
    </script>");
}

?>