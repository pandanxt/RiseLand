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
        //   $province = "SELECT * FROM `province` WHERE `province_id` =".$proId;
        //   $result = mysqli_query($db, $province) or die (mysqli_error($db));
        //   if($result){
        //       while ($row = mysqli_fetch_assoc($result)) {
        //           $name = $row['province_name'];
        //           $location = $row['location'];
        //           $description = $row['description'];
        //       } 
        //   }
    ?>
    <!--SignUp-box Land-->
    <div class="panel panel-primary col-md-8" style="padding: 0px;margin-top: 10px; float: right;">
      <div class="panel-heading">
        <?php echo'<h3 class="panel-title">'.$proId.'</h3>';?>
      </div>
      <div class="panel-body" style="border: 1px solid #337ab7; margin: 5px; border-radius: 5px;">
        <div class="col-md-12" style="margin:0px;padding:0px;">
          <div class="col-md-12">
              <div class="col-md-12" style="border-radius: 5px; background-color:#e7e7e7;padding:5px;">
                    <form action="include/php-handler.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="admin" value="<?php //echo $_SESSION["adminid"];?>">
                        </div>
                        <div class="form-group">
                            <label for="newsname">News Name:</label>
                            <input type="text" id="newsname" name="name" class="form-control" placeholder="Enter News name" autofocus="autofocus" required>
                        </div>
                        <div class="form-group">
                            <label for="newstype">News Type:</label>
                            <select id="newstype" name="type" class="form-control" required>
                            <?php
                            //     $type = 'SELECT * FROM `news_type`';
                            //     $result = mysqli_query($db, $type) or die (mysqli_error($db));
                            //       while ($row = mysqli_fetch_array($result)) {
                            //         $id = $row['news_type_id'];  
                            //         $name = $row['news_type_name'];
                            //         echo '<option value="'.$id.'">'.$name.'</option>'; 
                            //   }
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
        </div>
      </div>
    </div><!--/panel panel-primary col-md-7 col-md-offset-1-->

  </div><!--/col-md-12-->

</div><!--/row-->

</div><!--/container-->

  <!-- Main Footer -->
  <?php include ('include/footer.php'); ?>