 <?php
   include('session.php');
   include('connect.php');
   
?>
<?php
if(isset($_POST['submit'])){
	$files=$_FILES['file'];
	$filename=$files['name'];
	$fileerror=$files['error'];
	$filetmp=$files['tmp_name'];
	$fileext=explode('.',$filename);
	$filecheck= strtolower(end($fileext));
	$fileextstr=array('png','jpg','jpeg');
	$email=$_SESSION['email'];
	/*$image=$_POST['image'];*/
	

}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Confer Space</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../jquery/jquery3.2.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<style>
	
#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:150px;   /* Height of the footer */
   background:#6cf;
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
                        <a class="nav-link" href="feedback.php">
                            Give Feedback<span><?php $count?></span>
                        </a>
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
        <div align="center">
        <p></p>
           <h4> Your Name: <?php echo $full_name; ?></h4>
            <form action="update_name.php" method="post">
                <b>Change UserName:</b> <input type="text" name="name" placeholder="<?php echo "Name"; ?>"
                    required />
                <button type="submit" value="submit" class="btn btn-danger">Change</button><br><br>
            </form>
            <p></p>
           
           
            <p></p>
            <h4> Old Password: <?php echo "******"; ?></h4>
            <form action="update_password.php" method="post"><b>Enter New Password:</b> <input type="password"
                    name="password" data-type="password" placeholder="<?php echo "password"; ?>" required />
                <button type="submit" value="submit" class="btn btn-danger">Update</button><br><br>
            </form>
            <p></p>
            <h4> Primary Mobile Number : +91-<?php echo $mobile; ?></h4>
            <form action="update_mobile.php" method="post"><b>Enter New Mobile Number:</b> <input type="text" name="mobile"
                    placeholder="<?php echo "mobile number"; ?>" required />
                <button type="submit" value="submit" class="btn btn-danger">Change</button><br><br>
            </form>
			<h4> Upload Profile Picture</h4>
			<form method="POST" action="setting.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="file" id="file">
  		<button type="submit" class="btn btn-primary" name="submit">POST</button>
  	</div>
	
	</form>
        </div>
    </div>

    <footer id="footer" class="page-footer font-small teal pt-6 navbar-white bg-dark text-white" style="width:100%;">
            <div class="container-lebal text-center text-md-center" style='color:white;wieght:10%;   font-size:0.13in;'>
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-6 text-left " style="margin-left:3%;" >
                        <h5 class=" font-weight-bold">Contact Us</h5>
                       
                            <br> College: VVCE,Mysuru</p>
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
</body>

</html>