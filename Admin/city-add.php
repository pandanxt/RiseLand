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
        <small>Add City</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin-user.php"><i class="fa fa-dashboard"></i>Add City</a></li>
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
                <label for="cityname">City Name:</label>
                <input type="text" id="cityname" name="name" class="form-control" placeholder="Enter City name" autofocus="autofocus" required>
            </div>
            <div class="form-group">
                <label for="citylocation">City Location:</label>
                <input type="text" id="citylocation" name="location" class="form-control" placeholder="City Location" required>
            </div>
            <div class="form-group">
                <label for="cityprovince">City Province:</label>
                <select id="cityprovince" name="cityprovince" class="form-control">
                  <option disabled selected>-- Select Province --</option>
                <?php
                    $province = 'SELECT `province_id`,`province_name` FROM `province`';
                    $result = mysqli_query($db, $province) or die (mysqli_error($db));
                      while ($row = mysqli_fetch_array($result)) {
                        $id = $row['province_id'];  
                        $name = $row['province_name'];
                    
                    echo '<option value="'.$id.'">'.$name.'</option>'; 
                  }
                ?>    
                </select>
            </div>
            <div class="form-group">
            <label for="tiny-editor">City Description:</label>
                <textarea name="description" class="form-control" rows="5" id="tiny-editor">Enter City Description Here...!!!</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="city-submit">Submit</button>
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