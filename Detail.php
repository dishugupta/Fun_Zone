<?php
     include('process3.php'); 
          session_start();
 if(!isset($_SESSION['username'])){
        header('Location: bootproject1.php');
 }
?>  

<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>     
	<title>Details</title>
	<style>
	#top
	{
		   position: fixed;
    top: 0px;
    left: 0px;
    height: 10%;
    width: 100%;
    text-align:center;
    background:#5ea54c;
    color:black; 
    }
    .aboutuser{
    float:right;
    position: fixed;
    top:3%;
    right:4%;
    font-size:1.5em;
    color:red;

}

     body{
            background-color:antiquewhite;
            background-image: url(images/bg.jpg);
            background-size: cover; 
            background-repeat: no-repeat;
        }
     #b
    {
        position: fixed;
        background-color: #5ea54c;
       color: white;
       text-align: center;
       top: 30%;
       left: 10%;
       width: 20%;
        height: 40%;
        padding: 1% ;
       
      }
        
     #c{
        background-color:#5ea54c;
        position: fixed;
       color: white;
       text-align: center;
       top: 30%;
       right: 10%;
       width: 20%;
       height: 40%;
       padding: 1%;
      
    }
     #d{
        position: fixed;
       color: white;
       text-align: center;
       top: 90%;
       left: 48%;
       size:10%; 
    }
    .display{
    
      padding:5px 10px;
    }
</style>
</head>
<body>
<div id =top>
<img src="images\logo.gif" alt="Smiley face" height="50px" width="50px" style="float:left;position:fixed;top:1.5%;left:4%"><h1 style="line-height:20px;">Person Details</h1>
 <div class="aboutuser">
        <?php  
       if(isset($_SESSION["username"])){
          echo "Hello! ".$_SESSION["username"]; 
          echo '<a href="logout.php"><div class="btn btn-info"> logout</div> </a>';
       }?>
       </div></div>
<form action="View.php" method="POST">
<div id= "b"><p><img src="<?php echo $person1['url'];?>" alt="Smiley face" height="100" width="100" class="img-circle"></p>
<input type="hidden" name="useremail" value="<?php echo $person1['email'];?>">
<label  class="display" ><?php echo $person1["name"];?></label> <br>
 <label  class="display" ><?php echo $person1["email"];?></label> <br>
 <label  class="display" ><?php echo $person1["state"];?></label> <br>
 <label  class="display" ><?php echo $person1["sex"];?></label> <br>
  </div>
  <div id= "c"> <p><img src="<?php echo $person2['url'];?>" alt="Smiley face" height="100" width="100" class="img-circle"></p>
  <input type="hidden" name="useremail1" value="<?php echo $person2['email'];?>">
    <label  class="display"><?php echo $person2["name"];?></label> <br>
 <label  class="display"><?php echo $person2["email"];?></label> <br>
 <label  class="display"><?php echo $person2["state"];?></label> <br>
 <label  class="display"><?php echo $person2["sex"];?></label> <br>
 </div>
 <div id="d">
 <input type="submit"  name="login" value="Check" class="btn btn-success">
 </div>
 </form>
</body>
</html>