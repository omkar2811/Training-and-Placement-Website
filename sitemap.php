<!DOCTYPE html>
<html>
<head>
<title>SiteMap </title>
<style>
.site{
font-size:15px;
}
</style>
<title> Training and Placement Cell,PICT</title>
 <link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="nav.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="log.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container" style="background-color:#0F1A2E">
	<h1><img src="ss.jpg" height="100px" width="100px"/> Training and Placement Cell,PICT,Pune</h1>

	</div>
</head>
	<?php
   include("connection.php");
   session_start();
   ?>
<nav>
<div class="navbar">
  <a href="tnp.php">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Student
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="log.php">Login/Register</a>
      <a href="rules.php">Rules and Regulations</a>
    </div>
  </div> 

 <div class="dropdown">
    <button class="dropbtn">Recruiters
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tnpcell.php">Login/Register</a>
      <a href="programm.php">Programms</a>
    </div>
  </div> 
<a href="placement_stats.html">Placement Statistics</a>
<div class="dropdown">
    <button class="dropbtn">Training
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Resume/Skill Building</a>
      <a href="#">Alumni</a>
    </div>
  </div> 
<a href="login_admin.html">Admin</a>
<a href="sitemap.php">Sitemap</a>
<a href="contact.php">Contact US</a>

</nav>
<p>HOME</p>
<div class="site">

<p><a href="tnp.php">Home page</a></p>
<p>Student Login and Registration</p>
<p><a href="tnp.html">Student</a></p>
<p>Recruiters Login and Registration</p>
<p><a href="tnpcell.php">Recruiter</a></p>
<p>Programs</p>
<p><a href="program.php">Programs</a></p>
<p>Admin Login</p>
<p>Placement Statistics</p>
<p><a href="placement_stats.html">Placement Statistics</a></p>
<p><a href="admin.html">Admin</a></p>
<p>Contact</p>
<p><a href="studentlist.xml">Contact Us</a></p>

</div>
</body>
</html>
