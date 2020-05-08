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
<a href="login_admin.html">Admin</a>
<a href="sitemap.html">Sitemap</a>
<a href="contact.php">Contact US</a>
<?php
if(isset($_SESSION['login_user'])){?>
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
<h1 style = "color:black;"><u> Placement Procedure</u></h1>
<div class="proc">
<p>
	<ol>
    <li>Companies are contacted by the Placement office or Placement cell (authorized student representatives) and invitations are extended, providing relevant information and the placement brochure.</li></br>
<li>Companies are given an exclusive login id in the website after they submit the filled-in job announcement forms (JAF) via email or fax.</li></br>
<li>The JAFs are made available online, which helps the willing students to register for the same.</li></br>
<li>The Placement Cell and the Company confer and finalize the date for pre-placement talks if necessary. During the pre-placement talk the company team can interact with the students and impart to them, an idea of what the company requires.</li></br>
<li>Each student who has registered for a particular company submits his/her resume so that the company can shortlist the applied students according to their grade or any other criteria the company demands.</li></br>
<li>A detailed schedule is prepared by the Placement Cell evaluating the job offer, prospects, student intake and the like. The schedule is confirmed with all the companies that have applied to recruit.</li></br>
<li>The companies/organizations visit the campus, meet the registered (or shortlisted as the case may be) students, and conduct the interviews, tests or group discussion sessions in accordance with their respective recruitment process. The date of the interview and other sessions should be in compliance with the mutually confirmed schedule discussed earlier.</li></br>
<li>The companies are required to prepare and submit, with a written confirmation letter the list of students who are selected after the interview process, on the day of the interview itself.</li></br>
<li>The job offer letters are to reach the Placement Cell, in due course of time.</li></br>
<li>In case a student gets a job offer, he/she is not entitled to appear for further tests/interviews by any other company. </li>
</ol>

</p>
</div>

<div class="navbar1">
	
<h2 style="text-align: center;color: white;font-family: sans-serif;">WANT TO RECRUIT STUDENTS FROM PICT?</h2>
<a href="reg.html">Register here</a>
</div>
</nav>
<h1 style = "color:black;"><u>Recruiters</u></h1>
 <?php
    $q="select * from companies where year = 2018";
    $res=mysqli_query($conn,$q);
?>
  <ul style="list-style-type: square;">
        <table cellpadding="0" cellspacing="0" width="100%">
          <tbody style="font-size:17px;font-family: sans-serif;">
  <tr style="font-weight:bold;">
      <td nowrap="nowrap" valign="bottom" width="210">2018</td>
      <td nowrap="nowrap" valign="bottom" width="232"></td>
    </tr>
    <tr>
        <td colspan="2"><hr></td>
    </tr>
    <?php
    $count = 0;
    while ($rows = mysqli_fetch_row($res)) {
    if($count % 2 == 0)
    {?>
    <tr>
    <td width="210"><li><?php echo $rows[1]; $count = $count + 1;?></li></td>
		<?php
		}
		else
		{
		?>
    <td width="232"><li><?php echo $rows[1]; $count = $count +1;?></li></td>
    </tr>
    <?php
    }
    }
    ?>
    <tr>
        <td colspan="2"><hr></td>
    </tr>
    
    <?php
    $q1="select * from companies where year = 2019";
    $res1=mysqli_query($conn,$q1);
    ?>
    <tr style="font-weight:bold;">
      <td nowrap="nowrap" valign="bottom" width="210">2019</td>
      <td nowrap="nowrap" valign="bottom" width="232"></td>
    </tr>
    <tr>
        <td colspan="2"><hr></td>
    </tr>
    <?php
    $count1 = 0;
    while ($rows1 = mysqli_fetch_row($res1)) {
    if($count1 % 2 == 0)
                                    {?>
                                    <tr>
                                    <td width="210"><li><?php echo $rows1[1]; $count1= $count1 + 1;?></li></td>
							<?php
							}
							else
							{
							?>
                                    <td width="232"><li><?php echo $rows1[1]; $count1 = $count1 +1;?></li></td>
                                    </tr>
                            <?php
                            }
                            }
                            ?>
    <tr>
        <td colspan="2"><hr></td>
    </tr>       
</tbody>
</table>
</ul>
    <div class="fixed-footer">
        <div class="container" style = "text-align: center;">Copyright &copy; 2019 TNPCELL PICT</div>        
    </div>
</body>
</html>
