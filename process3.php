<?php 

     include('conn.php');
 
     $name1=$_POST['Personone']; 
     $name2=$_POST['Persontwo'];

     
 $sql = "SELECT * FROM register where name='$name1'";
   $result1 = $con->query($sql);
   $person1=$result1->fetch_assoc();

// if ($resultperson1->num_rows > 0)
//  {
//      while($row = $result->fetch_assoc()) 
//      {
//          echo $row["name"].$row["email"].$row["state"].$row["sex"]."<br>";

         
    
//      }
//  }
//  else 
//  {
//      echo "0 results";
// }

 $sql = "SELECT * FROM register where name='$name2'";
   $result2 = $con->query($sql);
   $person2=$result2->fetch_assoc();

// if ($resultperson2->num_rows > 0)
//  {
//      while($row = $result->fetch_assoc()) 
//      {
//          echo $row["name"].$row["email"].$row["state"].$row["sex"]."<br>";
//          // header('Location: LOGIN.php');
    
//      }
//  }
//  else 
//  {
//      echo "0 results";
// }
//  header('Location: Detail.php');
// $con->close();
?>  