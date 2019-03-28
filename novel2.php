<?php
$con=mysqli_connect("localhost","root","","store2") or die(mysqli_error($con));
session_start();
?>

<html>
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" type="text/css" href="novel3.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         
          <div class="padding-all">
		<div class="header1">
			<h1>MyBook</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="signup_script.php" method="post">
                                        <input type="text" name="name" placeholder='Name' required=""/>
					<input type="text" name="email" placeholder="Email" required=""/>
                                        <input type="password"  name="password" class="padding" placeholder="Password" required=""/>
                                        
                                           <input type="text" name="contact" placeholder="Contact" required=""/>
                                        <br><br>
					<input type="submit" name="submit_btn" value="Sign up">
                                       
                                     
				</form>
			</div>
		  <div class="clear"> </div>
		</div>
		
		<div class="footer">
		<p>© 2019  MyBook. All Rights Reserved | Design by  Sajid #FortheThrones</p>
		</div>
	</div>
    </body>
</html>
