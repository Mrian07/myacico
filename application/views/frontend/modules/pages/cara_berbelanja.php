<?php
$this->data['lang'] = $lang;
?>
<div class="container">
	 <div class="row">
	  <div class="col-sm-12">
              <br>
                <center>
                    <?php if($lang=='en'){?>
                    <img src="<?php echo base_url('images/general/cara_berbelanja_04.jpg');?>" style='height:750px; width: auto;'><br>
                    <img src="<?php echo base_url('images/general/cara_berbelanja_05.jpg');?>" style='height:750px; width: auto;'><br>
                    <img src="<?php echo base_url('images/general/cara_berbelanja_06.jpg');?>" style='height:750px; width: auto;'>
                    <?php
                    }
                    else
                    {
                        ?>
                    <img src="<?php echo base_url('images/general/cara_berbelanja_01.jpg');?>" style='height:750px; width: auto;'><br>
                    <img src="<?php echo base_url('images/general/cara_berbelanja_02.jpg');?>" style='height:750px; width: auto;'><br>
                    <img src="<?php echo base_url('images/general/cara_berbelanja_03.jpg');?>" style='height:750px; width: auto;'>
                   <?php
                    }
                    ?>
                </center>
		
		
	  </div>

</div>	  
</div>

