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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../jquery/jquery3.2.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link rel="stylesheet" href="main.css">
	 <script>

	 </script>
	
    <style>
    #headerWrapper {
        position: fixed;
        width: 100%;
        top: 0;
        height: whatever;
        margin-top: -10px;
    }
    .right {
  background-color: lightblue;
  float: left;
  width:80%;
  padding: 10px 15px;
  margin-top: 7px;
}
.left {
  background-color: wheat;
  float: left;
  width:80%;
  padding: 10px 15px;
  margin-top: 7px;
}

.btn2
{
	margin-left:90%;
}
a.button {
    margin-left:90%;
    display: block;
    width: 75px;
    height: 35px;
    background:#0000FF;
    padding: 5px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
#back2Top {
    width: 60px;
    line-height: 60px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;
    right: 0;
    background-color: #DDD;
    color: #555;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
}
#back2Top:hover {
    background-color: #DDF;
    color: #000;
}
h2 {
  position: absolute;
  left: 120px;
  top: 210px;
}
#report{
	margin-left:90%;
	font-style:italic;

}




 </style>
	<script type="text/javascript">
	
	$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
</script>

	
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="headerWrapper">
        <div class="container">
			
            <a class="navbar-brand" href="home.php">Discussion Forum</a>
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
	
    <div>
        <div class="container text-center">
            <h1 class="mt-5 text-dark font-weight-dark">Discussion Forum</h1>

            <form method="post" action="post_ques.php">
                <div class="form-group">
                    <input type="hidden" name="uid" value="$_SESSION['$name']">
                    <textarea name="question" class="form-control" rows="3" required
                        placeholder="Ask your Quesyion?"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ask ?</button><br>
            </form>
        </div>
			
        <hr
            style='height:5px; border:dot; color:blue; background-color:darkblue; width:80%; text-align:center; margin: 0 auto;' />
		
	
            <h2>Recent Posts</h2>
			
            <div class="media border p-3">
              
        <div class="container mt-3">
                <div class="media-body">
                    <p>
                        <?php
							$ans2=mysqli_query($conn,"SELECT * FROM answers");
							$a2=mysqli_fetch_row($ans2);
							
							
							
					/*		
						if(array_key_exists('button1', $_POST)) { 
           button1(); 
        } 
		function button1() { 
		include_once 'connect.php';
           $query=mysqli_query($conn,"update answers set ratings=ratings+1 where aid=2");
							} 
							
						
                        */
                        $ques=mysqli_query($conn,"SELECT *  FROM questions ORDER BY date");
                        
                        while($q=mysqli_fetch_array($ques))
                        {
                            $qid=$q['qid'];
                            print("<div class='left'>");
                            print ("<h4>".$q['userid']."&nbsp;&nbsp;&nbsp;");
                            print ("<small style='color:blue; font-size:0.13in;'><i>Posted on:".$q['date']."</i></small></h4><br/>");
                            print ("<u>Question:</u> <i style='color:darkblue;'>".$q['question']."</i><br>");
							
							/*print("<button class='btn btn2 btn-primary' type='submit' value='report'>Report</button>"); */
							 
                           print("</div>");
                           // $ans=mysqli_query($conn,"SELECT answer,userid,likes FROM answers WHERE qid='$qid'");
							
							$ans=mysqli_query($conn,"SELECT * FROM answers WHERE qid='$qid'");
							
							
                            while($a=mysqli_fetch_array($ans)){
								 $aid=$a['aid'];
								 $answer=$a['answer'];
								
		
							
                                print("<div class='left'>");
								
							
                               // print ("<u>Answered</u> by <b>".$a[3]."</b>: <span class='comment'><i>".$a[1]."</i></span><button data-likes=".$a['ratings']." id='like'>Like (".$a['ratings'].")</button><hr />'");
							  // print ("<u>Answered</u> by <b>".$a[3]."</b>: <span class='comment'><i>".$a[1]."</i></span><div class='article'><a href='like.php'>like</a></div><hr/>'");
							  // print ("<u>Answered</u> by <b>".$a[3]."</b>: <span class='comment'><i>".$a[1]."</i></span><form method='post'><button type='submit'  name='button1'
							   //data-likes=".$a['ratings']." id='like'>Like (".$a['ratings'].")</button></form><hr />'");
					 print ("<u>Answered</u> by <b>".$a[3]."</b>: <span class='comment'><i>".$a[1]."</i></span><div><form method='post' action='like.php?aid=$aid'><button type='submit' value='submit'
							  id='btn1' onclick='disableButton(this)' name='like' data-likes=".$a['ratings']." id='like'>Like (".$a['ratings'].")</button></form></div><hr />'");
							             print("<a id='report' href='report.php?aid=$aid'>Report</a>"); 
                                print("</div>");
                  
                            }
							/*
                            if(array_key_exists('button1', $_POST)) { 
           button1(); 
        } 
		function button1() { 
		include_once 'connect.php';
           $query=mysqli_query($conn,"update answers set ratings=ratings+1 where aid=2");
							}  */
                            print("<div class='right'>");
                            print ("<br/></br><div class='media-body' style='width:80%' >
                                    <form method='post' action='post_answer.php?qid=$qid'>
                                        <textarea class='form-control' name='ans' row='3' maxlength = '1000' placeholder='Answer here' required/></textarea>
                                        <button  class='btn btn-primary' type='submit'  value='submit' >Submit</button>
                                    </form>
                                    <hr style='height:2px; border:dot; color:blue; background-color:darkblue; width:100%; text-align:center; margin: 0 auto;'/></div>");
                                    print("</div>");
                                }


                    ?>

                    </p>
                </div>
            </div>
        </div>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

        <footer class="page-footer font-small teal pt-6 navbar-white bg-dark text-white" style="width:100%;">
            <div class="container-lebal text-center text-md-center" style='color:white;wieght:10%;   font-size:0.13in;'>
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-6 text-left " style="margin-left:3%;" >
                        <h5 class=" font-weight-bold">Contact Us</h5>
                        <p>
                            <br> College: VVCE Mysuru</p>
                    </div>
                    <hr class="clearfix w-60 d-md-none pb-2">
                    <div class="col-md-5 mb-md-0 mb-6 text-right" style="margin-right:2%;">
                        <h5 class=" font-weight-bold">About Us</h5>
                        <p>This website for college discussion forum , where you can post your questions and get them
                            answered by fellow members of the college.</p>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">© 2019 Copyright:
                     @VVCE
                </div>
            </div>
        </footer>
    </div>
	
</body>

</html>