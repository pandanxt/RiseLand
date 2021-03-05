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
    <!--SignUp-box Land-->
    <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
      <div class="panel-heading">
        <?php echo'<h3 class="panel-title">Add New Society</h3>';?>
      </div>
      <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
        <div class="col-md-12" style="margin:0px;padding:0px;">
          <div class="col-md-12">
              <div class="col-md-12" style="border-radius: 5px; background-color:#e7e7e7;padding:5px;">
                    <form action="include/php-handler.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="agent" value="<?php echo $_SESSION['agentid'];?>">
                            <input type="hidden" name="status" value="Pending">
                        </div>
                        <div class="form-group">
                            <label for="societyname">Society Name:</label>
                            <input type="text" id="societyname" name="name" class="form-control" placeholder="Enter Society Name" autofocus="autofocus" required>
                        </div>
                        <div class="form-group">
                            <label for="societyaddress">Society Location:</label>
                            <input type="text" id="societyaddress" name="location" class="form-control" placeholder="Enter Society Location" required>
                        </div>
                        <div class="form-group">
                            <label for="newstype">City Of Society:</label>
                            <select id="newstype" name="city" class="form-control" required>
                            <?php
                                $type = 'SELECT `city_id`,`city_name` FROM `city`';
                                $result = mysqli_query($db, $type) or die (mysqli_error($db));
                                  while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['city_id'];  
                                    $name = $row['city_name'];
                                    echo '<option value="'.$id.'">'.$name.'</option>'; 
                              }
                            ?>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file" class="form-label">Society Image:</label>
                            <input type="file" class="form-control" id="file" name="file" />
                        </div>
                        <div class="form-group">
                            <label for="tiny-editor">Society Description:</label>
                            <textarea name="description" class="form-control" rows="5" id="textarea">Enter Society Description Here...!!!</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="society-submit">Submit</button>
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