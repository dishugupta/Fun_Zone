<?php
	
	include('admin/config.php');
	
	if(isset($_POST['submit']))
	{
		$name			=	$_POST['name'];
		$mobile			=	$_POST['mobile'];
		$email			=	$_POST['email'];
		$address		=	$_POST['address'];
		$type			=	$_POST['type'];
		$pack			=	$_POST['pack'];
		$date			=	$_POST['date'];
		$packduration	=	$_POST['packduration'];
		$amount			=	$_POST['amount'];
	
		$errval			=	0;
		$user_id		=	$_SESSION['user_id'];
		$id				=	$_SESSION['order']['id'];
		$type1			=	$_SESSION['order']['type'];
		$userdata		=	mysql_query("SELECT * FROM `users` WHERE `id`='".$user_id."' ");
		$user_row		=	mysql_fetch_array($userdata);
		
		if($type=="lunch")
		{
			$service_data	=	mysql_query("SELECT * FROM `lunchmenu` WHERE `id`='".$id."'");	
			$service_row	=	mysql_fetch_array($service_data);
		}
		else
		{
			$service_data	=	mysql_query("SELECT * FROM `dinnermenu` WHERE `id`='".$id."'");	
			$service_row	=	mysql_fetch_array($service_data);
		}
		
		echo $id."<br />";
		echo $user_id."<br />";
		echo $type."<br />";
		print_r($service_row);
		
		
		if($name	!=	$user_row['fullname'])
		{
			$_SESSION['error']	=	"name is missing";
			$errval	=	1;
		}
		
		if($mobile	!=	$user_row['mobile'])
		{
			$_SESSION['error']	=	"contact no. is missing";
			$errval	=	1;
		}
		
		if($email	!=	$user_row['email'])
		{
			$_SESSION['error']	=	"mail id is missing";
			$errval	=	1;
		}
		
		if($address	!=	$user_row['address'])
		{
			$_SESSION['error']	=	"address is missing";
			$errval	=	1;
		}
		
		if($type	!=	$type1)
		{
			$_SESSION['error']	=	"meal type is missing";
			$errval	=	1;
		}
		
		if($pack	!=	$service_row['name'])
		{
			$_SESSION['error']	=	"meal name is missing";
			$errval	=	1;
		}
		
		if(trim($date)	==	"")
		{
			$_SESSION['error']	=	"date is missing";
			$errval	=	1;
		}
		
		if($packduration	!=	"one day"	&&	$packduration	!=	"monthly") 
		{
			$_SESSION['error']	=	"invalid pack duration";
			$errval	=	1;
		}
		
		if(trim($amount)	==	""	||	!preg_match("/^[0-9]*$/",$amount))
		{
			$_SESSION['error']	=	"invalid amount";
			$errval	=	1;
		}
		
		if($errval	==	1)
		{
			@header("location:order.php");
			exit;
		}
		
			else{		
				
					mysql_query("INSERT INTO `order`(`name`,`phone`,`address`,`type`,`pack`,`amount`,`duration`,`email`,`start date`,`end date`) VALUES('".$name."','".$mobile."','".$address."','".$type."','".$pack."','".$amount."','".$packduration."','".$email."','".$date."','".$date."');")or die(mysql_error());
					$_SESSION['sucesses']	=	"order has been send";
					@header("location:index.php");
				}
		
	}
?>