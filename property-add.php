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
          // $proId = (isset($_GET['action']) ? $_GET['action'] : ''); 
    ?>
    <!--SignUp-box Land-->
    <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
      <div class="panel-heading">
        <?php echo'<h3 class="panel-title">Post a Property</h3>';?>
      </div>
      <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
        <div class="col-md-12" style="margin:0px;padding:0px;">
          <div class="col-md-12">
              <div class="col-md-12" style="border-radius: 5px; background-color:#e7e7e7;padding:5px;">
                    <form action="include/php-handler.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="agent" value="<?php echo $_SESSION['agentid'];?>">
                            <!-- <input type="hidden" name="plottype" value="<?php //echo $proId;?>"> -->
                            <input type="hidden" name="status" value="Available">
                        </div>
                        <div class="form-group">
                            <label for="propertyname">Property Name:</label>
                            <input type="text" id="propertyname" name="name" class="form-control" placeholder="Enter Property Name" autofocus="autofocus" required>
                        </div>
                        <div class="form-group">
                            <label for="propertyaddress">Property Address:</label>
                            <input type="text" id="propertyaddress" name="location" class="form-control" placeholder="Enter Property Location" required>
                        </div>
                        <div class="form-group">
                          <label for="propertytype">Property Type:</label>
                            <select id="propertytype" name="type" class="form-control" required>
                              <option disabled selected>Select Property Type</option>
                              <?php
                                $type = 'SELECT `property_type_id`,`property_type_name` FROM `property_type`';
                                $result = mysqli_query($db, $type) or die (mysqli_error($db));
                                  while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['property_type_id'];  
                                    $name = $row['property_type_name'];
                                    echo '<option value="'.$id.'">'.$name.'</option>'; 
                                }
                              ?>    
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="plotfor">Plot Required For:</label>
                            <select id="plotfor" name="plotfor" class="form-control" required>
                              <option disabled selected>Select Plot Required For</option>
                              <?php
                                $type = 'SELECT `plot_for_id`,`plot_for_name` FROM `plot_for`';
                                $result = mysqli_query($db, $type) or die (mysqli_error($db));
                                  while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['plot_for_id'];  
                                    $name = $row['plot_for_name'];
                                    echo '<option value="'.$id.'">'.$name.'</option>'; 
                                }
                              ?>    
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="plottype">Plot Type:</label>
                            <select id="plottype" name="plottype" class="form-control" required>
                              <option disabled selected>Select Plot Type</option>
                              <?php
                                $type = 'SELECT `plot_type_id`,`plot_type_name` FROM `plot_type`';
                                $result = mysqli_query($db, $type) or die (mysqli_error($db));
                                  while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['plot_type_id'];  
                                    $name = $row['plot_type_name'];
                                    echo '<option value="'.$id.'">'.$name.'</option>'; 
                                }
                              ?>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="propertyprice">Property Price:</label>
                            <input type="number" id="propertyprice" name="price" class="form-control" placeholder="Enter Property Price" required>
                        </div>
                        <div class="form-group">
                            <label for="newstype">Society Of Property:</label>
                            <select id="newstype" name="society" class="form-control" required>
                              <option disabled selected>Select Society of Property</option>
                            <?php
                                $type = 'SELECT `society_id`,`society_name` FROM `society`';
                                $result = mysqli_query($db, $type) or die (mysqli_error($db));
                                  while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['society_id'];  
                                    $name = $row['society_name'];
                                    echo '<option value="'.$id.'">'.$name.'</option>'; 
                              }
                            ?>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file" class="form-label">Property Image:</label>
                            <input type="file" class="form-control" id="file" name="file" />
                        </div>
                        <div class="form-group">
                            <label for="tiny-editor">Property Description:</label>
                            <textarea name="description" class="form-control" rows="5" id="textarea">Enter Property Description Here...!!!</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="property-submit">Submit</button>
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