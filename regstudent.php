<!DOCTYPE html>
<html>
<head>
<title>Training and placement </title>
 <link rel="stylesheet" href="styles.css">
 <link rel="stylesheet" href="nav1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="log.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container" style="background-color:#0F1A2E">
	<h1><img src="ss.jpg" height="100px" width="100px"/> Training and Placement Cell,PICT,Pune</h1>

	</div>
</head>
<nav>
<div class="navbar">
  <a href="#home">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Student
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="log.php">Login/Register</a>
      <a href="rules.html">Rules and Regulations</a>
    </div>
  </div> 

 <div class="dropdown">
    <button class="dropbtn">Recruiters
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tnpcell.php">Login/Register</a>
      <a href="programm.php">Programs</a>
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
<a href="sitemap.php">Sitemap</a>
<a href="contact.php">Contact US</a>
</div>
</nav>
<?php
   include("connection.php");
   session_start();
   ?>

<h3><strong>Register here with valid contact details to avail facilities from PICT through campus placements.</strong><br>
		Fields marked with <span style="color:red;">*</span> are mandatory.</h3><br>
   		<form  name = "registration" onSubmit="return formValidation();" action = "register_student.php" method = "post">
		 <div class="container">
 
		<table>
			<tr>
				<td colspan="10"><h2>About Student</h2></td>
			</tr>
			<tr>
				<td>Name<span style="color:red;">*</span> :</td>
				<td><input  type="text" name="name" required="true" id = "username" ></td>			
			</tr>
			<tr>
				<td>E-mail<span style="color:red;">*</span> :</td>
				<td><input  name="email" type="email" required="true" ></td>			
			</tr>
			<tr>
				<td>Current Roll No<span style="color:red;">*</span> :</td>
				<td><input  name="roll" type="number" required="true" ></td>			
			</tr>
			<tr>
				<td>Backlog:<span style="color:red;">*</span> :</td>
				<td><label for="first"><b>Yes</b></label>
       <input type="radio" name="backlog" value = "Yes" required>
      <label for="first"><b>No</b></label>
      <input type="radio"name="backlog"value = "No" required></br>
	  </td>			
			</tr>
			<td>First Year CGPA<span style="color:red;">*</span> :</td>
				<td><input  name="first" type="number" required="true" step = "any"></td>		
        </tr>
        <tr>
     <td>Second Year CGPA<span style="color:red;">*</span> :</td>
				<td><input  name="second" type="number" required="true" ></td>		
				 </tr>
      <tr>
     <td>Third Year CGPA<span style="color:red;">*</span> :</td>
				<td><input  name="third" type="number" required="true" ></td>
			 </tr>
      <tr>
    <td>Fourth Year CGPA<span style="color:red;">*</span> :</td>
				<td><input  name="fourth" type="number" required="true"></td>		
				</tr>
      <tr>
        <td>Password<span style="color:red;">*</span> :</td>
        <td><input  name="password" type="password" required="true" ></td>      
      </tr>
      </td>			
			<tr>
				<td colspan="2"><h2>Contact Details</h2></td>			
			</tr>
			<tr>
				<td>Mobile :</td>
				<td><input  name="mobile" type="number" ></td>			
			</tr>
			<tr>
				<td>Landline :</td>
				<td><input  name="landline" type="number" ></td>			
			</tr>
			
      <tr>
        <td><input  name="reset" type="reset" value = "reset"></td>      
      </tr>
		</table>
<p>
	<br>
</p>
<input type="submit" name="register" value="register" style="margin-left: 180px;" />
	</div>
</div>
</form>
<script >
function formValidation()
{
  var uname = document.registration.name;
  var uadd = document.registration.address;
  if(allLetter(uname))
  { 
    if(alphanumeric(uadd))
    {
        return true;
    }
  }

  return false;
}


function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}

function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}


</script>
</body>
</html>
