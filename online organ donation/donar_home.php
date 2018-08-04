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
<a href="index.php" style="font-size:30px;color:black;float:right">Log out</a>
<center>
<?php
session_start();
$email=$_SESSION['email'];
$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:" . mysqli_connect_error());
$sql = "select dead from users where email='$email'";
$result=mysqli_query($conn,$sql) or die("failed".mysqli_error($conn));
while($r=mysqli_fetch_assoc($result))
{
$er=$r['dead'];
if($er){
echo "<br><br><br><br><br><br><font size=20px>RIP ".$_SESSION['name'].". <br></h1>";
}
else{
echo '
<h1 style="font-size:60px"><font color="white">Welcome donar</font></h1>
<div style="border:2px solid #;width:400px;border-radius:20px">
<form action="add_organs.php" method="post">
<b><h3>Organs that you wish to donate:</h3><table border=0>
<tr><td><input type="checkbox" name="c[]" value="corneas">Corneas</td></tr>
<tr><td><input type="checkbox" name="c[]" value="heart">Heart</td></tr>
<tr><td><input type="checkbox" name="c[]" value="kidneys">Kidneys</td></tr>
<tr><td><input type="checkbox" name="c[]" value="liver">Liver</td></tr>
<tr><td><input type="checkbox" name="c[]" value="lungs">Lungs</td></tr>
<tr><td><input type="checkbox" name="c[]" value="pancreas">Pancreas</td></tr></table><br>
<input type=submit value=Donate style="width:100px;height:40px;border-radius:20px">
</form></div>';
}}
?>
</center>

</body>

</head>
</html>