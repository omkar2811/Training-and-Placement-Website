  <?php
   include('session2.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   <link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="nav.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="log.css">
<script src="radialIndicator.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container" style="background-color:#0F1A2E">
	<h1><img src="ss.jpg" height="100px" width="100px"/> Training and Placement Cell,PICT,Pune</h1>
</div>

<style type="text/css">

            
            
            
            .dark-area {
                background-color: #666;
                padding: 40px;
                margin: 0 -40px 20px -40px;
                clear: both;
            }

            .clearfix:before,.clearfix:after {content: " "; display: table;margin-left:200px;
            }
            .clearfix:after {clear: both;}
            .clearfix {*zoom: 1;}

        </style>

        <link rel="stylesheet" href="css/circle.css">

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
<a href="login_admin.html">Admin</a>
<a href="sitemap.html">Sitemap</a>
<a href="contact.php">Contact US</a>
<?php
if(isset($_SESSION['login_admin'])){?>
<div class="dropdown">
    <button class="dropbtn" >Welcome <?php echo $_SESSION['login_admin']; ?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Settings</a>
      <a href="welcome2.php">Your Profile</a>
      <a href = "logout3.php">Logout</a>
    </div>
  </div>
<?php
	}
	else
	{
	?>
	<a href = "login_admin.html"style = "margin-left: 620px;"><b>Admin Login</b></a>
	<?php
	}
	?>
	</div>
</nav>
</br>
<h2 style = "text-align:center;"><u>Review Of Activities and Events</u></h2>
 
 </br>
 <?php
 $q="select count(*) from activities";
    $res=mysqli_query($conn,$q);
    while ($rows = mysqli_fetch_row($res)) {
 ?>
 <div class="clearfix">

                <p style = "color : black;margin-left:270px;font-size:20px;"> <u>No of Activities</u> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <u>No of events</u> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<u>No of Comapnies</u> </p>
                <div class="c100 p<?php echo $rows[0];?> big" style = "margin-left:200px;">
                    <span><?php echo $rows[0]; }?></span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <?php
 $q1="select count(*) from news_events";
    $res1=mysqli_query($conn,$q1);
    while ($rows1 = mysqli_fetch_row($res1)) {
 ?>
                <div class="c100 p<?php echo $rows1[0];?> big" style = "margin-left:350px;">
                    <span><?php echo $rows1[0]; }?></span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                    <?php
 $q2="select count(*) from companies";
    $res2=mysqli_query($conn,$q2);
    while ($rows2 = mysqli_fetch_row($res2)) {
 ?>
                <div class="c100 p<?php echo $rows2[0];?> big" style = "margin-left:350px;">
                    <span><?php echo $rows2[0];}?></span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
            </div>
  
  <h2 style = "text-align:center;"><u>List Of Comapnies visiting campus</u></h2>    <?php
    $q1="select * from companies";
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
    <td width="210"><li><?php  echo $rows1[ 1];?></li></td>
    </tr>
    <tr>
        <td colspan="1"><hr></td>
    </tr>
    <?php

    }
    ?>
 
    </html>
