<?php
    include('session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];
?>
<html>

<head>
    <title>Confer Space</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../jquery/jquery3.2.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    .right {
  background-color: lightblue;
  float: left;
  width:80%;
  padding: 10px 15px;
  margin-top: 7px;
	}
	.button {
    display: block;
    width: 90px;
    height: 25px;
    background: #007bff;
    padding: 1px;
    text-align: center;
    border-radius: 10px;
	text-decoration : none;
    color: white;
    
}
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="headerWrapper">
        <div class="container">
            <a class="navbar-brand" href="home.php"> Confer Space</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-left">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>History</span>
                            <br>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="user_ques.php">Questions</a>
                            <a class="dropdown-item" href="user_answer.php">Answers</a>
                        </div>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="feedback.php">Give Feedback</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../img_avatar.png" alt="logo image"
                                style="width:20px;height:18px;"><?php echo $full_name; ?>
                            <br>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="dashboard.php">Profile</a>
                            <a class="dropdown-item" href="setting.php">Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <p></p>
    <div class="container mt-3">
        <h2>Answers by You</h2>
        <div class="media border p-3">
            <!--<img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">-->
            <div class="media-body">
                 <p>
                    <?php
                        
                        $ans=mysqli_query($conn,"SELECT qid,answer,userid  FROM answers where userid='".$_SESSION['username']."'");
                        $a=mysqli_fetch_array($ans);
						$qid=$a['qid'];
						$qid2=(int)$qid;
						/*echo (int)$qid; */
						 if($qid2==0) 
						 {
							 print("No Answers Yet");
						 }
							 else
							 { 
                        
                        while($a=mysqli_fetch_array($ans))
                        {
                            $qid=$a['qid'];
                            
                           
                            $ques=mysqli_query($conn,"SELECT `question`,`date` FROM questions WHERE qid='$qid'");

                            while($q=mysqli_fetch_array($ques)){
                                
                                print ("<div class='right'><small style='color:blue; font-size:0.13in;'><i>Posted on:".$q['date']."</i></small></h4><br/>");
                                print ("<b><u>Question:</u></b> <i>".$q['question']."</i><br/>");
                                print ("Your Answer<b></b>: <i>".$a['answer']."</i><a class='button' href='deleteans.php?qid=$qid'>Delete</a></div>");
                                
                            }
						}
                        }

                    ?>

                </p>
            </div>
        </div>
    </div>
	<!--
    <footer id="footer"	class="page-footer font-small teal pt-6 navbar-white bg-dark text-white" style="width:100%;">
            <div class="container-lebal text-center text-md-center" style='color:white;wieght:10%;   font-size:0.13in;'>
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-6 text-left " style="margin-left:3%;" >
                        <h5 class=" font-weight-bold">Contact Us</h5>
                        <p>Email-Id's: ankitsinghmyself@gmail.com<br />sheeku7@gmail.com
                            <br> College: CMRIT, AECS LAYOUT</p>
                    </div>
                    <hr class="clearfix w-60 d-md-none pb-2">
                    <div class="col-md-5 mb-md-0 mb-6 text-right" style="margin-right:2%;">
                        <h5 class=" font-weight-bold">About Us</h5>
                        <p>This website for college discussion forum , where you can post your questions and get them
                            answered by fellow members of the college.</p>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">© 2019 Copyright:
                    <a href="https://ankitsinghprofile.wordpress.com" target="_blank"> Ankit</a> &<a
                        href="https://www.linkedin.com/in/sh33ku" target="_blank"> Sheela</a> @CMRIT
                </div>
            </div>
        </footer> -->
</body>

</html>