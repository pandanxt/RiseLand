<!--Session Start-->
<?php session_start(); ?>
<!--Connection File Include-->
<?php include('include/conn.php'); ?>

<!--Header File Include-->
<?php include('include/header.php'); ?>

<!---Top Navbar--->
<?php include('include/top-navbar.php'); ?>
      
<!---Advertise Banner--->
<?php include('include/banner.php');?>

<!---Dropdown Navbar--->
<?php include('include/dropdown-navbar.php'); ?>

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
            $cityId = (isset($_GET['action']) ? $_GET['action'] : ''); 
            $province = "SELECT * FROM `city` WHERE `city_id` =".$cityId;
            $result = mysqli_query($db, $province) or die (mysqli_error($db));
            if($result){
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['city_name'];
                    $location = $row['city_location'];
                    $description = $row['city_description'];
                } 
            }
      ?>
      <!--SignUp-box Land-->
      <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
        <div class="panel-heading">
          <?php echo '<h3 class="panel-title">Developments in '.$name.'</h3>'; ?>
        </div>
        <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
          <div class="col-md-12" style="margin:0px;padding:0px;">
            <div class="map col-md-12">
                    <!--Google Map-->
                    <?php echo '<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$location.'"></iframe><a href="https://embedgooglemap.xyz/">embed google map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}.gmap_iframe {height:300px!important;}</style></div>'; ?>
            </div>
            <div class="col-md-12">
                <hr>
                <?php echo '<div class="col-md-12" style="border-radius: 5px; background-color:#e7e7e7;padding:5px;margin-bottom:10px;">'.$description.'</div>'; ?>
                        
                    <div class="col-sm-4 col-md-3">
                      <a href="#" style="text-decoration: none;">
                        <div class="thumbnail">
                        <img src="img/Logo.jpeg" alt="...">
                        <div class="caption">
                          <h5 style="color:#337ab7;">Century Venture 1 MM Alam Road Payment Plan | Location Map | Details</h5>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-sm-4 col-md-3">
                      <a href="#" style="text-decoration: none;">
                        <div class="thumbnail">
                        <img src="img/Logo.jpeg" alt="...">
                        <div class="caption">
                          <h5 style="color:#337ab7;">Century Venture 1 MM Alam Road Payment Plan | Location Map | Details</h5>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-sm-4 col-md-3">
                      <a href="#" style="text-decoration: none;">
                        <div class="thumbnail">
                        <img src="img/Logo.jpeg" alt="...">
                        <div class="caption">
                          <h5 style="color:#337ab7;">Century Venture 1 MM Alam Road Payment Plan | Location Map | Details</h5>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-sm-4 col-md-3">
                      <a href="#" style="text-decoration: none;">
                        <div class="thumbnail">
                        <img src="img/Logo.jpeg" alt="...">
                        <div class="caption">
                          <h5 style="color:#337ab7;">Century Venture 1 MM Alam Road Payment Plan | Location Map | Details</h5>
                        </div>
                      </div>
                    </a>
                    </div>
                    <div class="col-sm-4 col-md-3">
                      <a href="#" style="text-decoration: none;">
                        <div class="thumbnail">
                        <img src="img/Logo.jpeg" alt="...">
                        <div class="caption">
                          <h5 style="color:#337ab7;">Century Venture 1 MM Alam Road Payment Plan | Location Map | Details</h5>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-sm-4 col-md-3">
                      <a href="#" style="text-decoration: none;">
                        <div class="thumbnail">
                        <img src="img/Logo.jpeg" alt="...">
                        <div class="caption">
                          <h5 style="color:#337ab7;">Century Venture 1 MM Alam Road Payment Plan | Location Map | Details</h5>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-sm-4 col-md-3">
                      <a href="#" style="text-decoration: none;">
                        <div class="thumbnail">
                        <img src="img/Logo.jpeg" alt="...">
                        <div class="caption">
                          <h5 style="color:#337ab7;">Century Venture 1 MM Alam Road Payment Plan | Location Map | Details</h5>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-sm-4 col-md-3">
                      <a href="#" style="text-decoration: none;">
                        <div class="thumbnail">
                        <img src="img/Logo.jpeg" alt="...">
                        <div class="caption">
                          <h5 style="color:#337ab7;">Century Venture 1 MM Alam Road Payment Plan | Location Map | Details</h5>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-md-12">
                    <ul class="pager">
                      <li><a href="#">Previous</a></li>
                      <li><a href="#">Next</a></li>
                    </ul>
                    </div>
            </div>
            
          </div>
        </div>
      </div><!--/panel panel-primary col-md-7 col-md-offset-1-->

    </div><!--/col-md-12-->
  
  </div><!--/row-->

</div><!--/container-->

<!---Footer--->
<?php include('include/footer.php'); ?>