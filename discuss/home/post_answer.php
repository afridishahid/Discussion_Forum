<?php
    include('session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];

    if(isset($_POST) & !empty($_POST)){
        $answer = mysqli_real_escape_string($conn,$_POST['ans']);
        $qid = $_GET['qid'];
        
        $sql = "insert into answers (userid,answer,qid) values ('$name', '$answer','$qid')";
        $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($res){
            echo ("<script>alert('Answer Submitted');
    window.location.href='home.php';
    </script>");
        }else{
            
            echo "<script type='text/javascript'>alert('Failed to Submit Your answer');</script>";
        }
    
    }
?>