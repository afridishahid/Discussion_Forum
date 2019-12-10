<?php
    include('session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];

    if(isset($_POST) & !empty($_POST)){
        $rep = mysqli_real_escape_string($conn,$_POST['rep']);
		$aid = $_GET['aid'];
		
        $sql = "insert into report (userid,rep,aid) values ('$name','$rep','$aid')";
        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($res){
            echo ("<script>alert('Complain has been recorded');
    window.location.href='report.php';
    </script>");
        }else{
            
            echo "<script type='text/javascript'>alert('Failed to Submit Feedback');</script>";
        }
        
    }
?>