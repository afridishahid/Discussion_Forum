<?php
    include('session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];

    if(isset($_POST)){
     
        $aid = $_GET['aid'];
        
        $sql=mysqli_query($conn,"update answers SET ratings = ratings + 1 where aid='$aid'");
        $res = mysqli_query($conn,$sql);
        if($res){
            echo ("<script>alert('Up voted');
    window.location.href='home.php';
    </script>");
        }else{
            
            echo "<script type='text/javascript'>alert('Upvoted');window.location.href='home.php';</script>";
        }
    
    }
?>