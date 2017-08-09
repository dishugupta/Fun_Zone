<?php 
     include('conn.php');
     $name=$_POST['name'];
     $email=$_POST['emailid'];
     $password=$_POST['password'];
     $cpassword=$_POST['cpassword'];
     $gender=$_POST['gender'];
     $state=$_POST['state'];
     $uploaddir = 'images/';
     $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
      
$sql = "INSERT INTO register (name,email,state,sex,password,url)
VALUES ('$name','$email','$state','$gender','$password','$uploadfile')";

if ($con->query($sql) === TRUE) 
{
     if ($password === $cpassword) 
     {


    echo "<p>";

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
     echo "File is valid, and was successfully uploaded.\n";
    } else {
         echo "Upload failed";
     }
/*
echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";*/

    echo "New record created successfully";
    header('Location: LOGIN.php');
     }
     else
     {
        echo "<script>
alert('password mismatch');
window.location.href='SignUp.php';
</script>";

} 
}
else 
{
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>


  