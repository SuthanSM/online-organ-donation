<?php
session_start();
$h_id=$_SESSION['h_email'];
$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:" . mysqli_connect_error());
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$age=$_POST['age'];
$gender=$_POST['r'];
$blood_group=$_POST['r1'];

$organs_required=$_POST['c'];
$n=count($organs_required);
if($n>0){
for($i=0;$i<$n;$i++){

$sql=mysqli_query($conn,"insert into patients (email,name,phone,organ_required,address,age,gender,blood_group,hid) values ('$email','$name','$phone','$organs_required[$i]','$address','$age','$gender','$blood_group','$h_id')") or die("failed:" . mysqli_error($conn));



}}
if($sql){
echo "<h1>Patient successfully registered</h1>";
echo "<a href='hospital_home.php'>Home</a>";
}
else
echo "<h1>you have already registerd</h1><a href='index.php'>Log in</a>";


$conn->close();





?>