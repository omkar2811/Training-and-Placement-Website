<!DOCTYPE html>
<html>
<head>
<title> Training and Placement Cell,PICT</title>
<body>
<?php
include("connection.php");

$username=$_POST["uname"];
$pass=$_POST["psw"];

if(isset ($_POST["login"])=="Login")
{
$q="select * from student_login where name='$username'";
$res=mysqli_query($conn,$q);
$rows=mysqli_fetch_row($res);
$nm = $rows[0];
$pwd1 = $rows[1];
if($username==$nm && $pass==$pwd1)
{
session_start();
$_SESSION['login_student'] = $username;
header("location: welcome1.php");
}
else
{
?>
<script>
alert( "Login not Succesfull!!!");

window.location = "login_stud.html";

</script>
<?php
}
}
?>
</body>
</html>


