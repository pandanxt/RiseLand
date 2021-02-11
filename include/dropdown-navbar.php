<?php include('conn.php'); ?>
<div class="container" style="margin-top: -30px;display: flex;">
        <div style="width: 150px; height: 80px;"><a href="index.php"><img class="img-responsive" src="img/Logo.jpeg"/></a></div>
          <div class="row">
            <div class="nav nav-tabs" style="display: flex;">
              <!-- <div role="presentation" class="active"><a href="#"><img class="img-responsive" src="img/Logo.jpeg" width="100" height="60"/></a></div> -->
               
                <!---Buy / Sell--->
                <div role="presentation" class="dropdown space-nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Buy / Sell</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Residential</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">House</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Plot</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Flat</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Commercial</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">Warehouse</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">House</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Plot</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Building</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Agricultural</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">Farmhouse</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Plot</a></li>
                    </div>
                  </div>
                </div>
                
                <!---Rent--->
                <div role="presentation" class="dropdown space-nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Rent</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Residential</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">House</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Flat / Apartments</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Commercial</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">Warehouse</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">House</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Building</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Agricultural</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">Land / Plot</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Farmhouse</a></li>
                    </div>
                  </div>
                </div>
               
                <!---Wanted--->
                <div role="presentation" class="dropdown space-nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Wanted</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Residential</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">Plot</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Ground Floor</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Upper Portion</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Commercial</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">Office</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Warehouse</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Building</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Agricultural</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">Farmhouse</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Plot / Land</a></li>
                    </div>
                  </div>
                </div>
                
                <!---Forums--->
                <div role="presentation" class="dropdown space-nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Forums</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Rising Forums</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">Buying Property</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Daily File Rates</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Selling Properties</a></li>
                    </div>
                  </div>
                </div>
               
                <!---News--->
                <div role="presentation" class="dropdown space-nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>News</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Rising News</b></li>  
                        <li class="dropdown-text"><a href="#" style="text-decoration: none;">Latest News</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Pakistan Development News</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Real Estate Property News</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">Real Estate Reviews</a></li>
                          <li class="dropdown-text"><a href="#" style="text-decoration: none;">General News</a></li>
                    </div>
                  </div>
                </div>
               
                <!---User Corner--->
                <div role="presentation" class="dropdown space-nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>User Corner</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Agents</b></li>  
                        <li class="dropdown-text"><a href="agent.php?action=fa" style="text-decoration: none;">Featured Agents</a></li>
                          <li class="dropdown-text"><a href="agent.php?action=pa" style="text-decoration: none;">Recent Agents</a></li>
                    </div>
                  </div>
                </div>
                
                <!---Developments--->
                <div role="presentation" class="dropdown space-nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Developments</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Latest Developments</b></li> 
                        <?php 
                         $development = 'SELECT `city_id`,`city_name` FROM `city`';
                         $result = mysqli_query($db, $development) or die (mysqli_error($db));
                        //  if($result){
                             while ($row = mysqli_fetch_array($result)) {
                              $id = $row['city_id'];  
                              $name = $row['city_name'];
                        //  }
                         
                          echo '<li class="dropdown-text"><a href="city.php?action='.$id.'" style="text-decoration: none;">Development In '.$name.'</a></li>';
                        ?>  
                          <!-- <li class="dropdown-text"><a href="dp-karachi.php" style="text-decoration: none;">Development In Karachi</a></li>
                          <li class="dropdown-text"><a href="dp-islamabad.php" style="text-decoration: none;">Development In Islamabad</a></li>
                          <li class="dropdown-text"><a href="dp-faisalabad.php" style="text-decoration: none;">Development In Faisalabad</a></li>
                          <li class="dropdown-text"><a href="dp-sialkot.php" style="text-decoration: none;">Development In Sialkot</a></li>
                          <li class="dropdown-text"><a href="dp-multan.php" style="text-decoration: none;">Development In Multan</a></li>
                          <li class="dropdown-text"><a href="dp-murree.php" style="text-decoration: none;">Development In Murree</a></li>
                          <li class="dropdown-text"><a href="dp-hyderabad.php" style="text-decoration: none;">Development In Hyderabad</a></li> -->
                        <?php
                          } 
                        ?>
                    </div>
                  </div>
                </div>
                
                <!---Provinces--->
                <div role="presentation" class="dropdown space-nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Provinces</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                    <li class="dropdown-header"><b>Rising Territories</b></li>  
                    <?php 
                         $province = 'SELECT `province_id`,`province_name` FROM `province`';
                         $result = mysqli_query($db, $province) or die (mysqli_error($db));
                        //  if($result){
                             while ($row = mysqli_fetch_array($result)) {
                              $id = $row['province_id'];  
                              $name = $row['province_name'];
                        //  }
                    ?>
                          <li class="dropdown-text"><a href="province.php?action=<?php echo $id; ?>" style="text-decoration: none;"><?php echo $name; ?></a></li>
                          <!-- <li class="dropdown-text"><a href="punjab.php" style="text-decoration: none;">Punjab</a></li>
                          <li class="dropdown-text"><a href="sindh.php" style="text-decoration: none;">Sindh</a></li>
                          <li class="dropdown-text"><a href="kpk.php" style="text-decoration: none;">KPK</a></li>
                          <li class="dropdown-text"><a href="balochistan.php" style="text-decoration: none;">Balochistan</a></li>
                          <li class="dropdown-text"><a href="gilgit-baltistan.php" style="text-decoration: none;">Gilgit Baltistan</a></li>
                          <li class="dropdown-text"><a href="azad-kashmir.php" style="text-decoration: none;">Azad Kashmir</a></li> -->
                        <?php
                             } 
                        ?>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>