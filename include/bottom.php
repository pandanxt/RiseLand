 <!---Plots for sale in Pakistan--->
 <div class="container">
        <h2 style="color:#fdc222;">Plots For Sale in Pakistan</h2>
        <div class="row">
          <div class="col-md-12">
          <?php
            // $forum = (isset($_GET['action']) ? $_GET['action'] : ''); 
               $forum_user = "SELECT * FROM (SELECT * FROM city ORDER BY city_id DESC LIMIT 12) t ORDER BY city_id ASC";               
               $result = mysqli_query($db, $forum_user) or die (mysqli_error($db));
                
            if($result){
                while ($row = mysqli_fetch_array($result)) {
                    $cityId = $row['city_id'];
                    $cityName = $row['city_name'];
                  ?> 
                  <div class="col-md-12" style="text-align: left;">
                   <?php echo '<p class="col-md-3"><a href="city.php?action='.$cityId.'">'.$cityName.'</a></p>';?>
                  </div>
                
              <?php } 
            }
            ?>
          </div>
        </div>
      </div>
      
      <!---Plots for sale in Popular Location--->
      <div class="container">
        <h2 style="color:#fdc222;">Plots For Sale in Popular Location</h2>
        <div class="row">
          <div class="col-md-12">
          <?php
            // $forum = (isset($_GET['action']) ? $_GET['action'] : ''); 
               $forum_user = "SELECT * FROM (SELECT * FROM society ORDER BY society_id DESC LIMIT 20) t ORDER BY society_id ASC";               
               $result = mysqli_query($db, $forum_user) or die (mysqli_error($db));
                
            if($result){
                while ($row = mysqli_fetch_array($result)) {
                    $societyId = $row['society_id'];
                    $societyName = $row['society_name'];
                  ?> 
                  <div class="col-md-12" style="text-align: left;">
                   <?php echo '<p class="col-md-3"><a href="society.php?action='.$societyId.'">'.$societyName.'</a></p>';?>
                  </div>
                
              <?php } 
            }
            ?>
          </div>
        </div>
      </div>
      
      <!---Pakistan Real Estate News--->
      <div class="container">
        <h2 style="color:#fdc222;">Pakistan Real Estate News</h2>
        <div class="row">
          <div class="col-md-12">

            <!---News-box-1--->
            <?php
            // $forum = (isset($_GET['action']) ? $_GET['action'] : ''); 
               $forum_user = "SELECT * FROM (SELECT * FROM news ORDER BY news_id DESC LIMIT 3) t ORDER BY news_id ASC";               
               $result = mysqli_query($db, $forum_user) or die (mysqli_error($db));
                
            if($result){
                while ($row = mysqli_fetch_array($result)) {
                    $newsId = $row['news_id'];
                    $newsName = $row['news_name'];
                    $newsDescription = $row['news_description'];
                    $newsType = $row['news_type'];
                    $newsImage = $row['news_image'];
                    $newsPostedOn = $row['news_post_on'];
                    $newsPostedBy = $row['news_post_by'];
                   
                    echo '<div class="col-sm-6 col-md-4">';
                    echo '<a href="#" style="text-decoration: none;">';
                    echo '<div class="thumbnail">';
                    echo '<img class="news-image" src="img/'.$newsImage.'" alt="'.$newsName.'">';
                    echo '<div class="caption">';
                    echo '<h4  class="text" style="color:#fdc222;">'.$newsName.'</h4>';
                    echo '<div class="text">'.$newsDescription.'</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                
               } 
            }
            ?>
            
          </div>
        </div>
      </div>
     
      <!---Welcome to Rise Land--->
      <div class="container">
        <h2 style="color:#fdc222;">Welcome to Rise Land</h2>
        <div class="row">
          <div class="col-md-12">
            <p>Rise Land is a <a href="#">Pakistan real estate website</a> to buy sell rent properties like <a href="#">plots for sale</a>, <a href="#">houses for sale</a>, farms etc. Mobeen Shah is maintaing this portal, which specialize in <a href="#">Real Estate websites</a>.</p> 
            <p><a href="#">Real Estate Agents</a> and other investors can create their account on this portal and sell their properties. Also users can keep track of their <a href="#">properties</a> and inventories or other clients they have.</p>
            <p>So Please join us now to advertise your properties to sale or rent free of cost.</p>
          </div>
        </div>
      </div>