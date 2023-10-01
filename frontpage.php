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
<div class="script" style="z-index:;">
<script type="text/javascript">
 function inputt(){
    alert("You need to login first");
}
</script>
</div>
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
    <input type="text" onclick="inputt()" value="" style="cursor: not-allowed;" placeholder="search by name or id code" class="search"><span class="search1">Search</span>
</div>
<div class="forphp">
    <?php include("dbconnection.php"); 
    if(isset($_POST['submit'])){
    $username=$_POST['adminname'];
    $check="SELECT * FROM adminlogin WHERE username='$username'";
     $result=mysqli_query($connection, $check);
    $hold=mysqli_num_rows($result);
    if($hold < 1){
        echo("Username is not valid");
    }
    else{echo(header("location: frontpagepasswordlogin.php"));}
    mysqli_close($connection);
    
}
    ?></div>
    <div class="" style="position: relative; top: 350px; left: 580px; width:200px; z-index: 5;">
    <?php 
    include("dbconnection.php");
    if(isset($_POST['submit1'])){
        $userlogin= $_POST['userlogin'];
        $hold1 = "SELECT * FROM userlogin WHERE username='$userlogin'";
        $result1  = mysqli_query($connection, $hold1);
        $row = mysqli_num_rows($result1);
        if($row < 1){
            echo("Username is  not Valid");
        }
        else{
             echo(header("location: frontpagepasswordlogin.php"));
        }
        mysqli_close($connection);
    
    }
    ?>
</div>
<div class="mainbody">
    <form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="adminname" class=""/><br>
    <input type="submit" style="position:relative; top: 50px;" class="admin" name="submit" value="Login As Admin"><br>
    <br>
    <br>
    <hr/>
    <label for="username" class="user2">Username:</label>
    <input type="text" name="userlogin" class="user2"/><br>
    <input type="submit" class="user" name="submit1" href="#" value="Login as User"><br>
    <a class="create" href="http://localhost/projectwork/loginoption.html" _blank >Create Account</a>
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