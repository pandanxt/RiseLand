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
        <small>Admin User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin-user.php"><i class="fa fa-dashboard"></i> Admin User</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
            <h4><a href="admin-add.php" type="button" class="btn btn-info fa fa-plus"> Add Account</a></h4>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                <tr>
                    <th><h3>No.</h3></th>
                    <th><h3>First Name</h3></th>
                    <th><h3>Last Name</h3></th>
                    <th><h3>Email</h3></th>
                    <th><h3>Username</h3></th>
                    <th><h3>Position</h3></th>
                      <!-- <th>Details</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $admin_user = 'SELECT * FROM `tbladmin`';
                      $result = mysqli_query($db, $admin_user) or die (mysqli_error($db));
                      while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr>';
                      echo '<td>'. $row['admin_id'].'</td>';
                      echo '<td>'. $row['fname'].'</td>';
                      echo '<td>'. $row['lname'].'</td>';
                      echo '<td>'. $row['email'].'</td>';
                      echo '<td>'. $row['username'].'</td>';
                      echo '<td>'. $row['position'].'</td>';
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