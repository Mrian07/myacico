<div class='my-nav'>
<!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-custom bootsnav" style='width:100%;'>
			<!-- Start Header Navigation -->
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="navbar-menu">
            <!-- <ul class="nav navbar-nav navbar-center navbar-full" data-in="fadeInDown" data-out="fadeOutUp" style='text-align:center'> -->
            <ul class="nav navbar-nav navbar-center navbar-full" data-in="fadeInDown" data-out="fadeOutUp" style='text-align:center; width:100%; list-style:none;'>


							<?php
            // echo"<pre>";print_r($hasilNav);
                $loopmn=1;
               foreach($hasilNav as $dataNav){
                 if($lang=='en'){
                   $nav_name = $dataNav['name_en'];
                 }else{
                   $nav_name = $dataNav['name'];
                 }

                 if($loopmn=='6'){
                   $atur = "width:9%;";
                 }elseif($loopmn=='2'){
                   $atur = "width:9%;";
                 }else if($loopmn=='5'){
                    $atur = "width:15%;";
                  }else{
                   $atur = "width:12%;";
                 }
                 ?>

              <li class="dropdown megamenu-fw nav-show-desktop nav-garis" style="<?php echo $atur; ?> font-family: 'myriad_web_pro';">
								<?php echo anchor('#', '<img src="'.$dataNav['iconurl'].'" border="0" height="15"> '.$nav_name, array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'));?>
                                                                        <ul  class="dropdown-menu megamenu-content" role="menu">
									<li>
										<div>
											<div class="row" style='color:#000000'>
                          <div class="col-menu col-md-2" style='height:250px'><img src="<?php echo$dataNav['imageurl']; ?>" style="float:right;width:200px"/></div>
													<?php
                          $imgLoop = 1;
                           foreach($dataNav['c2'] as $dataNavChild){
                             if($lang=='en'){
                               $navChildName = $dataNavChild['name_en'];
                             }else{
                               $navChildName = $dataNavChild['name'];
                             }

                             ?>
														<div class="col-menu col-md-2">
                              <?php if($imgLoop<=5){
                                $imgP = "<img src=".$dataNavChild['imageurl']." height='100px' border='0'>";
                                echo anchor(base_url('product/category/'.$dataNavChild['categorySubId'].'/'.$dataNavChild['alias']), $imgP);?>
                              <br>
                              <b><?php echo anchor(base_url('product/category/'.$dataNavChild['categorySubId'].'/'.$dataNavChild['alias']), $navChildName);?></b><hr>
                            <?php }else{ ?>
															<?php echo anchor(base_url('product/category/'.$dataNavChild['categorySubId'].'/'.$dataNavChild['alias']), $navChildName);?>
                            <?php } ?>
														</div>
													<?php $imgLoop++; } ?>

											</div>
										</div>
									</li>
								</ul>
							</li>

							<?php $loopmn++; } ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <!-- End Navigation -->

	</div>
