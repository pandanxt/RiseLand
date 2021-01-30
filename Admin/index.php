  <?php 
    //<!--Connection File-->
    include('include/connection.php');

    //Initialize the Session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["admin_id"])){
      header("location: login.php");
      exit;
    }else{ 

      //<!--Header Files-->
      include('include/header.php');
      //<!-- Main Header -->
      include('include/main-header.php');
      //<!-- Left side column. contains the logo and sidebar -->
      include('include/sidebar.php');
      //<!-- Content Wrapper. Contains page content -->
      include('include/main-content.php');
      //<!--Footer & Footer Files-->
      include('include/footer.php');
    }   
  ?>