<!--Session Start-->
<?php  session_start(); ?>
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
      <!--Agent-box Rise Land-->
      <?php 
         $propertyId = (isset($_GET['id']) ? $_GET['id'] : ''); 
      ?>
      <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
        <div class="panel-heading">
            <?php 
                 $property = "SELECT `property_name` FROM `property` WHERE `property_id` = $propertyId";
                 $result = mysqli_query($db, $property) or die (mysqli_error($db));
                  
                    if($result){
                        while ($row = mysqli_fetch_assoc($result)) {
                                $propertyTypeName = $row['property_name'];
                                echo '<h3 class="panel-title"> '.$propertyTypeName.' </h3>';
                            }
                        }
            ?>
        </div>
        <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
          <div class="col-md-12" style="margin:0px;padding:0px;">
            <table>
        <?php
            $property = "SELECT * FROM `property` a INNER JOIN `property_type` b INNER JOIN `plot_type` c INNER JOIN `plot_for` d INNER JOIN `signup_as_agent` e INNER JOIN `society` f WHERE a.`society_id` = f.`society_id` AND a.`property_type` = b.`property_type_id` AND a.`property_plot` = c.`plot_type_id` AND a.`plot_for` = d.`plot_for_id` AND a.`agent_id` = e.`agent_id` AND a.property_id = '$propertyId'";
            $result = mysqli_query($db, $property) or die (mysqli_error($db));
                
            if($result){
                while ($row = mysqli_fetch_array($result)) {
                    $propertyTitle = $row['property_name'];
                    $propertyDesc = $row['property_description'];
                    $propertyPostedOn = $row['property_posted_on'];
                    $propertyLocation = $row['property_location'];
                    $propertyStatus = $row['property_status'];
                    $propertyPrice = $row['property_price'];
                    $propertyImage = $row['property_image'];
                    $propertySocietyName = $row['society_name'];
                    $propertyAgentName = $row['agent_name'];
                    $propertyAgentEmail = $row['agent_email'];
                    $propertyAgentPhone = $row['agent_phone'];
                    $propertyAgentCompanyLogo = $row['agent_company_logo'];
                    $propertyType = $row['property_type_name'];
                    $propertyPlotType = $row['plot_type_name'];
                    $propertyPlotFor = $row['plot_for_name'];
        ?>

        <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
          <div class="col-md-12" style="margin:0px;padding:0px;">
            <div class="col-md-12" style="display:flex;">
            <?php echo '<h2 class="col-md-10" style="margin:0px;padding:0px;color:#3073ad;"><strong>'.$propertySocietyName.'</strong></h2>'; ?>
            <?php echo '<a style="height:min-content;" class="btn btn-primary btn-sm col-md-2" href="JavaScript:void(0)">Rs '.$propertyPrice.'</a>'; ?>
           
        </div>
        <div class="col-md-12"><hr /></div>
            <div class="col-md-12" style="display:flex;">
            
            <?php echo '<h3 class="col-md-7" style="margin:0px;padding:0px;">Overview</h3>'; ?>
            <?php echo '<a style="height:min-content;" class="btn btn-primary btn-sm col-md-2" href="tel:'.$propertyAgentPhone.'">Call</a>'; ?>
            <?php echo '<div class="col-md-1"></div>';?>
            <?php echo '<a style="height:min-content;" class="btn btn-primary btn-sm col-md-2" href="mailto:'.$propertyAgentEmail.'">Email</a>'; ?>
            </div>

            <div class="col-md-12">
            <hr>
            <?php echo '<h3 class="col-md-12" style="margin:0px;padding:0px;">Property Image</h3>'; ?>
            <?php echo '<div class="col-md-8"></div>';?>    
            <?php echo '<img src="img/'.$propertyImage.'" alt="" class="img-responsive col-md-4"/>';?>
            </div>

            <div class="col-md-12">
                <hr>
                <?php echo '<h3 class="col-md-12" style="margin:0px 0px 5px;padding:0px;">Description</h3>'; ?>
                <div class="col-md-12" style="border-radius: 5px; background-color:#e7e7e7;padding:5px;">
                    <?php echo '<p class="col-md-4">Property Type: '.$propertyType.'</p>'; ?>      
                    <?php echo '<p class="col-md-4">Plot Type: '.$propertyPlotType.'</p>'; ?>
                    <?php echo '<p class="col-md-4">For: '.$propertyPlotFor.'</p>'; ?> 
                    
                    <?php echo '<p class="col-md-6">Posted On: '.$propertyPostedOn.'</p>'; ?>      
                    <?php echo '<p class="col-md-2"></p>'; ?>
                    <?php echo '<p class="col-md-4">Status: '.$propertyStatus.'</p>'; ?>
                    <?php echo '<p class="col-md-12">Location: '.$propertyLocation.'</p>'; ?> 

                    <?php echo '<div class="col-md-12" margin:5px;>'.$propertyDesc.'</div>'; ?>
                </div>
               
            </div>

            <div class="col-md-12">
                <hr>
                <?php echo '<h3 class="col-md-12" style="margin:0px 0px 5px;padding:0px;">Agent</h3>'; ?>
                <div class="col-md-12" style="border-radius: 5px; background-color:#e7e7e7;padding:5px;">
                    <?php echo '<p class="col-md-5">Agent Name: '.$propertyAgentName.'</p>'; ?>      
                    <?php echo '<p class="col-md-2"></p>'; ?>
                    <?php echo '<p class="col-md-5">Agent Call: '.$propertyAgentPhone.'</p>'; ?>
                    <?php echo '<p class="col-md-12">Agent Email: '.$propertyAgentEmail.'</p>'; ?> 
                    
                </div>
               
            </div>

            <?php 
               } 
            }?>
            </table>
            <!-- <div class="col-md-12">
                <hr>
            </div>
             -->
          </div>
        </div>
      </div><!--/panel panel-primary col-md-7 col-md-offset-1-->

    </div><!--/col-md-12-->
  
  </div><!--/row-->

</div><!--/container-->

<!---Footer--->
<?php include('include/footer.php'); ?>