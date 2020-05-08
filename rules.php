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
	<div style = "padding-left :10px;">
	 <p style = "text-align:center;"><strong>A. ELIGIBILITY &amp; REGISTRATION</strong></p>
                <p>                  1. Students should register their names by submitting Students' Data Sheet as per the prescribed format given by Department of Training and Placement Cell. Only those students who have registered are eligible to participate in the placement activities.<br>
                  2. Campus placement is a facility provided for the students. Registration is not compulsory. Students not interested in placement are advised not to register for placement.<br>
                  3. Students will be allowed to have a single job offer only. However, already placed Students may also be allowed to appear for "Dream Company". Once a student bags a job offer from a dream company, she will not be allowed to participate in any campus recruitment process at all. Moreover, already placed students but not placed in "Dream Company" may also be allowed for two job offers after completion of 80%placement of registered and eligible students of individual discipline. <br>
                  4. <strong>Backlogs:</strong> Students having backlog of 4 or more courses are not permitted to register for placement. Such students are advised to clear the backlogs and then register after the July-November end semester examinations. However, extended students can register in case of non-completion of course/project requirements in their last two semesters.<br>
                  5. The eligibility criteria imposed by the visiting company will be the final. <br>
                  6.The eligible / registered students must attend all the training programmes / workshops arranged by department.<br>
                  7. Department placement coordinator is the single point of contact for the concerned department Students. For all kinds of clarifications &amp; communications (such as registration for placement assistance, updating the database, etc.,) should be executed through the concerned department placement coordinator and HOD.<br>
                  8. During induction, most of the companies insist on Passport and PAN card. So, the students are expected to apply for the same at the earliest. <br>
                  9. Students may have to manage with their own transport arrangements to return homeland inform their parents well in advance, if the proceedings on the date of interview continue till the late evening.<br>
                  10.Based on the directions given by the companies, students may be sent to attend pooled campus placement drives in other colleges. Students should inform their parents about the placement process, venue, and timings in advance.<br>
                  11. Students attending campus interviews should adhere to the following instructions,<br>
                  (a) Report at the venue of pre-placement talk and interview as per the instructions. <br>
                  (b)Students should carry minimum 5copies of their resume, photocopies of all Original certificates, 5 pass port size photographs.<br>
                  (c)A student in casual dress will not be allowed for the PPT/Recruitment Process.<br>
              12.TPO aims to provide placement assistance for all final year students. Placement is a privilege extended to the students but can't be claimed as a matter of right.</p>
                <p style = "text-align:center;"><br>
                  <strong>B. RESUME</strong></p>
                <p>                  13. Students are expected to follow the institute resume template available in the placement website /Departmental Training and Placement Coordinators for preparing the resumes.<br>
              14. The details given in the resume have to be genuine and any student found violating this rule will be disallowed from the placement for the rest of the academic year.</p>
                <p style = "text-align:center;"><br>
                  <strong>C. PRE-PLACEMENT TALKS (PPT)</strong></p>
                <p>                  15. Students should be seated in the venue 15 minutes before the scheduled start of the PPT.<br>
                  16. Students interested in a particular company, can attend its PPT. <br>
                  17. Any clarification regarding salary break-up, job profile, place of work, bond details,date of joining etc. must be sought from the companies during PPT or interview.<br>
                  18. <u>DRESS CODE</u>: Students <strong>must be formally dressed /Uniform </strong>whenever they participate in any interaction with a company<br>
                  <br>
                  <strong>**This office reserves the right to refuse permission to a student to attend the selection process/PPT, if they do not dress up formally. Students are expected to know the norms for formal wear; for the benefit of those who claim ignorance, please note that the following are strictly not allowed:<br>
                    <br>
                  </strong>* T-shirts with printed text; un-collared T-shirts;<br>
                  * Shorts<br>
                  * Jeans<br>
                  * Shirt not-tucked in<br>
              * Chappals / flip-flops</p>
                <p style = "text-align:center;"><br>
                  <strong>D. PLACEMENT PROCESS</strong></p>
                <p>                  19. It is the responsibility of the student to check announcements / notices / updated information / shortlisted names etc. in the notice boards of Placement /Department Notice Board. <br>
                  20. <u>ATTENDANCE &amp; PUNCTUALITY: </u><br>
                  <br>
                  a) A student who applies and gets shortlisted is bound to go through the entire selection process unless rejected midway by the company. Any student who withdraws deliberately in the middle of a selection process will be disallowed from placement for the rest of the academic year.<br>
                  b) <strong>LATE COMERS FOR APTITUDE TEST / GD / INTERVIEW </strong>may not be allowed to appear for the selection process.<br>
                  <br>
                  <strong>21.<u> DISCIPLINE:</u></strong><u></u><br>
                  <br>
                  a) Students should maintain discipline and show ethical behaviour in every action they take during the placement process. Any student found violating the discipline rules set by the company or defaming the institute's name will be disallowed from the placements for the rest of the academic year. <br>
                  b) Students found cheating or misbehaving in the selection process (Test / GD / Interview) will be disallowed from the placements for the rest of the academic year. <br>
                  <br>
              <p style = "text-align:center;" ><strong>E. JOB OFFERS</strong></p>
                <p>                  22.The copy of the offer letter is required to submit in the placement office.<br>
              23.  If a student is offered a second job, he/she must give a letter of regret to the company, which offered the first job and a letter of acceptance to the second.</p>
                <p>24. After accepting a job offer, if any student decides to withdraw his/her acceptance any time during the year, he/she must inform the company concerned through the TPO immediately. <br>
                  25. <u>Post Placement</u>: If any resons Company will stop joining of candidates so College is not responsible for that.</p>
              <p><br>
                  <strong>Debarment/Blacklisting grounds for students:</strong> <br>
                  26. Students may be debarred /blacklisted from the placement if he/she is found involved in any in disciplinary activity or engaged in malpractices practices.<br>
                  27. Students giving wrong data/information in Training and Placement Coordinators, He/She will be debarred/blacklisted from the placement activities for the rest of the academic year.<br>
                  28. Students cannot drop out from selection process once he/she has been shortlisted for further rounds after Aptitude Test. A disciplinary action will be taken against defaulter student/s.<br>
                  29. Any kind of misbehavior/complaints reported by the company officials/faculty/staff/volunteers will be taken seriously &amp; those evolve will be debarred/ blacklisted from future campus placements<br>
                  30. For all matters not covered by the above regulations, the Placement Office will use its discretion to take appropriate decisions. The decision taken by this office shall be binding on all students/scholars.</p>
             
                <p class="align-center">&nbsp;</p>
           
            <div class="col-md-4 col-md-offset-4 career-contact">
                <p class="text-center wow pulse"><i class="fa fa-envelope pr-10"></i><b>Contact Email : </b><em> placement@pict.edu</em></p>
            </div>
        </div>
        </div>
        <hr>
        <div class="fixed-footer">
        <div class="container" style = "text-align: center;">Copyright &copy; 2019 TNPCELL PICT</div>        
    </div>
    </html>


