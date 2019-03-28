<?php
$con=mysqli_connect("localhost","root","","store2") or die(mysqli_error($con));
session_start();
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="novel2.css">
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
     <div class="padding-all">
		<div class="header1">
			<h1>MyBook</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="login_submit.php" method="post">
					<input type="text" name="email" placeholder="User Name  or  email..." required=""/>
					<input type="password"  name="password" class="padding" placeholder="Password" required=""/>
					<input type="submit" name="login_btn" value="login">
				</form>
			</div>
		  <div class="clear"> </div>
		</div>
		
	</div>
       
    </body>
</html>
