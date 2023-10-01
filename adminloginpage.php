<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/phpfile.css">
</head>
<body>
    <div class="forblur"></div>
    <div class="phpfile">
<?php 
include_once("./htmlfiles/heading.php");
?>
<style><?php include("css/heading.css"); ?></style>
</div>
<div class="phpbody">
    <?php include_once("./htmlfiles/adminlogin.php") ?>
    <style><?php include("css/adminlog.css") ?></style>
</div>
<div class="footerphp">
<?php include_once("./htmlfiles/footer.php"); ?>
<style><?php include("css/foot.css"); ?></style>
</div>
</body>
</html>