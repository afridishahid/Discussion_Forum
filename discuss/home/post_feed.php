<?php
    include('session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];

    if(isset($_POST) & !empty($_POST)){
        $feed = mysqli_real_escape_string($conn,$_POST['feed']);
        $sql = "insert into feedback (userid,feed) values ('$name','$feed')";
        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($res){
            echo ("<script>alert('Feedback Given');
    window.location.href='feedback.php';
    </script>");
        }else{
            
            echo "<script type='text/javascript'>alert('Failed to Submit Feedback');</script>";
        }
        
    }
?>