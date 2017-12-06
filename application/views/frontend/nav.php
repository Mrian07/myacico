<style type="text/css">

.productSrcMobile
{
position:absolute;
width:310px;
display:none;
margin-top:-1px;
border-top:10px;
overflow:hidden;
border-left:1px  #CDCDCD solid;
border-right:1px  #CDCDCD solid;
background-color: white;
z-index: 289;
color:#000000;
margin-top:38px;
}

.show_result_mobile
{
font-family:tahoma;
padding:5px;
border-bottom:1px #CDCDCD dashed;
font-size:10px;
z-index: 289;
}

.show_result_mobile:hover
{
background:#e9e9e8;
color:#000000;
cursor:pointer;
}



.collapse{
  height:10px;
}
.navbar-collapse{
    height:10px;
    border-bottom: 1px solid #dddddd;
}

</style>


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
									<!-- <li class="dropdown megamenu-fw nav-show-desktop nav-garis"> -->
                  <li class="dropdown megamenu-fw nav-show-desktop nav-garis" style="<?php echo $atur; ?> font-family: 'myriad_web_pro';">
										<?php echo anchor('#', '<img src="'.$dataNav['iconurl'].'" border="0" height="20"> '.$nav_name, array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'));?>
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



	<script type="text/javascript">
	$('body').click(function() {
		 $('.show_result_mobile').hide();
	});

	function btnSearch(){
		var search = $('#search-mobile').val();
		location.href = base_url+'product/alllistItem/'+search;
	}

	function money(x){
		return 'Rp. '+(x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
	}

	$('.show_result_mobile').on('mouseout',function(){
		$('.show_result_mobile').hide();
	});

	$(document).ready(function() {

		$("#search-mobile").keyup(function() {

			var cat = $('#key_param').val();
			$(".productSrcMobile").show();

			var search_value = $(this).val();
			var datas		 = 'search='+search_value;
			var productSrcMobile = $('.productSrcMobile');

			if ( search_value == '' ) {$(".productSrcMobile").hide();}

			if(cat==''){
				productSrcMobile.html('');

					$.ajax({
						url: api_base_url+'/product/productlist/'+search_value,
						data: datas,
						success: function(data) {
							data.forEach(function(p){
								productSrcMobile.append(

								"<div class=\"show_result_mobile\" onclick=\"showDataMobile('"+p.name+"','"+p.m_product_id+"');\"><table border='0' cellpadding='5'><tr><td><img src='"+p.imageurl+"' width='80'></td><td><font size='2'>"+p.name+"<br><b>"+money(p.pricelist)+"</b></td></tr></table></div>"


								);

							});

						}
					});


			}else{

				productSrcMobile.html('');

					$.ajax({
						url: api_base_url+'/product/productlist/'+cat+'/'+search_value,
						data: datas,
						success: function(data) {


								data.forEach(function(p){
									productSrcMobile.append(

									"<div class=\"show_result_mobile\" onclick=\"showDataMobile('"+p.name+"','"+p.m_product_id+"');\"><table border='0'><tr><td><img src='"+p.imageurl+"' width='80'></td><td><font size='2'>"+p.name+"<br><b>"+money(p.pricelist)+"</b></td></tr></table></div>"

									);
								});
							//$("#result-mobile").html(data).show();
						}
					});

			}

			return false;
		});

	});
	function showDataMobile(name,id)
	{
		var url = base_url+'/product/detail/'+id+'/';
		window.location.href = url;
		// $("#search-mobile").val(name);
		// $("#searchID-mobile").val(id);
		// $("#result-mobile").hide();
		// $(".productSrcMobile").hide();
	}
</script>
