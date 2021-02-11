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
        <small>Rise Land News</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin-user.php"><i class="fa fa-dashboard"></i> Rise Land News</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
            <h4><a href="news-add.php" type="button" class="btn btn-info fa fa-plus"> Post New News</a></h4>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                <tr>
                    <th><h3>No.</h3></th>
                    <th><h3>Title</h3></th>
                    <th><h3>Type</h3></th>
                    <th><h3>Description</h3></th>
                    <th><h3>Date/Time</h3></th>
                    <th><h3>By</h3></th>
               <!-- <th>Details</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $news = 'SELECT * FROM `news`';
                      $result = mysqli_query($db, $news) or die (mysqli_error($db));
                      while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr>';
                      echo '<td>'. $row['news_id'].'</td>';
                      echo '<td>'. $row['news_name'].'</td>';
                      echo '<td>'. $row['news_type'].'</td>';
                      echo '<td>'. $row['news_description'].'</td>';
                      echo '<td>'. $row['news_post_on'].'</td>';
                      echo '<td>'. $row['news_post_by'].'</td>';
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