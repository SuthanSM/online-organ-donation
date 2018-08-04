<?php


session_start();
$email=$_POST['email'];

$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:" . mysqli_connect_error());

$sql = "select name from users where email='$email' and password='$password'";
$result=mysqli_query($conn,$sql) or die("failed".mysqli_error($conn));
$num_rows=mysqli_num_rows($result);
if($num_rows!=0){
while($row=mysqli_fetch_assoc($result))
{
	$_SESSION['name']=$row['name'];
$_SESSION['email']=$email;

	header('location:/swarup/donar_home.php');
}
 

}
else {
$sql = "select hname from hospitals where hid='$email' and password='$password'";
$result=mysqli_query($conn,$sql) or die("failed:".mysqli_error($conn));
$num_rows=mysqli_num_rows($result);
if($num_rows!=0){
while($row=mysqli_fetch_assoc($result))
{
	$_SESSION['name']=$row['name'];
	$_SESSION['h_email']=$email;

}
header('location:/swarup/hospital_home.php');
 

}
else{
$sql = "select u.name from dependents d,users u where u.email='$email' and d.d_email='$password'";
$result=mysqli_query($conn,$sql) or die("failed".mysqli_error($conn));
$num_rows=mysqli_num_rows($result);
if($num_rows!=0){
while($row=mysqli_fetch_assoc($result))
{
	$_SESSION['name']=$row['name'];
$_SESSION['email']=$email;

	header('location:/swarup/declare_dead.php');
}




}
else{
echo "<h1>Password didn't match with the username!</h1><a href='index.php'>Try again</a>";
	
}}}
$conn->close();
?>