 <?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="nav.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="log.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container" style="background-color:#0F1A2E">

<script>
function Redirect()
{
 window.location = "placement.php"
 }
 </script>
	<h1><img src="ss.jpg" height="100px" width="100px"/> Training and Placement Cell,PICT,Pune</h1>

	</div>
</head>
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
      <a href="skill.php">Resume/Skill Building</a>
      <a href="#">Alumni</a>
    </div>
  </div> 
<a href="login1.php">Admin</a>
<a href="sitemap.html">Sitemap</a>
<a href="contact.php">Contact US</a>
<?php
if(isset($_SESSION['login_user'])){?>
<div class="dropdown">
    <button class="dropbtn" >Welcome <?php echo $_SESSION['login_user']; ?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Settings</a>
      <a href="welcome.php">Your Profile</a>
      <a href = "logout1.php">Logout</a>
    </div>
  </div>
<?php
	}
	else
	{
	?>
	<a href = "login_tnp.html"style = "margin-left: 620px;"><b>Student Login</b></a>
	<?php
	}
	?>
	</div>
</nav>

<h2 style = "text-align:center;"><u>List Of Students registered</u></h2>   
 <?php 
 $data = $_GET["data"];
    $q1="select * from event_reg where org_name = '$login_session' and event_name = '$data'";
    $res1=mysqli_query($conn,$q1);
?>
<ul style="list-style-type: square;">
        <table cellpadding="0" cellspacing="0" width="100%">
          <tbody style="font-size:17px;font-family: sans-serif;">
  <tr style="font-weight:bold;">
      <td nowrap="nowrap" valign="bottom" width="232"></td>
    </tr>
    <tr>
        <td colspan="1"><hr></td>
    </tr>
    <?php
    while ($rows1 = mysqli_fetch_row($res1)) {
    ?>
    <tr>
    <td width="210"><li><?php  echo $rows1[0];?></li></td>
    </tr>
    <?php

    }
    ?>
