 <!---Plots for sale in Pakistan--->
 <div class="container">
        <h2 style="color:#fdc222;">Plots For Sale in Pakistan</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-3" style="text-align: left;">
            <p><a href="#">Lahore</a></p>
            <p><a href="#">Faisalabad</a></p>
            </div>
            <div class="col-md-3" style="text-align: left;">
              <p><a href="#">Lahore</a></p>
              <p><a href="#">Faisalabad</a></p>
            </div>
            <div class="col-md-3" style="text-align: left;">
              <p><a href="#">Lahore</a></p>
              <p><a href="#">Faisalabad</a></p>
            </div>
            <div class="col-md-3" style="text-align: left;">
              <p><a href="#">Lahore</a></p>
              <p><a href="#">Faisalabad</a></p>
            </div>
          </div>
        </div>
      </div>
      
      <!---Plots for sale in Popular Location--->
      <div class="container">
        <h2 style="color:#fdc222;">Plots For Sale in Popular Location</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-3" style="text-align: left;">
            <p><a href="#">Al-Noor Orchard Lahore</a></p>
            <p><a href="#">Bahria Town Peshawar</a></p>
            <p><a href="#">DHA Islamabad</a></p>
            <p><a href="#">Master City Gujranwala</a></p>
            </div>
            <div class="col-md-3" style="text-align: left;">
            <p><a href="#">Al-Noor Orchard Lahore</a></p>
            <p><a href="#">Bahria Town Peshawar</a></p>
            <p><a href="#">DHA Islamabad</a></p>
            <p><a href="#">Master City Gujranwala</a></p>
            </div>
            <div class="col-md-3" style="text-align: left;">
              <p><a href="#">Al-Noor Orchard Lahore</a></p>
              <p><a href="#">Bahria Town Peshawar</a></p>
              <p><a href="#">DHA Islamabad</a></p>
              <p><a href="#">Master City Gujranwala</a></p>
            </div>
            <div class="col-md-3" style="text-align: left;">
              <p><a href="#">Al-Noor Orchard Lahore</a></p>
            <p><a href="#">Bahria Town Peshawar</a></p>
            <p><a href="#">DHA Islamabad</a></p>
            <p><a href="#">Master City Gujranwala</a></p>
            </div>
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
              

              <!---News-box-2--->
              <!-- <div class="col-sm-6 col-md-4">
                <a href="#" style="text-decoration: none;">
                <div class="thumbnail">
                  <img src="img/Logo.jpeg" alt="...">
                  <div class="caption">
                    <h4 style="color:#fdc222;">Lania Arcadia Karachi Location Map - Payment Plan - Details</h4>
                    <p>Lania Arcadia is a marvellous residential project in Karachi which has been...</p>
                  </div>
                </div>
                </a>
              </div> -->

              <!---News-box-3--->
              <!-- <div class="col-sm-6 col-md-4">
                <a href="#" style="text-decoration: none;">
                  <div class="thumbnail">
                    <img src="img/Logo.jpeg" alt="...">
                    <div class="caption">
                      <h4 style="color:#fdc222;">Wasi Country Park Karachi Location Map - Payment Plan - Details</h4>
                      <p>Wasi Country Park is a multi-serving residential project which has been ini...</p>
                    </div>
                  </div>
                </a>  
              </div> -->
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