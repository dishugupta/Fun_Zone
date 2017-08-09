<?php 
       include('conn.php');
       session_start();
 if(!isset($_SESSION['username'])){
        header('Location: bootproject1.php');
 }
 $sql = "SELECT * FROM register";
   $resultperson1 = $con->query($sql);
?>
<?php 
       include('conn.php');
 $sql = "SELECT * FROM register";
   $resultperson2 = $con->query($sql);
?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <style>
        body{
            background-color:antiquewhite;
            background-image: url(images/bg.jpg);
            background-size: cover; 
            background-repeat: no-repeat;
        }
        #one{
            position: fixed;
            text-align: center;
            top:150px;
            left:100px;
            height: 150px;
            background-color: #285e3b;
            
        }
        #two{
            position: fixed;
            text-align: center;
            top:150px;
            left:1100px;
            height: 150px;
            background-color: #285e3b;
        }
        #up{
             position: fixed;
             margin-bottom:25px;
             top: 0px;
              left: 0px;
              height: 10%;
             width: 100%;
             
              background:#5ea54c;
            color:black; 
            
            }
        #button{
            position: fixed;
            text-align: center;
            top:90%;
            left:48%;
            background-color: crimson;
        }
        .imgcontainer { 
            text-align: center;
            max-width: 200px;       
         }
        img.avatar {
        width: 50%;
        border-radius: 40%;
         }
.btn-primary {
    background-color: #285e3b;
    color: #ffffff;
}
.aboutuser{
    float:right;
    position: fixed;
    top:3%;
    right:4%;
    font-size:1.5em;
    color:red;

}

    </style>
</head>
<body>
      <div id="up">
    <img src="images\logo.gif" alt="Smiley face" height="50px" width="50px" style="float:left;position:fixed;top: 1%;left: 4% ">
      <h1  style="text-align:center; ">FIND  RELATIONSHIP</h1>
         <div class="aboutuser">
        <?php  
       if(isset($_SESSION["username"])){
          echo "Hello! ".$_SESSION["username"]; 
          echo '<a href="logout.php"><div class="btn btn-info"> logout</div> </a>';
       }?>
       </div>
      </div>  
    <form action="Detail.php" style="padding:20px" method="post" >
<div id="one">
 <div class="imgcontainer">
<img src="images/g.png" alt="Avatar" class="avatar">
</div>
<select name="Personone">
<?php
 while($row = $resultperson1->fetch_assoc()) 
     {
         echo "<option>".$row["name"]."</option>";
     }
     ?>
</select>
</div>
    <div id="two">
 <div class="imgcontainer">
<img src="images/g.png" alt="Avatar" class="avatar">
</div>
<select name="Persontwo">
<?php
 while($row = $resultperson2->fetch_assoc()) 
     {
         echo "<option>".$row["name"]."</option>";
     }
     ?>
</select>
</div>
    <div id="button">
    <input type="submit"  name="login" value="Sign Up" class="btn btn-primary">
    </div>
    </form>
</body>
</html>