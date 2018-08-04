<html>
<head>
<title>Login</title>
<style>


body{
background-size:100% 100%;
margin:50;
}

</style>
<body background="images/1.jpg">
<center>

<h1 style="font-size:60px;background-color:green"><font color="white">Welcome donar</font><a href='index.php' style="font-size:30px;color:white;float:right">Log out</a></h1>
<br><br><br>
<?php

session_start();
$email=$_SESSION['email'];
if(isset($_POST['c']))
$organs_donated=$_POST['c'];
$n=count($organs_donated);
$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:" . mysqli_connect_error());
if($n>0){
for($i=0;$i<$n;$i++){
$sql2=mysqli_query($conn,"call add_organs('$organs_donated[$i]','$email')");
}}
if($sql2)
echo "<h1>Organs donated successfully</h1><a href='donar_home.php'><font size=20px>Home<a>";
else
echo "<h1>you have already donated this organ</h1><br>

<a href='donar_home.php'><font size=20px>Home</a>";











?>
</center>

</body>

</head>
</html>