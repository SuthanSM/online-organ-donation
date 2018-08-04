<html>
<head>
<title>Login</title>
<style>

h1{
background-color:#000080;
}
body{
background-size:1350px 1000px;
background-repeat:no-repeat;
background-position:center;

margin:50;
}

</style>
<body background="images/2.jpg">
<center>

<h1 style="font-size:60px"><font color="white">Welcome hospital<a href='index.php' style="font-size:30px;color:white;float:right">Log out</a></font></h1>
<font color="white"><h2>Register your patients here if in need of organs or <a href="available.php">check availability</a></h2></font>
<div style="border:2px solid #ffffff;width:400px;background-color:add8e6;opacity:0.9">
<form action="patient_register.php" method="post"><b><br>
Email:<input type="text" name="email" placeholder="Enter Email ID" required><br><br>
Name:<input type="name" name="name" placeholder="Enter your name" required><br><br>
Phone:<input type="text" name="phone" placeholder="Phone number" required><br><br>
Age:<input type="number" name="age" placeholder="Enter age" required><br><br>

Address:<input type="text" name="address" placeholder="Enter address" required><br><br>
Gender:</b><input type="radio" name="r"  value="male" required>Male
<input type="radio" name="r" value="female" required>Female
<input type="radio" name="r"  value="transgender" required>Transgender
<br><br><b>
Blood group:</b><BR><input type="radio" name="r1"  value="A+" required>A+
<input type="radio" name="r1" value="O+" required>O+
<input type="radio" name="r1" value="B+" required>B+
<input type="radio" name="r1" value="AB+" required>AB+<BR>
<input type="radio" name="r1" value="A-" required>A-
<input type="radio" name="r1" value="O-" required>O-
<input type="radio" name="r1" value="B-" required>B-
<input type="radio" name="r1" value="AB-" required>AB-<BR><BR>

<b>Organs in need:</b><br><table border=0>
<tr><td><input type="checkbox" name="c[]" value="corneas">Corneas</td></tr>
<tr><td><input type="checkbox" name="c[]" value="heart">Heart</td></tr>
<tr><td><input type="checkbox" name="c[]" value="kidneys">Kidneys</td></tr>
<tr><td><input type="checkbox" name="c[]" value="liver">Liver</td></tr>
<tr><td><input type="checkbox" name="c[]" value="lungs">Lungs</td></tr>
<tr><td><input type="checkbox" name="c[]" value="pancreas">Pancreas</td></tr></table><br>

<input type=reset value='Reset' style="height:40px;width:100px;border-radius:20px;">
<input type=submit value='Submit' style="height:40px;width:100px;border-radius:20px;">



</form>
</div>

</center>

</body>

</head>
</html>