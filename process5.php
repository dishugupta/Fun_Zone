<?php 
     include('conn.php');
     
      $value = rand(1,5);
     $sql = "SELECT * FROM relationship where id='$value'";
     $result = mysqli_query($con,$sql);


     if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
         echo "" . $row["name"];
        // header('Location: RelationView.php');
     }
} else {
    echo "<script>
alert('wrong details');
window.location.href='LOGIN.php';
</script>";
}
?>
