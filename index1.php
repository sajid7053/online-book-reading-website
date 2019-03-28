<?php
$con=mysqli_connect("localhost","root","","store2") or die(mysqli_error($con));
session_start();

?>
<html>
    <head>
        <title>MyBook</title>
        <link rel="stylesheet" type="text/css" href="novelcss.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      
        <div class="header">
            <div class="inner-header">
                <div class="logo">
                    <a href="index.html">MyBook</a>
                </div>
                <div class="header-link">
                    <div>
                        <a href="novel2.php" class="btn"><span class="glyphicon glyphicon-user"></span>Sign up</a>
                    </div>
                    
                </div>
                <div class="header-link">
                    <div>
                        <a href="novel1.php" class="btn"><span class="glyphicon glyphicon-log-in"></span>Login</a>
                    </div>
                </div>
             <div class="head">
                 <a href="#" class="btn">Genre</a>
                 <div class="dropdown-content">
                     <a href="#">Romance</a>
                     <a href="#">Crime</a>
                     <a href="#">Science fiction</a>
                     <a href="#">Mystery thriller</a>
                 </div>
             </div>
            </div>
        </div>
        <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <h1>Read whatever you want</h1>
                        <p>World's all book available here</p><br>
                        <a href="#" class="button">Read here</a>
                    </div>
                </div>
            </div>
            
            </div>
        
    </body>
</html>
