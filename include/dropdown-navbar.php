<?php include('conn.php'); ?>
<div class="container" style="margin-top: -30px;display: flex;">
        <div style="width: 150px; height: 80px;"><a href="index.php"><img class="img-responsive" src="img/Logo.jpeg"/></a></div>
          <div class="row">
            <div class="nav nav-tabs" style="display: flex;">
              <!-- <div role="presentation" class="active"><a href="#"><img class="img-responsive" src="img/Logo.jpeg" width="100" height="60"/></a></div> -->
               
                <!---Buy / Sell--->
                <div role="presentation" class="dropdown space-nav"><a href="JavaScript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><b>Buy / Sell</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Residential</b></li>  
                        <li class="dropdown-text"><a href="property.php?plfID=1&protID=1&pltID=1" style="text-decoration: none;">House</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=1&protID=1&pltID=2" style="text-decoration: none;">Plot</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=1&protID=1&pltID=3" style="text-decoration: none;">Flat</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Commercial</b></li>  
                        <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=4" style="text-decoration: none;">Warehouse</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=1" style="text-decoration: none;">House</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=2" style="text-decoration: none;">Plot</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=5" style="text-decoration: none;">Building</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Agricultural</b></li>  
                        <li class="dropdown-text"><a href="property.php?plfID=3&protID=3&pltID=6" style="text-decoration: none;">Farmhouse</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=3&protID=3&pltID=2" style="text-decoration: none;">Plot</a></li>
                    </div>
                  </div>
                </div>
                
                <!---Rent--->
                <div role="presentation" class="dropdown space-nav"><a href="JavaScript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><b>Rent</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Residential</b></li>  
                        <li class="dropdown-text"><a href="property.php?plfID=1&protID=1&pltID=1" style="text-decoration: none;">House</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=1&protID=1&pltID=3" style="text-decoration: none;">Flat / Apartments</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Commercial</b></li>  
                        <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=4" style="text-decoration: none;">Warehouse</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=1" style="text-decoration: none;">House</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=5" style="text-decoration: none;">Building</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Agricultural</b></li>  
                        <li class="dropdown-text"><a href="property.php?plfID=3&protID=3&pltID=2" style="text-decoration: none;">Land / Plot</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=3&protID=3&pltID=6" style="text-decoration: none;">Farmhouse</a></li>
                    </div>
                  </div>
                </div>
               
                <!---Wanted--->
                <div role="presentation" class="dropdown space-nav"><a href="JavaScript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><b>Wanted</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Residential</b></li>  
                        <li class="dropdown-text"><a href="property.php?plfID=1&protID=1&pltID=2" style="text-decoration: none;">Plot</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=1&protID=1&pltID=7" style="text-decoration: none;">Ground Floor</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=1&protID=1&pltID=8" style="text-decoration: none;">Upper Portion</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Commercial</b></li>  
                        <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=9" style="text-decoration: none;">Office</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=4" style="text-decoration: none;">Warehouse</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=2&protID=2&pltID=5" style="text-decoration: none;">Building</a></li>
                    </div>
                    <div class="column">
                        <li class="dropdown-header"><b>Agricultural</b></li>  
                        <li class="dropdown-text"><a href="property.php?plfID=3&protID=3&pltID=6" style="text-decoration: none;">Farmhouse</a></li>
                          <li class="dropdown-text"><a href="property.php?plfID=3&protID=3&pltID=2" style="text-decoration: none;">Plot / Land</a></li>
                    </div>
                  </div>
                </div>
                
                <!---Forums--->
                <div role="presentation" class="dropdown space-nav"><a href="JavaScript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><b>Forums</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Rising Forums</b></li>  
                          <?php 
                            $forum = 'SELECT * FROM `forum_type`';
                            $result = mysqli_query($db, $forum) or die (mysqli_error($db));
                              while ($row = mysqli_fetch_array($result)) {
                                $id = $row['forum_type_id'];  
                                $name = $row['forum_type_name'];
                                echo '<li class="dropdown-text"><a href="forum.php?action='.$id.'" style="text-decoration: none;">'.$name.'</a></li>';
                              } 
                          ?>
                    </div>
                  </div>
                </div>
               
                <!---News--->
                <div role="presentation" class="dropdown space-nav"><a href="JavaScript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><b>News</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Rising News</b></li> 
                        <li class="dropdown-text"><a href="news.php?action=all" style="text-decoration: none;">Latest News</a></li> 
                        <?php 
                         $news = 'SELECT * FROM `news_type`';
                         $result = mysqli_query($db, $news) or die (mysqli_error($db));
                             while ($row = mysqli_fetch_array($result)) {
                              $id = $row['news_type_id'];  
                              $name = $row['news_type_name'];
                          echo '<li class="dropdown-text"><a href="news.php?action='.$id.'" style="text-decoration: none;">'.$name.'</a></li>';
                          } 
                        ?>
                    </div>
                  </div>
                </div>
               
                <!---User Corner--->
                <div role="presentation" class="dropdown space-nav"><a href="JavaScript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><b>User Corner</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Agents</b></li>  
                        <li class="dropdown-text"><a href="agent.php?action=fa" style="text-decoration: none;">Featured Agents</a></li>
                          <li class="dropdown-text"><a href="agent.php?action=pa" style="text-decoration: none;">Recent Agents</a></li>
                    </div>
                  </div>
                </div>
                
                <!---Developments--->
                <div role="presentation" class="dropdown space-nav"><a href="JavaScript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><b>Developments</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                        <li class="dropdown-header"><b>Latest Developments</b></li> 
                        <?php 
                            $development = 'SELECT `city_id`,`city_name` FROM `city`';
                            $result = mysqli_query($db, $development) or die (mysqli_error($db));
                                while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['city_id'];  
                                    $name = $row['city_name'];
                                    echo '<li class="dropdown-text"><a href="city.php?action='.$id.'" style="text-decoration: none;">Development In '.$name.'</a></li>';
                                  } 
                        ?>
                    </div>
                  </div>
                </div>
                
                <!---Provinces--->
                <div role="presentation" class="dropdown space-nav"><a href="JavaScript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><b>Provinces</b></a>
                  <div id="products-menu" class="dropdown-menu clearfix row" role="menu" >
                    <div class="column">
                    <li class="dropdown-header"><b>Rising Territories</b></li>  
                    <?php 
                         $province = 'SELECT `province_id`,`province_name` FROM `province`';
                         $result = mysqli_query($db, $province) or die (mysqli_error($db));
                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row['province_id'];  
                                $name = $row['province_name'];
                                echo '<li class="dropdown-text"><a href="province.php?action='.$id.'" style="text-decoration: none;">'.$name.'</a></li>';
                            } 
                    ?>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>