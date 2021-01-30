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
        <small>Add Admin User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin-user.php"><i class="fa fa-dashboard"></i>Add Admin User</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <!-- =========================================================== -->
      <div class="row">
        <div class="col-md-12">
        <form action="include/admin-add-handler.php" method="post">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First name" autofocus="autofocus" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last name" required>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email address:</label>
                <input type="text" id="inputEmail" name="mail" class="form-control" placeholder="Email address" required>
            </div>
            <div class="form-group">
            <label for="inputEmail2">Position:</label>
                <select type="text" id="inputEmail2" name="pos" class="form-control" placeholder="Position" required>
                  <option>Encoder</option>
                  <option>Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputEmail1">Username:</label>
                <input type="text" id="inputEmail1" name="uid" class="form-control" placeholder="User Name" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password:</label>
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="pwdcon" class="form-control" placeholder="Confirm password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="signup-submit">Submit</button>
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