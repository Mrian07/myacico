	<div id="<?php echo$pane; ?>" class="menu_list">
		<p class="menu_head plus">Harga
		</p>
		<div class="menu_body">
			
			
			<div id="<?php echo$sliderprice; ?>"></div>
				<div class="row">
					<div class="col-md-12 kiri">
						<div class="input-group">
						<span class="input-group-addon" id="basic-addon2">Rp</span>
						<input id="<?php echo$sliderpricelow; ?>" type="text" class="form-control" aria-describedby="basic-addon2">
						</div>
					</div>
					<div class="col-md-12 kanan">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Rp</span>
							<input id="<?php echo$sliderpricehigh; ?>" type="text" class="form-control" aria-describedby="basic-addon2">
						</div>
					</div>
				</div>
			
			
		</div>
	</div>
	
	<div id="<?php echo$pane; ?>" class="menu_list">
		<p class="menu_head plus">Sale
		</p>
		<div class="menu_body">

			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				On Sale
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				Not On Sale
				</label>
			</div>

		</div>
	</div>
	
	<div id="<?php echo$pane; ?>" class="menu_list">
		<p class="menu_head plus">Brand
		</p>
		<div class="menu_body">

			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				ADVAN
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				ASUS
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				LENOVO
				</label>
			</div>
			
		</div>
	</div>

<script>
//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked

$("#<?php echo$pane; ?> p.menu_head").click(function(){
    $(this).toggleClass("plus minus").next("div.menu_body").slideToggle(300);
});
</script>


<script src="<?php echo base_url('assets/sliderprice/jquery-ui.js');?>"></script>
         

		 
        <!-- Jquery UI Range Script -->
        <script>
            $(document).ready(function() {
                var min_rent = 400,
                max_rent = 1500;
                $('#<?php echo$sliderpricelow; ?>').val(min_rent);
                $('#<?php echo$sliderpricehigh; ?>').val(max_rent);
 
                $('#<?php echo$sliderprice; ?>').slider({
                    orientation: 'horizontal',
                    range: true,
                    animate: 200,
                    min: 0,
                    max: 5000,
                    step: 100,
                    value: 0,
                    values: [min_rent, max_rent],
                    slide: function(event,ui) {
                        $('#<?php echo$sliderpricelow; ?>').val(ui.values[0]);
                        $('#<?php echo$sliderpricehigh; ?>').val(ui.values[1]);
                    }
                });
 
                $('#<?php echo$sliderpricelow; ?>').change(function () {
                    var low = $('#<?php echo$sliderpricelow; ?>').val(),
                    high = $('#<?php echo$sliderpricehigh; ?>').val();
                    low = Math.min(low, high);
                    $('#<?php echo$sliderpricelow; ?>').val(low);
                    $('#<?php echo$sliderprice; ?>').slider('values', 0, low);
                });
 
                $('#<?php echo$sliderpricehigh; ?>').change(function () {
                    var low = $('#<?php echo$sliderpricelow; ?>').val(),
                    high = $('#<?php echo$sliderpricehigh; ?>').val();
                    high = Math.max(low, high);
                    $('#<?php echo$sliderpricehigh; ?>').val(high);
                    if(high > 5000) {
                        $('#<?php echo$sliderpricehigh; ?>').val('5000');
                    }
                    $('#<?php echo$sliderprice; ?>').slider('values', 1, high);
                });
            });
        </script>
