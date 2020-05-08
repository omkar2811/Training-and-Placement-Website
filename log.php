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

 <?php
    $q2="select * from activities";
    $res2=mysqli_query($conn,$q2);
    ?>
    <tr style="font-weight:bold;">
      <td nowrap="nowrap" valign="bottom" width="210">Activities to Participate</td>
      <td nowrap="nowrap" valign="bottom" width="232"></td>
    </tr>
    <tr>
        <td colspan="2"><hr></td>
    </tr>
    <?php
    $count2 = 0;
    while ($rows2 = mysqli_fetch_row($res2)) {
    if($count2 % 2 == 0)
                                    {?>
                                    <tr>
                                    <td width="210"><li><?php echo $rows2[1]; $count2= $count2 + 1;?></li></td>
							<?php
							}
							else
							{
							?>
                                    <td width="232"><li><?php echo $rows2[1]; $count2 = $count2 +1;?></li></td>
                                    </tr>
                            <?php
                            }
                            }
                            ?>
    <tr>
        <td colspan="2"><hr></td>
    </tr>
    <tr>
     <td width="232"><h2><a href="regevent.php">Activities Regsitration</a></h2><td> 
    </tr>
              
</tbody>
</table>
</ul>
<div class="navbar1">
	
<h2 style="text-align: center;color: white;font-family: sans-serif;">NOT REGISTERED TO TNP YET?</h2>
<a href="regstudent.php">Register here</a>
</div>


<div class="fixed-footer">
        <div class="container" style = "text-align: center;">Copyright &copy; 2019 TNPCELL PICT</div>        
    </div>
</body>
</div>
</html>

