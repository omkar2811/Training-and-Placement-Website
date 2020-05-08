<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['login_student'];
   
   $ses_sql = mysqli_query($conn,"select name from student_login where name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session1 = $row['name'];
   
   if(!isset($_SESSION['login_student'])){
      header("location:login.php");
      die();
   }
?>
