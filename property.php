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
         $plotForId = (isset($_GET['plfID']) ? $_GET['plfID'] : '');
         $propertyTypeId = (isset($_GET['protID']) ? $_GET['protID'] : '');
         $plotTypeId = (isset($_GET['pltID']) ? $_GET['pltID'] : ''); 
      ?>
      <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
        <div class="panel-heading">
            <?php 
                 $property = "SELECT `plot_type_name`,`plot_for_name`,`property_type_name` FROM `plot_type` INNER JOIN `plot_for` INNER JOIN `property_type` WHERE `plot_type_id` = $plotTypeId AND `plot_for_id` = $plotForId AND `property_type_id` = $propertyTypeId";
                 $result = mysqli_query($db, $property) or die (mysqli_error($db));
                  
                    if($result){
                        while ($row = mysqli_fetch_assoc($result)) {
                                $plotForName = $row['plot_for_name'];
                                $propertyTypeName = $row['property_type_name'];
                                $plotTypeName = $row['plot_type_name'];
                                echo '<h3 class="panel-title">'.$plotForName.'  '.$propertyTypeName.'  '.$plotTypeName.'</h3>';
                            }
                        }
            ?>
        </div>
        <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
          <div class="col-md-12" style="margin:0px;padding:0px;">
            <table>
        <?php
            $property = "SELECT * FROM `property` a INNER JOIN `property_type` b INNER JOIN `plot_type` c INNER JOIN `plot_for` d INNER JOIN `signup_as_agent` e INNER JOIN `society` f WHERE a.`society_id` = f.`society_id` AND a.`property_type` = b.`property_type_id` AND a.`property_plot` = c.`plot_type_id` AND a.`plot_for` = d.`plot_for_id` AND a.`agent_id` = e.`agent_id` AND a.property_type = '$propertyTypeId' AND a.property_plot = '$plotTypeId' AND a.plot_for = '$plotForId'";
            $result = mysqli_query($db, $property) or die (mysqli_error($db));
                
            if($result){
                while ($row = mysqli_fetch_array($result)) {
                    $propertyTitle = $row['property_name'];
                    $propertyDesc = $row['property_description'];
                    $propertyPostedOn = $row['property_posted_on'];
                    $propertyStatus = $row['property_status'];
                    $propertyPrice = $row['property_price'];
                    $propertyImage = $row['property_image'];
                    $propertySocietyName = $row['society_name'];
                    $propertyAgentName = $row['agent_name'];
                    $propertyAgentEmail = $row['agent_email'];
                    $propertyAgentPhone = $row['agent_phone'];
                    $propertyAgentCompanyLogo = $row['agent_company_logo'];
                    
                    echo '<tr>';
                        echo '<div class="panel panel-primary col-md-12" style="padding: 0px;float: right;">';
                   
                            echo '<div class="panel-heading" style="display:flex;">';   
                                echo '<h3 class="panel-title col-md-4" style="border-right:1px solid white;">'.$propertySocietyName.'</h3>';
                                echo '<h3 class="panel-title col-md-4" style="border-right:1px solid white;">'.$propertyTitle.'</h3>';
                                echo '<h3 class="panel-title col-md-4">'.$propertyPostedOn.'</h3>'; 
                            echo '</div>';
                            
                            echo '<div class="panel-body property-body">';
                        
                                echo '<div class="col-md-6 left-box">';
                                    echo '<div class="col-md-12" style="padding:0 !important;">';
                                        echo '<div class="col-md-5">';
                                            echo '<img class="img-responsive img-box" src="img/'.$propertyImage.'"/>';
                                        echo '</div>';
                                        echo '<div class="col-md-7">';
                                            echo '<h3 class="col">'.$propertyTitle.'</h3>';
                                        echo '</div>';
                                        
                                        echo '<div class="col-md-12" style="margin-top:5px;padding: 0px !important;">'; 
                                        echo '<div class="col-md-12">';
                                            echo '<div class="col-md-4">';
                                            echo '<p class="pp">Price:</p>';
                                            echo '</div>';
                                            echo '<div class="col-md-8 table-box">';
                                            echo '<p class="pp">'.$propertyPrice.' PKR</P>';
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<div class="col-md-12">';
                                            echo '<div class="col-md-4">';
                                            echo '<P class="pp">Posted on:</p>';
                                            echo '</div>';
                                            echo '<div class="col-md-8 table-box">';
                                            echo '<p class="pp">'.$propertyPostedOn.'</P>';
                                            echo '</div>';
                                        echo '</div>';
                                        echo '<div class="col-md-12">';
                                            echo '<div class="col-md-4">';
                                            echo '<p class="pp">Status:</P>';
                                            echo '</div>';
                                            echo '<div class="col-md-8 table-box">';
                                            echo '<p class="pp">'.$propertyStatus.'</p>';
                                            echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        

                                    echo '</div>';
                                echo '</div>';
                                
                                echo '<div class="col-md-5 right-box">';
                                    
                                    echo '<div class="col-md-4">';
                                        echo '<img style="max-width:100px !important;border-radius:5px;" class="img-responsive" src="img/'.$propertyAgentCompanyLogo.'"/>';
                                    echo '</div>';
                                    
                                    echo '<div class="col-md-8" style="margin-top:10px;">';
                                        echo '<h5 class="col">'.$propertyAgentName.'</h5>';
                                    echo '</div>';

                                    echo '<div class="col-md-12" style="margin-top:5px;padding: 0px !important;">'; 
                                    echo '<div class="col-md-12" style="padding: 0px !important;">';
                                        echo '<div class="col-md-3" style="padding: 0px !important;">';
                                        echo '<p class="pp">Cell:</p>';
                                        echo '</div>';
                                        echo '<div class="col-md-9 table-box" style="padding: 0px !important;">';
                                        echo '<p class="pp">'.$propertyAgentPhone.'</P>';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-md-12" style="padding: 0px !important;">';
                                        echo '<div class="col-md-3" style="padding: 0px !important;">';
                                        echo '<P class="pp">Email:</p>';
                                        echo '</div>';
                                        echo '<div class="col-md-9 table-box" style="padding: 0px !important;">';
                                        echo '<p class="pp">'.$propertyAgentEmail.'</P>';
                                        echo '</div>';
                                        
                                    echo '</div>';
                                    echo '<a class="btn btn-sm btn-primary" href="#" style="float:right;margin-top:5px;">View Agent Profile</a>';
                                    echo '</div>';

                                echo '</div>';

                               

                                echo '<div class="col-md-12">';
                                    echo '<a class="btn btn-primary" href="#" style="float:right;">Details</a>';
                                echo '</div>';
                                
                            echo '</div>';
                        echo '</div>';
                    echo '</tr>';
                } 
            }else{ ?>
                <tr>
                    <div class="panel panel-primary col-md-12" style="padding: 0px;float: right;">
                        <div class="panel-heading">
                            <h3 class="panel-title">No Data Found !!!</h3> 
                        </div>
                        <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
                            <p>NO Data Found Regarding This Topic.!!!</p>
                        </div>
                    </div>
                </tr>
           <?php } ?>
            </table>
            <div class="col-md-12">
                <hr>
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