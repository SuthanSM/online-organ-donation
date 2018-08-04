<?php

session_start();
$email=$_POST['h_email'];
$name=$_POST['h_name'];
$phone=$_POST['h_phone'];
$password=$_POST['password'];
$address=$_POST['h_address'];


$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:".mysqli_connect_error());


$sql="insert into hospitals (hid,hname,phone,password,address) values ('$email','$name','$phone','$password','$address')";
if(mysqli_query($conn,$sql)==TRUE){
echo "<h1>Resgistration successful</h1><a href='index.php'>Log in</a>";
}
else{
echo "<h1>you have already registerd</h1><br><a href='index.php'>Log in</a>";
}

$conn->close();
?>