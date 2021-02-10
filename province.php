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
            $proId = (isset($_GET['action']) ? $_GET['action'] : ''); 
            $province = "SELECT * FROM `province` WHERE `province_id` =".$proId;
            $result = mysqli_query($db, $province) or die (mysqli_error($db));
            if($result){
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['province_name'];
                    $location = $row['location'];
                    $description = $row['description'];
                } 
            }
      ?>
      <!--SignUp-box Land-->
      <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
        <div class="panel-heading">
          <?php echo'<h3 class="panel-title">'.$name.'</h3>';?>
        </div>
        <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
          <div class="col-md-12" style="margin:0px;padding:0px;">
            <div class="map col-md-12">
                    <!--Google Map-->
                    <?php echo'<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$location.'"></iframe><a href="https://embedgooglemap.xyz/">embed google map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:300px;}.gmap_iframe {height:300px!important;}</style></div>'; ?>
            </div>
            <div class="col-md-12">
                <hr>
                <div class="col-md-12" style="border-radius: 5px; background-color:#e7e7e7;padding:5px;">
                        <?php echo '<p>'.$description.'</p>'; ?>
                        <!-- <p><b>Punjab</b> is known as a wealthy Province of Pakistan due to its fertile land and available sources. The province is largest in terms of population and stand at 2nd spot in terms Total area. The Province has well developed Cities which produces various raw material and finish products for Pakistan. Punjab produces various agriculture and industrial product that play a vital role in the economy of country.</p>
                        <p>The overall Real Estate Sector in Punjab has a clear distinction over all other provinces, only Karachi have better real estate environment. The Real Estate Sector of Punjab includes Lahore Real Estate, Rawalpindi Real Estate, Faisalabad Real Estate. Multan Real Estate, Gujranwala Real Estate and others, the above mentioned Cities are playing dominant role in Real Estate of Pakistan as the available business and employment opportunities make it easy to have better residential places.</p>
                        <p>Some of the famous projects include DHA, Bahria Town, Citi Housing, and Askri Housing as well. These developers are well known for their developmental work in Punjab and Pakistan as well.</p>        -->
                </div>
                <div class="col-md-12">
                    <p style="color:#337ab7;font-size:1.5em;">Famous Cities</p>
                    <div class="col-md-4">
                    <ul>
                        <li><a href="#">Bahawalpur</a></li>
                        <li><a href="#">Chiniot</a></li>
                        <li><a href="#">Daska</a></li>
                        <li><a href="#">Dera Ghazi Khan</a></li>
                        <li><a href="#">Faisalabad</a></li>
                        <li><a href="#">Gujranwala</a></li>
                        <li><a href="#">Gujrat</a></li>
                        <li><a href="#">Jhang</a></li>
                    </ul>
                    </div>
                    <div class="col-md-4">
                    <ul>
                        <li><a href="#">Jhelum</a></li>
                        <li><a href="#">Kasur</a></li>	
                        <li><a href="#">Lahore</a></li>
                        <li><a href="#">Mandi Bahauddin</a></li>
                        <li><a href="#">Multan</a></li>	
                        <li><a href="#">Murree</a></li>
                        <li><a href="#">Muzaffargarh</a></li>
                        <li><a href="#">Okara</a></li>
                    </ul>
                    </div>
                    <div class="col-md-4">
                    <ul>
                        <li><a href="#">Pakpattan</a></li>
                        <li><a href="#">Phool Nagar</a></li>
                        <li><a href="#">Rawalpindi</a></li>	
                        <li><a href="#">Sahiwal</a></li>
                        <li><a href="#">Sargodha</a></li>
                        <li><a href="#">Sheikhupura</a></li>
                        <li><a href="#">Sialkot</a></li>
                        <li><a href="#">Toba Tek Singh</a></li>     
                    </ul>
                    </div>
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