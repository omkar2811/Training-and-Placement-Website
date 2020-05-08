<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("session.php");

$event=$_POST["event"];
if(isset ($_POST["register"])=="register")
{
$q="insert into activities values('$login_session','$event',0)";
if ($conn->query($q) === TRUE ) {
 echo "<script> alert ('Event registered succesfully'); </script>";
    echo "<script> window.location.assign('welcome.php') </script>";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
    
}
}
?>


