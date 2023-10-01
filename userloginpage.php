<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/userlogin.css">
<script src="passvalidate.js"></script>
</head>
<body>
   
    <!--HEADER PARTS-->
    <div>
        <div class="header">
            <div class="ems"><img src="img/EMSLogo.png" width="100px" height="100px"/></div>
           <div class="menu">Menu
               <a href="#">Labour Act 2021</a>
            <a href="#" >Need Help ? </a>
        </div>
            <span class="home">Home</span>
            <span class="blog">Blog</span>
            <span class="carrier">Carrier</span>
            
                  <input type="text" value="" placeholder="search by name or id code" class="search">
                 <div class="search1">Search</div>
            </div>
   
    <!--USER FORM PART-->
    <div class="serveruser">
        <?php
       $connection2 = mysqli_connect("localhost", "prahlad1", "", "employees management");
       if(!$connection2){
           die ("NOT CONNECTED".mysqli_connect_error());
           }
           else{
              // echo("Connection found");
           }
    
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $address=$_POST['address'];
        $telno=$_POST['telno'];
        $datetime=$_POST['datetime'];
        $country=$_POST['country'];
        $branch=$_POST['branch'];
        $branchcode=$_POST['code'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $repass=$_POST['repassword'];
        $sql = "INSERT INTO userlogin(firstname, lastname, address, telno, datetime, 
        country, branch, branchcode, email, username, password, repass)
         VALUES ('$firstname', '$lastname', '$address', '$telno', '$datetime', 
         '$country', '$branch', '$branchcode', '$email', '$username', '$password', '$repass')";
         if(mysqli_query($connection2, $sql)){
            // echo ("record created successfull");
         }
         else{
             echo ("errors".$sql."<br>".mysqli_error($connection2));
         }
         mysqli_close($connection2);
        }
        ?>
            <script type="text/javascript" src="passvalidate.js"></script> 

    </div>

    <script>
    function anotherpage(){
        window.location.href = "http://localhost/projectwork/loginoption.html";
    }
</script>
    
    <div class="blurimage"></div>
    <div class="userform">
        <form action="frontpage.php" onsubmit="return validate()" method="POST">
            <!-- <div class="pcircle"><p>Profile </p><p>Upload</p></div>-->
             <p class="head">User Registration</p><br>
             <label for="first" class="company">First Name:</label>
             <input type="text" name="firstname"class="comin" quired/><br/>
             <label for="lastname" class="pan">Last Name:</label>
             <input type="text" name="lastname" class="panbox" eqiured/><br/>
             <label> Address:</label>
             <input type="text" name="address" class="address" equired/><br/>
             <label> Mobile No:</label><select class="select" id="option">
                 <option value="+977">+977</option>
                 <option value="+91">+91</option>
             </select>
             <input type="tel" name="telno" maxlength="10" class="telephone" uired><br>
             <label for="faxno">Date Of Birth:</label>
             <input type="datetime" class="faxno" maxlength="10" name="datetime"><br>
             <label for="country">Country:</label>
             <input type="text" class="" name="country" list="countrylist" quired>
             <datalist id="countrylist">
                 <option value="Nepal">Nepal</option>
                 <option value="India">India</option>
                 <option value="China">China</option>
                 <option value="Bhutan">Bhutan</option>
                 <option value="Pakistan">Pakistan</option>
                 <option value="Srilanka">Srilanka</option>
                 <option value="Africa">Africa</option>
             </datalist><br>
             <label for="origin">Company Branch Name:</label>
             <input type="text" class="" name="branch" quired><br>
             <label for="countryestablished">Branch Code:</label>
             <input type="number" class="" name="code" quired><br>
             <label for="email"> Email:</label>
             <input type="email" class="" name="email" quired><br>
             <label for="username">Username:</label>
             <input type="text" class="" name="username" quired><br>
             <label for="password">New Password:</label>
             <input type="password" class="paas" id="password" name="password"><br>
             <label for="repassword">Re-Type Password:</label>
             <input type="password" class="repass" id="repassword" name="repassword"><br>
             <input type="submit" value="Confirm To Submit" name="submit" class="submitbtn">
             <input type="button" onclick="anotherpage()" value="Cancel" class="cancel">
             <input type="checkbox" class="checkbox" ired><div class="terms">I agree to the Terms and Conditions</div>
         </form>
    </div>


    <!--FOOTER PARTS-->
    <div class="footerpart">
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
                <footer style="text-align: center;"class="">&copy;All Rights Reserved.</footer>
                <p class="old">2021</p>
               
            </div>
            <div class="emailus">
                <input type="email" class="" value="" placeholder="Example@gmail.com"/>
                <div class="sign"><a href="#">Sign Up</a></div>
            </div>
        </div>
    </body>
    </div>
</body>
<html>