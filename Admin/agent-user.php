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
        <small>Agent Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin-user.php"><i class="fa fa-dashboard"></i> Agent Users</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
            <h4><a class="btn btn-info fa"> Agent Users</a></h4>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                <tr>
                    <th><h3>No.</h3></th>
                    <th><h3>Name</h3></th>
                    <th><h3>Image</h3></th>
                    <th><h3>Email</h3></th>
                    <th><h3>Mobile</h3></th>
                    <!-- <th><h3>Address</h3></th>
                    <th><h3>ZipCode</h3></th>
                    <th><h3>Country</h3></th> -->
                    <th><h3>City Dealing</h3></th>
                    <th><h3>Ag Name</h3></th>
                    <!-- <th><h3>Agency Services</h3></th> -->
                    <th><h3>Ag Phone</h3></th>
                    <!-- <th><h3>Agency Address</h3></th> -->
                    <th><h3>Ag Logo</h3></th>
                      <!-- <th>Details</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $admin_user = 'SELECT * FROM `signup_as_agent`';
                      $result = mysqli_query($db, $admin_user) or die (mysqli_error($db));
                      while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr>';
                      echo '<td>'. $row['agent_id'].'</td>';
                      echo '<td>'. $row['agent_name'].'</td>';
                      echo '<td><img style="width:50px;height:50px;" class="img-responsive" src="../img/'. $row['agent_image'].'"/></td>';
                      echo '<td>'. $row['agent_email'].'</td>';
                      echo '<td>'. $row['agent_phone'].'</td>';
                      //echo '<td>'. $row['agent_address'].'</td>';
                      //echo '<td>'. $row['agent_zipcode'].'</td>';
                      //echo '<td>'. $row['agent_country'].'</td>';
                      echo '<td>'. $row['agent_city_deal'].'</td>';
                      echo '<td>'. $row['agent_agency_name'].'</td>';
                      //echo '<td>'. $row['agent_services'].'</td>';
                      echo '<td>'. $row['agent_company_phone'].'</td>';
                     // echo '<td>'. $row['agent_company_address'].'</td>';
                      echo '<td><img style="width:50px;height:50px;" class="img-responsive" src="../img/'. $row['agent_company_logo'].'"/></td>'; 
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