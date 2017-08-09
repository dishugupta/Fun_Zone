<?php 
     session_start();

     include('conn.php');
 
     $name=$_POST['uname'];
     $password=$_POST['psw'];
     
    $sql = "SELECT * FROM register WHERE name='$name' AND password='$password'";
$result = mysqli_query($con,$sql);


if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {
        echo "name " . $row["name"]. " password " . $row["password"];
         $_SESSION['username']=$row["name"];
         $_SESSION['uid']=$row["uid"];
         
        header('Location: RelationView.php');
    }
} else {
    echo "<script>
alert('wrong details');
window.location.href='LOGIN.php';
</script>";
}
?>