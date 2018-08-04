<html>
<head>
<title>Login</title>
<style>

h1{
background-color:green ;
}
body{
background-size:100% 100%;
margin:50;
}

</style>
<body background="images/1.jpg">
<center>

<h1 style="font-size:60px"><font color="white">Declare dead</font><a href='index.php' style="font-size:30px;color:white;float:right">Log out</a></h1>
<div style="border:2px solid #000000;width:400px;border-radius:20px">
<?php
session_start();
$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:" . mysqli_connect_error());
$email=$_SESSION['email'];

$sql = "select dead from users where email='$email'";
$result=mysqli_query($conn,$sql) or die("failed".mysqli_error($conn));
while($r=mysqli_fetch_assoc($result))
{
$er=$r['dead'];
if($er){

echo "<h1>RIP ".$_SESSION['name'].". <br>Thank you for your valuable response.<br> We will contact you shortly.</h1>";

}

else{
echo '
<form action="declare_dead.php" method="post">
<b><font size=5px>I here by declare that my relative<br>
who had been registered with your organisation<br>
for organ donation is dead and the organ is ready<br>
to be transplanted and give life to a person<br>
in need.<br>
<input type=submit value="Declare dead" name=submit style="width:120px;height:35px;border-radius:20px">';
}}
?>
<?php
if(isset($_POST['submit']))
{
session_start();
$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:" . mysqli_connect_error());
$u_email=$_SESSION['email'];
$sql=mysqli_query($conn,"update organs set ready=1 where donar_id='$u_email'") or die(mysqli_error($conn));
}
?>






</form></div>

</center>

</body>

</head>
</html>