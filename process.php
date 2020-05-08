
<!DOCTYPE html>
<html>
<head>
<title>Training and placement </title>
 <link rel="stylesheet" href="styles.css">
</head>

<div class="header">
 
  <h1 >Training and Placement Cell, PICT</h1>
</div>
<div class="navbar">
<a href="#">
<?php
$db=mysqli_connect('localhost','root','','TNP');
$email=$_POST['user'];
$password=$_POST['pass'];
$email=stripcslashes($email);
$password=stripcslashes($password);
$email=mysqli_real_escape_string($db,$email);


$password=mysqli_real_escape_string($db,$password);
$result=mysqli_query($db,"select * from admin where email='$email' and password='$password' ")
or die("failed to query database" );
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row['email']==$email && $row['password'] ==$password){
echo " Welcome "  .$row['email'];

} else{ 
header("Location: login1.php");

} 
?>
</a>
  
  <a href="tnp.html">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Student
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Login/Register</a>
      <a href="#">Rules and Regulations</a>
      <a href="#">Past Recruiters</a>
    </div>
  </div> 

 <div class="dropdown">
    <button class="dropbtn">Recruiter
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Login/Register</a>
      <a href="#">Academics</a>
      <a href="#">Feedback</a>
    </div>
  </div> 

<a href="studentlist.xml">Contact Us</a>
<a href="#statistics">Statistics</a>
<div class="dropdown">
    <button class="dropbtn">Training
      <i class="fa fa-caret-down"></i>
    </button>za
    <div class="dropdown-content">
      <a href="#">Resume Building</a>
      <a href="#">Interviews</a>
      <a href="#">Skill building</a>
    </div>
  </div> 
<a href="#alumni">Alumni</a>
<a href="login1.php">Admin</a>
<a href="sitemap.html">Sitemap</a>
<a href="logout.php">Logout</a>
</div>
<body>
<p>Companies that have visited uptil now </p>
<?php
include('connection1.php');
$query="select * from company";
$result=mysqli_query($db,$query);
?>
<!DOCTYPE html>
<html>
<title>
<head></head>
</title>
<body>
<table align="left" border="1px" style="width:500px; line-height:30px;">
<tr>
<th colspan="4"></th>
</tr>
<t>
<th>Id </th>
<th> Name</th>
<th> Parameter</th>
<th> Count</th>
</t>
<?php
 while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>
<tr>

<td> <?php echo $rows['id'];?></td>
<td> <?php echo $rows['name'];?></td>
<td> <?php echo $rows['parameter'];?></td>
<td> <?php echo $rows['number'];?></td>
</tr>
<?php

}
?>

</table>


</body>
</html>

