<?php session_start();
  if(!isset($_SESSION["adminid"])){
    header ("Location: login.php");
  }else{
    include ('include/conn.php'); 
    include ('include/header.php'); 
    //<!-- Left side column. contains the logo and sidebar -->
    include ('include/sidebar.php'); 
    //<!-- Content Wrapper. Contains page content -->
    include ('include/main.php');
    //<!-- Main Footer -->
    include ('include/footer.php'); 
  }
?>