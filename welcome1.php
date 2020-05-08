  <?php
   include('session1.php');
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
<a href="login_admin.html">Admin</a>
<a href="sitemap.html">Sitemap</a>
<a href="contact.php">Contact US</a>
<?php
if(isset($_SESSION['login_student'])){?>
<div class="dropdown">
    <button class="dropbtn" >Welcome <?php echo $_SESSION['login_student']; ?>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Settings</a>
      <a href="welcome1.php">Your Profile</a>
      <a href = "logout2.php">Logout</a>
    </div>
  </div>
<?php
	}
	else
	{
	?>
	<a href = "login_stud.html"style = "margin-left: 620px;"><b>Student Login</b></a>
	<?php
	}
	?>
	</div>
</nav>
</br>
<h2 style = "text-align:center;"><u>Your Academic Info</u></h2>
 <?php
    $q="select * from student_reg where name = '$login_session1'";
    $res=mysqli_query($conn,$q);
?>
<fieldset>
  <legend><h2>Profile and Additional Info</h2></legend>
<ul style="list-style-type: square;">
        <table cellpadding="0" cellspacing="0" width="100%">
          <tbody style="font-size:17px;font-family: sans-serif;">
  <tr style="font-weight:bold;">
      <td nowrap="nowrap" valign="bottom" width="210">Profile</td>
      <td nowrap="nowrap" valign="bottom" width="232"></td>
    </tr>
    <tr>
        <td colspan="1"><hr></td>
    </tr>
    <?php
    while ($rows = mysqli_fetch_row($res)) {
    $f1 = $rows[4];
    $f2 = $rows[5];
    $f3 = $rows[6];
    $f4 = $rows[7];
    ?>
    <tr>
    <td width="210"><li><?php echo "Name : "; echo $rows[0];?></li></td>
    </tr>
    <tr>
        <td colspan="1"><hr></td>
    </tr>
    <tr>
    <td width="210"><li><?php echo "RollNo : "; echo $rows[2];?></li></td>
    </tr>
    <tr>
        <td colspan="1"><hr></td>
    </tr>
    <tr>
    <td width="210"><li><?php echo "Backlog : "; echo $rows[3];?></li></td>
    	</tr>
    	<tr>
        <td colspan="1"><hr></td>
    </tr>
    <tr>
    <td width="210"><li><?php echo "First Year CGPA : "; echo $rows[4];?></li></td>
    	</tr>
    	<tr>
        <td colspan="1"><hr></td>
    </tr>
    <tr>
    <td width="210"><li><?php echo "Second Year CGPA: "; echo $rows[5];?></li></td>
    	</tr>
    	<tr>
        <td colspan="1"><hr></td>
    </tr>
    <tr>
    <td width="210"><li><?php echo "Third Year CGPA: "; echo $rows[6];?></li></td>
    	</tr>
    	<tr>
        <td colspan="1"><hr></td>
    </tr>
    <tr>
    <td width="210"><li><?php echo "Fourth Year CGPA : "; echo $rows[7];?></li></td>
    	</tr>
    	<tr>
        <td colspan="1"><hr></td>
    </tr>
    <tr>
    <td width="210"><li><?php echo "Mobile: "; echo $rows[9];?></li></td>
    	</tr>
    	<tr>
        <td colspan="1"><hr></td>
    </tr>
    </table>
    </ul>
    </fieldset>
		<?php

    }
    ?>
    
   
    <?php
    $avg = ($f1+$f2+$f3+$f4)/4;
     ?>
     
     <div class="sidenav1" style = "margin-top:-100px;">

<p><h2 style="text-align: center;">Rules And Skill Development</h2>
<ul>
<li> <a href = "skill.php">Skill Development for placements</a></li>
<li> <a href = "rules.php">Rules and Regulation of placement</a></li>

</div>
     <nav>
<div class="navbar1">	
    <h2 style = "text-align:center;color :white;">Your Average CGPA is : <?php echo $avg;?></h2>
</div>
</nav>
 <h2 style = "text-align:center;"><u>Companies available for recruitment based on cgpa</u></h2>    <?php
    $q1="select * from company where parameter <= $avg";
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
    <td width="210"><li><?php  echo $rows1[1];?></li></td>
    </tr>
    <tr>
        <td colspan="1"><hr></td>
    </tr>
    <?php

    }
    ?>
    </html>
