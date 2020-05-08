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
$q="select * from login_comp where name='$username'";
$res=mysqli_query($conn,$q);
$rows=mysqli_fetch_row($res);
$nm = $rows[0];
$pwd1 = $rows[1];
if($username==$nm && $pass==$pwd1)
{
session_start();
$_SESSION['login_user'] = $username;
header("location: welcome.php");
}
else
{
?>
<script>
alert("Login not Succesfull!!!");
window.location = "login_tnp.html";

</script>
<?php
}
}
?>
</body>
</html>


