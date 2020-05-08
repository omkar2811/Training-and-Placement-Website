    <!DOCTYPE html>
<html>
<head>
<title> ADMIN LOGIN</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="header">
  
  <h1 >Training and Placement Cell ADMIN</h1>
</div>
<div class="navbar">
  <a href="tnp.html">Home </a>
 
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
    </button>
    <div class="dropdown-content">
      <a href="#">Resume Building</a>
      <a href="#">Interviews</a>
      <a href="#">Skill building</a>
    </div>
  </div> 
<a href="#alumni">Alumni</a>
<a href="#admin">Admin</a>

</div>
<body>
<div id="frn">
<form action="process.php" method="POST">
<p>
<label>Username:</label>
<input type="text" id="user" name="user" />
</p>

<p>
<label>Password:</label>
<input type="password" id="pass" name="pass"/>
</p>
<p>
<input type="submit" id="btn" value="Login"/>
</p>

</form>
</div>
</body>
</html
