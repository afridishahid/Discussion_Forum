<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
		ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
		
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <h2>DISCUSSION FORUM-ADMIN</h2>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="topnav">
                <li><a href="admin.php">Home</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a class="active" href="report.php">Complains<span class="sr-only">(current)</span></a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="logout.php">Logout</a></li>
                
               </ul>
        </div>
		 
              <div class="media border p-3">
              
        <div class="container mt-3">
                <div class="media-body">
                    <p>
                        <?php
                        $ans=mysqli_query($conn,"SELECT * FROM answers");
							
                            while($a=mysqli_fetch_array($ans)){
								 $aid=$a['aid'];
                        $ques=mysqli_query($conn,"SELECT *  FROM report where aid='$aid'");
                        while($q=mysqli_fetch_array($ques))
                        {
                            $rid=$q['rid'];
                            print("<div class='left'>");
                            print ("Complain by:".$q['userid']."Against:".$a['userid']."&nbsp;&nbsp;&nbsp;");
                            print ("<small style='color:blue; font-size:0.13in;'></small></h4><br/>");
                            print ("<u>Complain:</u> <i style='color:darkblue;'>".$q['rep']."</i><br/>");
                            print("</div>");
						}
						}?>

                    </p>
                </div>
            </div>
        </div>              
                        
    </nav>
   
</body>
</html>