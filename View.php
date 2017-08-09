<?php

    include('process4.php');
         session_start();
 if(!isset($_SESSION['username'])){
        header('Location: bootproject1.php');
 }
     if(  $image2['sex']=="Male" &&  $image1['sex']=="Male" ){
      $value = rand(19,22);
    }
    else if ($image2['sex']=="Female" &&  $image1['sex']=="Female") {
       $value = rand(11,18);
    } else {
      $value = rand(1,10);
    }
    
     $sql = "SELECT * FROM relationship where id='$value'";
     $result = mysqli_query($con,$sql);


     if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
} else {
    echo "<script>
alert('wrong details');
window.location.href='LOGIN.php';
</script>";
}


?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <style>
        body{
            background-color:darkseagreen;
            background-image: url("images/sign.jpg");
        }
        #one{
            position: fixed;
            text-align: center;
            top:200px;
            left:200px;
            
            border-radius: 100%;
            height: 250px;
            width: 250px;
            background-color: snow;
        }
           #rel{
            position: fixed;
            text-align: center;
            top:200px;
            left:42%;
            
            border-radius: 100%;
            height: 250px;
            width: 250px;
            background-color: snow;
        }
        #two{
             position: fixed;
            text-align: center;
            top:200px;
            left:950px;
            
            border-radius: 100%;
            height: 250px;
            width: 250px;
            background-color:bisque;
        }
        #up{
            position: fixed;
        width: 100%;
        top: 0%;
        left: 0%;
        background-color: #285e3b;; 
        color: azure;
        text-align: center;
        }
        
        #three{
            
            position: fixed;
            text-align: center;
            top:550px;
            left:40%;
            right: 40%;
            font-size:2em;
            background: white;
            padding:20px;
           
        }
        button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    box-shadow: 10px 10px 5px black;
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
<div class="container">
   <div id="up">
   <img src="images\logo.gif" alt="Smiley face" height="50px" width="50px" style=" position: fixed; float:left;top:1.5%;left:4%">
        <h1 class="entry-title" style="text-align:center;"><span>YOUR RELATION</span> </h1>
         <div class="aboutuser">
        <?php  
       if(isset($_SESSION["username"])){
          echo "Hello! ".$_SESSION["username"].'   '; 
          echo '<a href="logout.php"><div class="btn btn-info">logout</div> </a>';
       }?>
       </div>
   </div>
   <div id="one">
       <img src="<?php echo $image['url']?>" alt="Smiley face" height="100%" width="100%" class="img-circle">
   </div>
     <div id="rel">
       <p style="align-content:center;"> <img src="<?php echo $row['url']?>" alt="Smiley face" height="100%" width="100%" class="img-circle"></p>
  </div> 
    <div id="two">
       <p style="align-content:center;"> <img src="<?php echo $image2['url']?>" alt="Smiley face" height="100%" width="100%" class="img-circle"></p>
  </div>

  <div id="three">
    <?php 
         echo "" . $row["name"];
    ?>    
  </div>
</div>
</body>
</html>