<?php 
     include('conn.php');
    $email=$_POST['useremail'];
    $sql = "SELECT * FROM register WHERE email='$email'";
   $result = $con->query($sql);
   $image=$result->fetch_assoc();
    $email1=$_POST['useremail1'];
    $sql = "SELECT * FROM register WHERE email='$email1'";
   $result1 = $con->query($sql);
   $image2=$result1->fetch_assoc();
?>
