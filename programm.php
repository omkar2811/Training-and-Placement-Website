<!DOCTYPE html>
<html>
<head>
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
      <a href="skill.php">Resume/Skill Building</a>
      <a href="#">Alumni</a>
    </div>
  </div> 
<a href="login1.php">Admin</a>
<a href="sitemap.html">Sitemap</a>
<a href="contact.php">Contact US</a>
<?php if(isset($_SESSION['login_user']))
{
?>
<div class="dropdown">
    <button class="dropbtn">Welcome <?php echo $_SESSION['login_user']; ?>
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
	<a href = "login_tnp.html"style = "margin-left: 620px;"><b>User Login</b></a>
	<?php
	}
	?>
</div>
</nav>
</br>
<h1 style = "color:black;"><u>Programmes</u></h1><br /><br />
					<table align="center" width="50%" border="1" cellspacing="3" style="border-collapse:collapse; border:solid windowtext 1.0pt">
	<tbody>
		<tr>
			<td colspan="3" style="text-align:center;font-size:20px;"><strong>B.Tech</strong></td>
		</tr>
		<tr>
			<td style="background-color:#fde9d9; text-align:center; width:10%;font-size:20px;"><strong>Sl.No</strong></td>
			<td style="background-color:#fde9d9; text-align:center; width:50%;font-size:20px;"><strong>Branch</strong></td>
			<td style="background-color:#fde9d9; text-align:center; width:20%;font-size:20px;"><strong>Brochure</strong></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">1</td>
			<td style="vertical-align:top ;font-size:20px;">Computer Engineering</td>
			<td style="vertical-align:top; text-align:center;font-size:20px;"><a href="downloads/document.pdf  " target="_blank">Download</a></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">2</td>
			<td style="vertical-align:top; font-size:20px;">IT Engineering</td>
			<td style="vertical-align:top; text-align:center; font-size:20px;"><a href="downloads/B.Tech_Brochure/CE -B.Tech_ 18-19.pdf" target="_blank">Download</a></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">3</td>
			<td style="vertical-align:top ;font-size:20px;">Electronics and&nbsp;Telecommunication  Engineering</td>
			<td style="vertical-align:top; text-align:center; font-size:20px;"><a href="downloads/B.Tech_Brochure/CSE -B.Tech_ 18-19.pdf" target="_blank">Download</a></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">4</td>
			<td style="vertical-align:top ;font-size:20px;">Electrical Engineering</td>
			<td style="vertical-align:top; text-align:center; font-size:20px;"><a href="downloads/B.Tech_Brochure/EE -B.Tech_ 18-19.pdf" target="_blank">Download</a></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">5</td>
			<td style="vertical-align:top ;font-size:20px;">Mechanical Engineering</td>
			<td style="vertical-align:top; text-align:center; font-size:20px;"><a href="downloads/B.Tech_Brochure/ME -B.Tech_ 18-19.pdf" target="_blank">Download</a></td>
		</tr>
	</tbody>
</table>
<br />


<table align="center" width="50%" border="1" cellspacing="3" style="border-collapse:collapse; border:solid windowtext 1.0pt">
	<tbody>
		<tr>
			<td colspan="3" style="text-align:center; font-size:20px;"><strong>M.Tech</strong></td>
		</tr>
		<tr>
			<td style="background-color:#fde9d9; text-align:center;font-size:20px; width:10%;"><strong>Sl.No</strong></td>
			<td style="background-color:#fde9d9; text-align:center;font-size:20px; width:50%;"><strong>Branch</strong></td>
			<td style="background-color:#fde9d9; text-align:center;font-size:20px; width:20%;"><strong>Brochure</strong></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">1</td>
			<td style="vertical-align:top ;font-size:20px;">Computer Engineering</td>
			<td style="vertical-align:top; text-align:center; font-size:20px;"><a href="downloads/document.pdf  " target="_blank">Download</a></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">2</td>
			<td style="vertical-align:top; font-size:20px;">IT Engineering</td>
			<td style="vertical-align:top; text-align:center; font-size:20px;"><a href="downloads/B.Tech_Brochure/CE -B.Tech_ 18-19.pdf" target="_blank">Download</a></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">3</td>
			<td style="vertical-align:top ;font-size:20px;">Electronics and&nbsp;Telecommunication  Engineering</td>
			<td style="vertical-align:top; text-align:center; font-size:20px;"><a href="downloads/B.Tech_Brochure/CSE -B.Tech_ 18-19.pdf" target="_blank">Download</a></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">4</td>
			<td style="vertical-align:top ;font-size:20px;">Electrical Engineering</td>
			<td style="vertical-align:top; text-align:center; font-size:20px;"><a href="downloads/B.Tech_Brochure/EE -B.Tech_ 18-19.pdf" target="_blank">Download</a></td>
		</tr>
		<tr>
			<td style="text-align:center; vertical-align:top font-size:20px;">5</td>
			<td style="vertical-align:top ;font-size:20px;">Mechanical Engineering</td>
			<td style="vertical-align:top; text-align:center; font-size:20px;"><a href="downloads/B.Tech_Brochure/ME -B.Tech_ 18-19.pdf" target="_blank">Download</a></td>
		</tr>
	</tbody>
</table>

<br />

<br />

<br />

<br />

<br />
<div class="fixed-footer">
        <div class="container" style = "text-align: center;">Copyright &copy; 2019 TNPCELL PICT</div>        
    </div>
