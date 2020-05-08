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
$act=$_POST["acname"];
$comp=$_POST["compname"];
if(isset ($_POST["register"])=="register")
{
$q="insert into event_reg values('$username','$comp','$act')";
if ($conn->query($q) === TRUE ) {
$q1 = "select no_of_students from activities where name = '$comp' and activity = '$act'";
 $res1=mysqli_query($conn,$q1);
   while ($rows1 = mysqli_fetch_row($res1)) {
   $rows1[0] = $rows1[0] + 1;
   $q="insert into event_reg values('$username','$comp','$act')";
   $q = "insert into activities('$comp','$act',$rows1[0])";

 }
 echo "<script> alert ('Student registered succesfully'); </script>";
    echo "<script> window.location.assign('log.php') </script>";
    
    }else {
    echo "Error: " . $q . "<br>" . $conn->error;
    
}
}
?>


