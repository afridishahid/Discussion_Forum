<?php
    include('session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];

if(isset($_POST)){
     
        $qid = $_GET['qid'];
        
        $sql=mysqli_query($conn,"delete from questions where qid='$qid'");
        $res = mysqli_query($conn,$sql);
        if($res){
            echo ("<script>alert('Deleted');
    window.location.href='user_answer.php';
    </script>");
        }else{
            
            echo "<script type='text/javascript'>alert('Answer Removed');window.location.href='user_answer.php';</script>";
        }
    
    }
?>