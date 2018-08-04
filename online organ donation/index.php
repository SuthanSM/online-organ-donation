<html>
<head>
<title>Login</title>
<style>

h1{
background-color:#c71585 ;
}
body{
background-size:950px 650px;
margin:50;
}

</style>
<body background="images/index.jpg">
<center>

<h1 style="font-size:60px"><font color="white">Online Organ Donation</font></h1>
<br><br><br><br>

<font color=white size=5px>
<div style="float:left;padding-left:10">
<div style="width:380px;height:250px;border-radius:20px;border:2px solid #ffffff;">
<br><b>DONAR LOGIN</b><br><br>
<form action="login_process.php" method="post" >
Username:<input type="text" name="email" placeholder="email" style="height:30px;width:200px;padding:7px;" required><br><br>
Password:<input type="password" name="password" placeholder="password" style="height:30px;width:200px;padding:7px;" required><br><br>
<a href="donar_register.php"><input type=button value='Register' style="height:40px;width:100px;border-radius:20px;"></a>
<input type=submit value='Login' style="height:40px;width:100px;border-radius:20px;">
</form></div></div>



<div style="float:right;padding-right:10">
<div style="width:380px;height:250px;border-radius:20px;border:2px solid #ffffff;">
<br><b>HOSPITAL LOGIN</b><br><br>
<form action="login_process.php" method="post" style="padding-left:0">
Hospital ID:<input type="text" name="email" placeholder="email" style="height:30px;width:200px;padding:7px;" required><br><br>
Password:<input type="password" name="password" placeholder="password" style="height:30px;width:200px;padding:7px;" required><br><br>
<a href="hospital_register.php"><input type=button value='Register' style="height:40px;width:100px;border-radius:20px;"></a>
<input type=submit value='Login' style="height:40px;width:100px;border-radius:20px;">
</form></div></div>




</font>

</center>

</body>

</head>
</html>