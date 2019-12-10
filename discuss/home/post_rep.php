<?php
    include('session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
   

    if(isset($_POST) & !empty($_POST)){
        $rep = mysqli_real_escape_string($conn,$_POST['rep']);
        $sql = "insert into report (userid,rep) values ('$name','$rep')";
        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($res){
            echo ("<script>alert('Report Submitted');
    window.location.href='user_report.php';
    </script>");
        }else{
            
            echo "<script type='text/javascript'>alert('Failed to Submit Report');</script>";
        }
        
    }
?>