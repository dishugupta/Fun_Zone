<?php 
       include('conn.php');
 $sql = "SELECT * FROM state";
   $resultperson1 = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="sign.css">
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
#one
{
    position: fixed;
    top: 12%;
    left: 10%;
    height:30%;
    width: 80%;
    text-align: center;
}
form {
    border: 3px solid #f1f1f1;
}
.imgcontainer {
    text-align: center;
    margin: 5px 0 12px 0;
}
img.avatar {
    width: 30%;
    border-radius: 40%;
}
#two
{
    position: fixed;
    top: 0px;
    left: 0px;
    height: 10%;
    width: 100%;
    background:#5ea54c;
    color:black; 
    text-align:center; 
}
</style>
<body style="background-image:url(images/login.jpg);">
<div id="two">
<img src="images\logo.gif" alt="Smiley face" height="50px" width="50px" style="float:left;position:fixed;top:2%;left:4%">
 <h1 class="entry-title" style="text-align:center;"><span>Sign Up</span> </h1></div>
<div id="one" style="" >
<div class="container" style="max-width:650px;">
	<div class="row">
    <div class="col-md-12" >    
            <form class="form-horizontal" method="POST" name="signup" id="signup" enctype="multipart/form-data"  action="process2.php" style="color:white;">  

   <div class="imgcontainer">
    <img src="images/g.png" alt="Avatar" class="avatar">
  </div>   

        <div class="form-group" style="color:white;">
          <label class="control-label col-sm-4">Email ID <span class="text-danger">*</span></label>
          <div class="col-md-7 col-sm-8">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" required>
          </div>
        </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-4">Profile Image <span class="text-danger">*</span></label>
          <div class="col-md-7 col-sm-8">
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
             <input type="hidden" name="MAX_FILE_SIZE" value="512000" style="padding:2%"/>
             <input name="userfile" class="form-control" type="file" />
          </div>
        </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-4">Password <span class="text-danger">*</span></label>
          <div class="col-md-7 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
            </div>  
          </div>
        </div>
            <div class="form-group">
          <label class="control-label col-sm-4">Confirm Password <span class="text-danger">*</span></label>
          <div class="col-md-7 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password" required>
            </div>  
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4">Full Name <span class="text-danger">*</span></label>
          <div class="col-md-7 col-sm-8">
           <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="name" id="mem_name" placeholder="Enter your Name here" required>
          </div>
        </div>
        </div>
       
    
        <div class="form-group">
          <label class="control-label col-sm-4">Gender <span class="text-danger">*</span></label>
          <div class="col-md-7 col-sm-8">
            <label><input name="gender" type="radio" value="Male" checked> Male </label>
            <label><input name="gender" type="radio" value="Female" >Female </label>
          </div>
        </div>
        

        <div class="form-group">
        <label class="control-label col-sm-4">State <span class="text-danger">*</span></label>
         <div class="col-md-7 col-sm-8">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <select name="state" class="form-control">
           <?php
         while($row = $resultperson1->fetch_assoc()) 
          {
         echo "<option>".$row["state_name"]."</option>";
          }
         ?>
            </select>
            </div>
         </div>
        </div>

        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-8">
             <input type="submit"  name="login" value="Sign Up" class="btn btn-success">
          </div>
        </div>
      </form>
    </div>
</div>
</div>
</div>
</body>
</html>