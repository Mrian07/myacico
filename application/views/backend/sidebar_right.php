<?php $color=null; foreach($hasil_box as $data){
			
if($color=='box-info'){
	$color='box-primary';
}elseif($color=='box-primary'){
	$color='box-success';
}elseif($color=='box-success'){
	$color='box-warning';
}elseif($color=='box-warning'){
	$color='box-danger';
}else{$color='box-info';}
?>
<div class="row">
	<div class="col-md-12">
		<!-- PRODUCT LIST -->
		<div class="box <?php echo $color;?>">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo $data->nm_box_info; ?></h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div><!-- /.box-header -->
			<div class="box-body">
				<?php
				$text = $data->contain_box_info;
				$text=str_replace("../kcfinder",base_url()."kcfinder",$text); 
				$text=str_replace("../tinymcpuk",base_url()."tinymcpuk",$text);
				echo"$text";?>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div>
<?php } ?>

<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Rekening Pengelola</h3>
		<div class="box-tools pull-right">
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		</div>
	</div><!-- /.box-header -->
	<div class="box-body">
		<?php foreach($payment as $data){ ?>
			<?php if(!empty($data->img_payment)){echo"<img src=".base_url()."images/payment/".$data->img_payment." style='margin-bottom:5px;'>";} ?><br>
			<b><?php echo $data->nm_payment;?></b><br>
			<?php echo $data->info_payment;?>
			<br>		
		<?php } ?>
	</div>
</div>	

<?php
foreach($hasil_banner_side as $data){	
	if($data->img_banner){
		echo"<div class='banner'><a href='".$data->link_banner."' target='".$data->target_banner."'><img src='".base_url('images/banner/'.$data->img_banner)."'/></a></div>";
	}
}?>