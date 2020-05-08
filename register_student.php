<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
$username=$_POST["name"];
$email=$_POST["email"];
$roll=$_POST["roll"];
$backlog=$_POST["backlog"];
$fc=$_POST["first"];
$sc=$_POST["second"];
$tc=$_POST["third"];
$foc=$_POST["fourth"];
$pass=$_POST["password"];
$mob=$_POST["mobile"];
$land=$_POST["landline"];
if(isset ($_POST["register"])=="register")
{
$q="insert into student_reg values('$username','$email',$roll,'$backlog',$fc,$sc,$tc,$foc,'$pass',$mob,$land)";
if ($conn->query($q) === TRUE ) {
$q1 = "insert into student_login values('$username','$pass')";
if ($conn->query($q1) === TRUE ) {

 echo "<script> alert ('Student registered succesfully'); </script>";
    echo "<script> window.location.assign('log.php') </script>";
    
    }
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
    
}
}
?>


