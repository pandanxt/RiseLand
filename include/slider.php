<div class="container">
        <h2 style="text-align: left;color: #fdc222;">Featured Agents</h2>
       
        <div class="row">
          <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
              <div class="carousel-inner">
              <?php
            // $forum = (isset($_GET['action']) ? $_GET['action'] : ''); 
               $slider = "SELECT agent_id,agent_company_logo FROM `signup_as_agent` WHERE STATUS = 'Feature Agent'";               
               $result = mysqli_query($db, $slider) or die (mysqli_error($db));
                
            if($result){
                while ($row = mysqli_fetch_array($result)) {
                    $agentId = $row['agent_id'];
                    $agentImage = $row['agent_company_logo'];
                   
                  echo '<div class="item active">';
                  echo '<div class="col-xs-4"><a href="#1"><img src="img/'.$agentImage.'" class="img-responsive slider-img"></a></div>';
                  echo '</div>';
                } 
              }
              ?>  
                <!-- <div class="item active">
                  <div class="col-xs-4"><a href="#1"><img src="img/cover.png" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="img/cover.png" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="img/cover.png" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="img/cover.png" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="img/cover.png" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-4"><a href="#1"><img src="img/cover.png" class="img-responsive"></a></div>
                </div> -->
                <!-- add  more items here -->
              </div>
              <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>