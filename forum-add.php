<?php 
       //<!--Session Start-->
       session_start();
       //<!--Header File Include-->
       include('include/conn.php');
       //<!--Header File Include-->
       include('include/header.php');
       //<!---Top Navbar--->
       include('include/top-navbar.php');
       //<!---Advertise Banner--->
       include('include/banner.php');
       //<!---Dropdown Navbar--->
       include('include/dropdown-navbar.php');
?>
    <!---Register Panels--->
<div class="container" style="margin-top: 20px;">
<div class="row">
  <div class="col-md-12">
    <div class="col-md-4">
      <!--Advertise Box-->
      <?php include('include/advertise-box.php'); ?>
      <!--Search Box-->
      <?php include('include/search-box.php'); ?>      
    </div><!--/col-md-4-->
    <?php 
          $proId = (isset($_GET['action']) ? $_GET['action'] : ''); 
    ?>
    <!--SignUp-box Land-->
    <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
      <div class="panel-heading">
        <?php echo'<h3 class="panel-title">Ask On Forum</h3>';?>
      </div>
      <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
        <div class="col-md-12" style="margin:0px;padding:0px;">
          <div class="col-md-12">
              <div class="col-md-12" style="border-radius: 5px; background-color:#e7e7e7;padding:5px;">
                    <form action="include/php-handler.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="agent" value="<?php echo $_SESSION['agentid'];?>">
                            <input type="hidden" name="type" value="<?php echo $proId;?>">
                            <input type="hidden" name="status" value="Online">
                        </div>
                        <div class="form-group">
                            <label for="propertyname">Forum Title:</label>
                            <input type="text" id="propertyname" name="name" class="form-control" placeholder="Enter Title (Maximum one Line)." autofocus="autofocus" required>
                        </div>
                        <div class="form-group">
                            <label for="tiny-editor">Forum Description:</label>
                            <textarea name="description" class="form-control" rows="5" id="tiny-editor">Enter Complete Description Here...!!!</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="forum-submit">Submit</button>
                    </form>
              </div>
            </div>
        </div>
      </div>
    </div><!--/panel panel-primary col-md-7 col-md-offset-1-->

  </div><!--/col-md-12-->

</div><!--/row-->

</div><!--/container-->

  <!-- Main Footer -->
  <?php include ('include/footer.php'); ?>