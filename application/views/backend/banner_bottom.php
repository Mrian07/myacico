<?php
foreach($hasil_banner_bottom as $data){	
	if($data->img_banner){
		echo"<div class='banner'><a href='".$data->link_banner."' target='".$data->target_banner."'><img class='img_responsive' src='".base_url('images/banner/'.$data->img_banner)."'/></a></div>";
	}
}?>	