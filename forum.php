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
      <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
        <div class="panel-heading">
            <h3 class="panel-title">Pakistan Real Estate News</h3>
        </div>
        <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
          <div class="col-md-12" style="margin:0px;padding:0px;">
            <table>
        <?php
            $forum = (isset($_GET['action']) ? $_GET['action'] : ''); 
               $forum_user = "SELECT * FROM `forum` a INNER JOIN `signup_as_agent` b Where a.`agent_id` = b.`agent_id` AND a.`forum_type_id` = ".$forum;
               $result = mysqli_query($db, $forum_user) or die (mysqli_error($db));
                
            if($result){
                while ($row = mysqli_fetch_array($result)) {
                    $forumTitle = $row['forum_title'];
                    $forumStatus = $row['forum_status'];
                    $forumDesc = $row['forum_description'];
                    $forumPostOn = $row['posted_on'];
                    $forumPostby = $row['agent_name'];
                    $forumEmail = $row['agent_email'];
                    $forumPhone = $row['agent_phone'];
                    $forumImage = $row['agent_image'];
                    echo '<tr>';
                    echo '<div class="panel panel-primary col-md-12" style="padding: 0px;float: right;">';
                    echo '<div class="panel-heading">';   
                    echo '<h3 class="panel-title">'.$forumTitle.'</h3>'; 
                    echo '</div>';
                    echo '<div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">';
                
                    echo '<div class="col-md-9" style="float: left;">';
                    echo '<div class="col-md-12" style="display: flex;"><p><small>Asked By: '.$forumPostby.'</small></p>&nbsp;&nbsp;&nbsp;<p><small>Post Date: '.$forumPostOn.'</small></p>&nbsp;&nbsp;&nbsp;<p><small>Status: '.$forumStatus.'</small></p></div>';
                    echo '<div class="col-md-12" style=" white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"><p>'.$forumDesc.'</p></div>';
                    echo '<div class="col-md-12"><p>'.$forumEmail.'</p><p>'.$forumPhone.'</p></div>';
                    echo '</div>';
                    echo '<div class="col-md-3">';
                    echo '<img style="width:150px;height:150px;margin:5px;border-radius:5px;" class="img-responsive" src="img/'.$forumImage.'"/>';
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