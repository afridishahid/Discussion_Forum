<?php
if(isset($_POST['submit'])) {
	$profileImg= time() . '_' . $_FILES['profileImage']['name'];
	$target='images/' .$$profileImg;
	move_uploaded_file($_FILES['profileImage']['temp_name'],$target);
}

?>