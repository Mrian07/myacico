	<div id="pane" class="menu_list">
		<p class="menu_head plus">Harga
		</p>
		<div class="menu_body">
			
			
			<div id="slider-price"></div>
				<div class="row">
					<div class="col-md-12 kiri">
						<div class="input-group">
						<span class="input-group-addon" id="basic-addon2">Rp</span>
						<input id="slider-price-low" type="text" class="form-control" aria-describedby="basic-addon2">
						</div>
					</div>
					<div class="col-md-12 kanan">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Rp</span>
							<input id="slider-price-high" type="text" class="form-control" aria-describedby="basic-addon2">
						</div>
					</div>
				</div>
			
			
		</div>
	</div>
	
	<div id="pane" class="menu_list">
		<p class="menu_head plus">Harga
		</p>
		<div class="menu_body">
			
			
			<div id="slider-price"></div>
				<div class="row">
					<div class="col-md-12 kiri">
						<div class="input-group">
						<span class="input-group-addon" id="basic-addon2">Rp</span>
						<input id="slider-price-low" type="text" class="form-control" aria-describedby="basic-addon2">
						</div>
					</div>
					<div class="col-md-12 kanan">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon2">Rp</span>
							<input id="slider-price-high" type="text" class="form-control" aria-describedby="basic-addon2">
						</div>
					</div>
				</div>
			
			
		</div>
	</div>

<script>
//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked

$("#pane p.menu_head").click(function(){
    $(this).toggleClass("plus minus").next("div.menu_body").slideToggle(300);
});
</script>


<script src="<?php echo base_url('assets/sliderprice/jquery-ui.js');?>"></script>
         

		 
        <!-- Jquery UI Range Script -->
        <script>
            $(document).ready(function() {
                var min_rent = 400,
                max_rent = 1500;
                $('#slider-price-low').val(min_rent);
                $('#slider-price-high').val(max_rent);
 
                $('#slider-price').slider({
                    orientation: 'horizontal',
                    range: true,
                    animate: 200,
                    min: 0,
                    max: 5000,
                    step: 100,
                    value: 0,
                    values: [min_rent, max_rent],
                    slide: function(event,ui) {
                        $('#slider-price-low').val(ui.values[0]);
                        $('#slider-price-high').val(ui.values[1]);
                    }
                });
 
                $('#slider-price-low').change(function () {
                    var low = $('#slider-price-low').val(),
                    high = $('#slider-price-high').val();
                    low = Math.min(low, high);
                    $('#slider-price-low').val(low);
                    $('#slider-price').slider('values', 0, low);
                });
 
                $('#slider-price-high').change(function () {
                    var low = $('#slider-price-low').val(),
                    high = $('#slider-price-high').val();
                    high = Math.max(low, high);
                    $('#slider-price-high').val(high);
                    if(high > 5000) {
                        $('#slider-price-high').val('5000');
                    }
                    $('#slider-price').slider('values', 1, high);
                });
            });
        </script>
