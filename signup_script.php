<?php
$con= mysqli_connect("localhost","root","","novel");
if(isset($_POST['submit_btn'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$sql="insert into nov(name,email,password,contact) values ('$name','$email','$password','$contact')";
$run=mysqli_query($con,$sql);
if($run){
    echo 'successfully registered';
    header("refresh:2;url=index1.php");
}
else {
    echo "error:".mysqli_error($con);
}
}
