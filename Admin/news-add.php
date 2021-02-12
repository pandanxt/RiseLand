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
        <small>Add News</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="news-add.php"><i class="fa fa-dashboard"></i>Add News</a></li>
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
                <!-- <label for="newsname">News Name:</label> -->
                <input type="hidden" name="admin" value="<?php echo $_SESSION["adminid"];?>">
            </div>
            <div class="form-group">
                <label for="newsname">News Name:</label>
                <input type="text" id="newsname" name="name" class="form-control" placeholder="Enter News name" autofocus="autofocus" required>
            </div>
            <div class="form-group">
                <label for="newstype">News Type:</label>
                <select id="newstype" name="type" class="form-control" required>
                  <!-- <option disabled selected>-- Select Type --</option> -->
                <?php
                    $type = 'SELECT * FROM `news_type`';
                    $result = mysqli_query($db, $type) or die (mysqli_error($db));
                      while ($row = mysqli_fetch_array($result)) {
                        $id = $row['news_type_id'];  
                        $name = $row['news_type_name'];
                    
                    echo '<option value="'.$id.'">'.$name.'</option>'; 
                  }
                ?>    
                </select>
            </div>
            <div class="form-group">
                <label for="file" class="form-label">News Image:</label>
                <input type="file" class="form-control" id="file" name="file" />
            </div>
            <div class="form-group">
            <label for="tiny-editor">News Description:</label>
                <textarea name="description" class="form-control" rows="5" id="tiny-editor">Enter News Description Here...!!!</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="news-submit">Submit</button>
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