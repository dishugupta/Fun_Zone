<?php
	include("admin/config.php");
	if(isset($_POST['submit']))
	{
		$name=$_POST['username'];
		$email=$_POST['email'];
		$mob=$_POST['mobile'];
		$msg=$_POST['message'];
		$add=$_POST['address'];

			$data=mysql_query("insert into `user_contactus`(`name`,`mailid`,`contact`,`message`,`address`)values('".$name."','".$email."','".$mob."','".$msg."','".$add."');")or die(mysql_error());
			$_SESSION['sucesses']="Your message has send";
			@header("Location:index.php");
			exit;
		}	
	
	else
	{
		$_SESSION['contact_failed']="please fill form first";
		@header("Location:contactus.php");
		exit;
	}
?>