<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  
  <ol class="carousel-indicators">
  
	<?php $loop_slide=0; foreach ($hasil_slide_show as $value) { 
	if($loop_slide=="0"){$active="class='active'";}else{$active="";}?>
	<li data-target="#myCarousel" data-slide-to="<?php echo$loop_slide; ?>" <?php echo $active; ?>></li>
	<?php
	$loop_slide++;
	}?>
  </ol>
  <div class="carousel-inner">	
	<?php $loop_slide=1; foreach ($hasil_slide_show as $data_slide_show): 
	if($loop_slide=='1'){$active="class='item active'";}else{$active="class='item'";}
	?>
	<div <?php echo"$active"; ?>>
		<?php if($data_slide_show->link_slide_show){?>
		<a href="<?php echo $data_slide_show->link_slide_show; ?>"><img u="image" width='100%' src='<?php echo base_url('images/slide_show/'.$data_slide_show->img_slide_show);?>' border='0' /></a>
		<?php }else{?>
		<img u="image" width='100%' src='<?php echo base_url('images/slide_show/'.$data_slide_show->img_slide_show);?>' border='0' />
		<?php }?>
	</div>
	<?php 
	$loop_slide++;
	endforeach; ?>
	
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> 

</div>
  
