<html>
<head>
<title>Login</title>
<style>

h1{
background-color:#000080 ;
}
body{
background-size:1350px 1000px;
background-repeat:no-repeat;
background-position:center;
margin:50;
}
table td{
width:100px;
height:30px;
}
</style>
</head>
<body background="images/2.jpg">
<center>

<h1 style="font-size:60px"><font color="white"><a href="hospital_home.php" style="text-decoration:none;float:left;padding-left:20px;color:white"><</a>Avilabilty<a href='index.php' style="font-size:30px;color:white;float:right">Log out</a></font></h1>
<div style="border:2px solid #ffffff;background-color:add8e6">
<?php
session_start();
$email=$_SESSION['h_email'];
$conn=mysqli_connect("localhost","root","","organ_donation") or die("failed:" . mysqli_connect_error());
$sql=mysqli_query($conn,"select u.name un,u.age ua,u.gender ug,u.address uad,u.blood_group ub,u.phone up,p.name,p.age,p.gender,p.address,p.blood_group,p.phone,p.organ_required,o.ready from users u,patients p,organs o where u.blood_group=p.blood_group and u.email=o.donar_id and p.organ_required=o.organ_type");
echo "<table><TR style='font-size:30px'><TD COLSPAN=7><CENTER><B>Patient details<hr></td><TD COLSPAN=7><CENTER><B>Donar details<hr></td><tr style='font-size:20px'><td>Name<hr></td><td>Age<hr></td><td>Gender<hr></td><td>Address<hr></td><td>Blood<hr></td><td>Phone<hr></td></td><td>Organ<hr></td><td>Name<hr></td><td>Age<hr></td><td>Gender<hr></td><td>Address<hr></td><td>Blood<hr></td><td>Phone<hr></td><td>Ready<hr></td></tr>";
while($row=mysqli_fetch_assoc($sql))
{
	echo "<tr><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['gender']."</td><td>".$row['address']."</td><td>".$row['blood_group']."</td><td>".$row['phone']."</td><td>".$row['organ_required']."</td><td>".$row['un']."</td><td>".$row['ua']."</td><td>".$row['ug']."</td><td>".$row['uad']."</td><td>".$row['ub']."</td><td>".$row['up']."</td><td>".$row['ready']."</td></tr>";
}
echo "</table>";
?>
</div>
</center>
</body>
</html>
