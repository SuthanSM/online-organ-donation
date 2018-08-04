
<html>
<head>
<title>Owner</title>
<style>

h1{
background-color:#c71585;
}
body{
background-size:950px 650px;
margin:28;


}
</style>
<body background="images/index.jpg">
<center>

<h1 style="font-size:60px"><font color="white"><a href="index.php" style="text-decoration:none;float:left;padding-left:20px;color:white"><</a>Donar registration</h1></font>



<form action="donar_registration.php" method="post" style="float:left;padding-left:280px"><b><font color="black" size="20px">
<div style="width:380px;float:left;height:450px;border-radius:20px;border:2px solid #ffffff">
</font><font color="white" size="4px"><u>Enter your details:</u>

<BR><br>
Email:<input type="text" name="email" placeholder="Enter Email ID" required><br><br>
Name:<input type="name" name="name" placeholder="Enter your name" required><br><br>
Phone:<input type="text" name="phone" placeholder="Phone number" required><br><br>
Age:<input type="number" name="age" placeholder="Enter age" required><br><br>

Address:<input type="text" name="address" placeholder="Enter address" required><br><br>
Gender:<input type="radio" name="r"  value="male" required>Male
<input type="radio" name="r" value="female" required>Female
<input type="radio" name="r"  value="transgender" required>Transgender
<br><br>
Blood group:<BR><input type="radio" name="r1"  value="A+" required>A+
<input type="radio" name="r1" value="O+" required>O+
<input type="radio" name="r1" value="B+" required>B+
<input type="radio" name="r1" value="AB+" required>AB+<BR>
<input type="radio" name="r1" value="A-" required>A-
<input type="radio" name="r1" value="O-" required>O-
<input type="radio" name="r1" value="B-" required>B-
<input type="radio" name="r1" value="AB-" required>AB-<BR><BR>

Password:<input type="text" name="password" placeholder="Enter password"><br><br>

</div>
<div style="width:380px;float:left;height:450px;border-radius:20px;border:2px solid #ffffff;">
Organs you wish to donate:<br><table border=0>
<tr><td><font color="white"><input type="checkbox" name="c[]" value="corneas">Corneas</td></tr>
<tr><td><font color="white"><input type="checkbox" name="c[]" value="heart">Heart</td></tr>
<tr><td><font color="white"><input type="checkbox" name="c[]" value="kidneys">Kidneys</td></tr>
<tr><td><font color="white"><input type="checkbox" name="c[]" value="liver">Liver</td></tr>
<tr><td><font color="white"><input type="checkbox" name="c[]" value="lungs">Lungs</td></tr>
<tr><td><font color="white"><input type="checkbox" name="c[]" value="pancreas">Pancreas</td></tr></table>

<br><u>Enter details of a person to contact in emergency</u><br><br>
Email:<input type="text" name="d_email" placeholder="Enter Email ID" required><br><br>
Name:<input type="name" name="d_name" placeholder="Enter name" required><br><br>
Relation:<input type="name" name="relation" placeholder="Enter your relationship" required><br><br>

Phone:<input type="text" name="d_phone" placeholder="Phone number" required><br><br>
Address:<input type="text" name="d_address" placeholder="Enter address" required><br><br>






</div><br><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
<input type="reset" value="Reset" style="width:80px;height:35px;border-radius:20px;">

<input type="submit" value="Submit" style="width:80px;height:35px;border-radius:20px;">
</form>
</center>
</body>
</head>
</html>