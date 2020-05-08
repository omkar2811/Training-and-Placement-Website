<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['login_admin'];
   
   $ses_sql = mysqli_query($conn,"select email from admin where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session2 = $row['email'];
   
   if(!isset($_SESSION['login_admin'])){
      header("location:login.php");
      die();
   }
?>
