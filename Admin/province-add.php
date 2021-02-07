<?php session_start();
  if(!isset($_SESSION["userid"])){
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
        <small>Add Province</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin-user.php"><i class="fa fa-dashboard"></i>Add Province</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
        <form action="include/php-handler.php" method="post">
            <div class="form-group">
                <label for="provincename">Province Name:</label>
                <input type="text" id="provincename" name="name" class="form-control" placeholder="Enter Province name" autofocus="autofocus" required>
            </div>
            <div class="form-group">
                <label for="provincelocation">Province Location:</label>
                <input type="text" id="provincelocation" name="location" class="form-control" placeholder="Province Location" required>
            </div>
            <div class="form-group">
            <label for="provincedescription">Province Description:</label>
                <textarea type="text" id="provincedescription" name="description" class="form-control" placeholder="Enter Province Description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="province-submit">Submit</button>
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