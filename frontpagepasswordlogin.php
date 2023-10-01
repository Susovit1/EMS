<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="css/frontend.css">

</head>
<body> 
    <div>
<div class="header">
    <div class="ems"><img src="img/EMSLogo.png" width="100px" height="100px"/></div>
   <div class="menu">Menu
    <a href="#" >Labour Act 2021 </a>
    <a href="#">Need Help ?</a>
</div>
    <span class="home">Home</span>
    <span class="blog">Blog</span>
    <span class="carrier">Carrier</span>
    <input type="text" value="" placeholder="search by name or id code" class="search"><span class="search1">Search</span>
</div>
<div class="forphp" style="top: 320px; color:red; left: 630px;">
    <?php include("dbconnection.php"); 
    if(isset($_POST['submit'])){
    $pass = $_POST['password'];
    $check="SELECT * FROM adminlogin WHERE password ='$pass'";
    $check2="SELECT * FROM userlogin WHERE password = '$pass'";
     $result=mysqli_query($connection, $check);
     $result1=mysqli_query($connection, $check2);
    $hold=mysqli_num_rows($result);
    $hold2=mysqli_num_rows($result1);
    if(($hold || $hold2) < 1){
        echo("*Password is not valid");
    }
    else{echo(header("location: aftercreatedac.php"));}
}
    ?>
</div>
<div class="mainbody">
    <form action="" method="POST">
    <label for="username" style="position:absolute; top:150px;">Password:</label>
    <input type="password" style="position:relative; top:100px;" name="password" class=""/><br>
    <input type="submit" style="position:relative; top:150px;" class="admin" name="submit" value="Login "><br>
</form>
</div>
<div class="foot">
   <div class="horizantalline"></div>
</div>
    </div>
    <div class="background">
        <div class="media">
            <a href="#" class="">Facebook</a>
            <a href="#" class="">Instagram</a>
            <a href="#" class="">Twitter</a>
            <a href="#" class="">LinkedIn</a>
        </div>
        <div class="media2">
            <a href="#">Blog</a>
            <a href="#">Contact Us</a>
            <a href="#">Donations</a>
            <a href="#">Terms and Conditions</a>
            <footer style="text-align: center;"class="">2021&copy;All Rights Reserved.</footer>
        </div>
        <div class="sign"><a href="#">Sign Up</a></div>
        <div class="emailus">
            <input type="email" class="" value="" placeholder="Example@gmail.com"/>
        </div>
        
          </div>
          
  
</body>
</html>