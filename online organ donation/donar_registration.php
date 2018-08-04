<?php

session_start();
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['r'];
$blood_group=$_POST['r1'];

$organs_donated=$_POST['c'];
$n=count($organs_donated);

$d_id=$_POST['d_email'];
$d_name=$_POST['d_name'];
$d_phone=$_POST['d_phone'];
$d_address=$_POST['d_address'];

$relation=$_POST['relation'];


$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:" . mysqli_connect_error());
$sql1=mysqli_query($conn,"insert into dependents (d_email,address,phone,name) values ('$d_id','$d_address','$d_phone','$d_name')") or die(mysqli_error($conn));

$sql=mysqli_query($conn,"insert into users (email,name,phone,password,address,age,gender,blood_group,did) values ('$email','$name','$phone','$password','$address','$age','$gender','$blood_group','$d_id')") or die("failed:" . mysqli_error($conn));
$sql3=mysqli_query($conn,"insert into relationship (d_email,email,relationship) values ('$d_id','$email','$relation')") or die(mysqli_error($conn));
if($n>0){
for($i=0;$i<$n;$i++){
$sql2=mysqli_query($conn,"call add_organs('$organs_donated[$i]','$email')") or die(mysqli_error($conn));
}}
if($sql)
echo "<h1>Registered successfully</h1><a href='index.php'>Log in</a>";
else
echo "<h1>you have already registerd</h1><a href='index.php'>Log in</a>";


$conn->close();
?>