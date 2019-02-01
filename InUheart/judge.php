<?php 
	if(!isset($_COOKIE["rank"]))
		echo "<script>location.href='index.html';</script>";
	else if($_COOKIE["rank"]=="user")
		echo "<script>location.href='user_home.php';</script>";
	else if($_COOKIE["rank"]=="admin")
		echo "<script>location.href='teacher_home.php';</script>";
?>