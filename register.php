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
$addr=$_POST["address"];
$website=$_POST["website"];
$type=$_POST["type"];
$sector=$_POST["sector"];
$password=$_POST["password"];
$ename=$_POST["ename"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$landline=$_POST["landline"];
if(isset ($_POST["register"])=="register")
{
$q="insert into register values('$username','$addr','$website','$type','$sector','$password','$ename','$email',$mobile,$landline)";
if ($conn->query($q) === TRUE ) {

$q1 = "insert into login_comp values('$username','$password')";
$q1 = "insert into companies values(2019,'$username')";
 echo "<script> alert ('Organization registered succesfully'); </script>";
    echo "<script> window.location.assign('tnpcell.php') </script>";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
    
}
}
?>


