<?php session_start();
  if(!isset($_SESSION["adminid"])){
    header ("Location: login.php");
  }else{ 
?>
  <?php include ('include/conn.php'); ?>
  <?php include ('include/header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include ('include/sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Add Forum Type</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="forum-type-add.php"><i class="fa fa-dashboard"></i>Add Forum Type</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
        <form action="php-handler.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="newsname">Forum Type Name:</label>
                <input type="text" id="newsname" name="name" class="form-control" placeholder="Enter Forum Type" autofocus="autofocus" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="forum-type-submit">Submit</button>
            </form>
        </div>  
      </div>
      

    <!-- =========================================================== -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <?php include ('include/footer.php'); ?>
  <?php } ?>