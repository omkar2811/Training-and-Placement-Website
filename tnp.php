<!DOCTYPE html>
<html>
<head>
<title>Training and placement </title>
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
<marquee><a href = "#"><h2>*Recruitments for 2018-2019 academic year is begun.*</h2></a></marquee>
<div class="sidenav">
  <?php
    $q0="select * from top_recruit";
    $res0=mysqli_query($conn,$q0);
    ?>
  <p><h2 style="text-align: center;"> TOP RECRUITERS(2018-2019) </h2></a>
     <?php
    $count0 = 1;
    while ($rows0 = mysqli_fetch_row($res0)) {
   ?>
   
    <a href="#services"><?php echo $count0; echo "."; echo $rows0[0]; $count0 = $count0 +1; ?></a>
    <?php
    }
    ?>

</p>
</div>
<div class="sidenav1" style = "margin-top :20px;">

<p><h2 style="text-align: center;">NEWS AND EVENTS</h2>
  <?php
  $q01="select * from news_events";
    $res01=mysqli_query($conn,$q01);
    ?>
     <?php
    $count3 = 1;
    while ($rows01 = mysqli_fetch_row($res01)) {
   ?>
   
    <a href="#news1"><?php echo $count3; echo "."; echo $rows01[1]; $count3 = $count3 +1;?></a>
    <?php
    }
    ?>
</p>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img1.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>

</br>

<h1 style = "color:black;"><u>About Us</u></h1>
					<p> Pune Institue Of Computer Technology epitomizes and reveres this limitless power in every way of its life and functioning. Established as an institute of national importance in 1983, PICT strives to provide world class education and an intellectually stimulating environment in an endeavor to develop well rounded individuals with technical and professional competence of the highest degree.
					</p>
					<p> The Training and Placement Cell of the institute handles all aspects of placements for the graduating students of all departments. Right from contacting companies to managing all logistics of arranging for tests, pre-placement talks and conducting final interviews the Training and Placement Cell officials and volunteers provide their best possible assistance to the recruiters.
					</p>
				
			<div>
			<h1 style = "color:black;"><u>Director's Message</u></h1>
			<p>
			 Pune Institute Of Computer Technology is developing fast and would like to come up as an institute of excellence promoting intelligent, hard working and technically curious minds. We have already developed state-of-the-art infrastructure including classrooms and laboratories in imparting world class education. We have a wide range of research programmes, and many curricular and extra curricular events to ignite the minds of B.Tech students. In order to raise the quality of our education and research, we have already signed MoUs with leading international universities and some more MoUs are in the process of finalization. We are promoting exchange programmes with the best schools in the world, and also a large number of scientists and technologists have visited PICT campus during the last four years. I envision developing this institute as one of the top institutes of overall education.
<p>
We plan to train our students in various industries so that knowledge gained in the academic institute is fruitfully utilized. In this regard, I would welcome the industries in India and abroad to come forward and train our students so that they can be the future of India and the world at large and PICT can produce competent engineers and scientists with good human values. I would also like to invite all prospective trainers and employers to visit PICT and interact with our students and professors and assess the training and development programmes in PICT. If interested in making an early e-placement/training talks, please let us know the preferred dates. Students have also prepared a booklet to help you understand our academic programmes. I look forward to your whole hearted support and cooperation.
</p>
</br>
<p style= "text-align:left;">
Prof.Dr.P.T Kulkarni,</br>
Principal,Pune Institute Of Computer Technology, Pune.</br>
			</p>  
  </div>

<nav>
<div class="navbar1">	
<h2 style="text-align: center;color: white;font-family: sans-serif;">WANT TO RECRUIT STUDENTS FROM PICT?</h2>
<a href="reg.html">Register here</a>
</div>
</nav>
<h1>Recruiters</h1>
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
</html>
