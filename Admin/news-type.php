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
        <small>News Type</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="news-type.php"><i class="fa fa-dashboard"></i> News Type</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
            <h4><a href="news-type-add.php" type="button" class="btn btn-info fa fa-plus"> Add New News Type</a></h4>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                <tr>
                    <th><h3>No.</h3></th>
                    <th><h3>Name</h3></th>
               <!-- <th>Details</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $type = 'SELECT * FROM `news_type`';
                      $result = mysqli_query($db, $type) or die (mysqli_error($db));
                      while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr>';
                      echo '<td>'. $row['news_type_id'].'</td>';
                      echo '<td>'. $row['news_type_name'].'</td>';
                   // echo '<td><a  type="button" class="btn btn-lg btn-warning fas fa-user-tag" href="admindetail.php?action=view & id='.$row['admin_id'] . '"></a></td>';    
                      echo '</tr>';
                    }
                  ?>
                </tbody>
              </table>
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