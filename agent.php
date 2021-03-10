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
             $agent = (isset($_GET['action']) ? $_GET['action'] : ''); 
             if($agent == "fa"){
               $agent_user = 'SELECT * FROM `signup_as_agent` WHERE `status` = "Feature Agent"';
               $result = mysqli_query($db, $agent_user) or die (mysqli_error($db));
             }elseif($agent == "pa"){
               $agent_user = 'SELECT * FROM `signup_as_agent` WHERE `status` = "Pakistan Agent"';
               $result = mysqli_query($db, $agent_user) or die (mysqli_error($db));
             }
      ?>
      <!--Agent-box Rise Land-->
      <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
        <div class="panel-heading">
          <?php //echo '<h3 class="panel-title">Rise Land '.$status.'</h3>';
            if($agent == "fa"){
                echo '<h3 class="panel-title">Rise Land Feature Agent</h3>';
            }elseif($agent == "pa"){    
                echo '<h3 class="panel-title">Rise Land Pakistan Agent</h3>';
            }
          ?>
        </div>
        <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
          <div class="col-md-12" style="margin:0px;padding:0px;">
            
        <?php
            echo '<table>';
            while ($row = mysqli_fetch_array($result)) {
                    $agentId = $row['agent_id'];
                    $agentName = $row['agent_name'];
                    $agentImage = $row['agent_image'];
                    $agentEmail = $row['agent_email'];
                    $agentPhone = $row['agent_phone'];
                    $agentAddress = $row['agent_address'];
                    $agentZip = $row['agent_zipcode'];
                    $agentCountry = $row['agent_country'];
                    $agentService = $row['agent_services'];
                    $agentCityDeal = $row['agent_city_deal'];
                    $agentAgencyName = $row['agent_agency_name'];
                    $agentCompanyPhone = $row['agent_company_phone'];
                    $agentCompanyLogo = $row['agent_company_logo'];
                    $status = $row['status'];

                echo '<tr>';
                echo '<div class="panel panel-primary col-md-12" style="padding: 0px;float: right;">';
                echo '<div class="panel-heading">';
                echo '<h3 class="panel-title">'.$agentAgencyName.'</h3>'; 
                echo '</div>';
                echo '<div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">';
                echo '<div class="col-md-3">';
                echo '<img style="width:150px;height:150px;" class="img-responsive" src="img/'.$agentCompanyLogo.'"/>';
                echo '</div>';
                echo '<div class="col-md-9" style="float: left;">';
                echo '<p class="p"><b>Contact Person </b>: '.$agentName.'</p>';
                echo '<p class="p"><b>Contact Number </b>: '.$agentPhone.'</p>';
                echo '<p class="p"><b>Service Description </b>: '.$agentService.'</p>';
                echo '<a class="btn btn-primary" href="#" style="float:right;">Details</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</tr>';
                echo '</table>';
            } 
        ?>
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
<?php //include('include/footer.php'); ?>