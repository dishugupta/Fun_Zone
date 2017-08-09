<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<style>
form {
    border: 2px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 10px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
}
#one
{
    position: fixed;
    top: 13%;
    left: 35%;
    height:30%;
    width: 30%;

}
#two
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
</style>
<body style="background-image:url(images/login.jpg); ">
<div id="two">
<img src="images\logo.gif" alt="Smiley face" height="50px" width="50px" style="float:left;position:fixed;top:1.5%;left:4%">
<h3>LOGIN FORM</h3>
</div>
<div id="one">
<form action="process.php" style="padding:15px" method="POST">
  <div class="imgcontainer">
    <img src="images/n.png" alt="Avatar" class="avatar">
  </div>

  <div  class="form-group" >
    <label style="color:white;"><span class="glyphicon glyphicon-user" style="color:white " ></span>  Username</label>
    <input type="text" class="form-controls" placeholder="Enter Username" name="uname"  required></div>
<div  class="form-group" ">
    <label style="color:white;"><span class="glyphicon glyphicon-eye-open"></span><b> Password</b></label>
    <input type="password" class="form-controls" placeholder="Enter Password" name="psw" required></div>  
    
    <input type="checkbox" checked="checked" ><label style="color:white;">Remember me</label>
  
  <button type="submit" style="background-color:#4CAF50">Login</button>

    <button type="button" class="cancelbtn" style="background-color:red">Cancel</button>
    
  </div>
</div>
</body>
</html>


