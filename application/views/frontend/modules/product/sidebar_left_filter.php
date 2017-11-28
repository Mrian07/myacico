<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<!-- <?php
	foreach($hasil_filter as $dataf){
		if($dataf->filterAlias=='Price'){?>
			<div id="<?php echo$pane; ?>" class="menu_list">
				<p class="menu_head plus"><?php echo $dataf->filter; ?></p>
				<div class="menu_body">
					<div id="<?php echo$sliderprice; ?>" style='margin-bottom:5px'></div>
					<div class="input-group" style='margin-bottom:5px'>
					<span class="input-group-addon" id="basic-addon2">Rp</span>
					<input id="<?php echo$sliderpricelow; ?>" type="text" class="form-control" aria-describedby="basic-addon2">
					</div>

					<div class="input-group">
						<span class="input-group-addon" id="basic-addon2">Rp</span>
						<input id="<?php echo$sliderpricehigh; ?>" type="text" class="form-control" aria-describedby="basic-addon2">
					</div>

				</div>
			</div>
		<?php }else{
		?>
		<div id="<?php echo$pane; ?>" class="menu_list">
			<p class="menu_head plus"><?php echo $dataf->filter; ?></p>
			<div class="menu_body">
				<?php
					foreach($dataf->data as $datac){
						?>
						<div class="checkbox">
							<label>
							<input type="checkbox" value="<?php echo $datac->count; ?>" onclick='filterSidebar("<?php echo $dataf->filterAlias; ?>","<?php echo $datac->valueAlias; ?>")'>
							<?php echo $datac->value; ?>
							</label>
						</div>
					<?php }
				 ?>
			</div>
		</div>
	<?php }}
	 ?> -->

	<div id="<?php echo$pane; ?>" class="menu_list">	
		<p class="menu_head plus">Category
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
		<p class="menu_head plus">
			Harga
		</p>
		<div class="menu_body">
			<div id="<?php echo$sliderprice; ?>"></div>
			<br>
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
		<p class="menu_head plus">Warna
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
		<p class="menu_head plus">RAM
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
		<p class="menu_head plus">Kapasitas Penyimpanan
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
		<p class="menu_head plus">Sistem Operasi
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
		<p class="menu_head plus">Ukuran Layar
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


<!--
	<div id="<?php echo$pane; ?>" class="menu_list">
		<p class="menu_head plus">Brand
		</p>
		<div class="menu_body">

			<div class="checkbox">
				<label>
				<input type="checkbox" value="" id="merk">
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


			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				BLAUPUNKT
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				HISENSE
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				HTC
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				HUAWEI
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				IPHONE
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				MOTOROLA
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				SAMSUNG
				</label>
			</div>
		</div>
	</div>


	<div id="<?php echo$pane; ?>" class="menu_list">
		<p class="menu_head plus">Sistem Operasi
		</p>
		<div class="menu_body">

			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				System OS 1
				</label>
			</div>
			<div class="checkbox">
				<label>
				<input type="checkbox" value="">
				<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
				System OS 2
				</label>
			</div>

		</div>
	</div> -->
<script>
function filterSidebar(filterAlias,valueAlias){
	var dataString = 'filterAlias='+filterAlias+'&valueAlias='+valueAlias;
	$.ajax
		({
		type: "POST",
		url: "<?php echo site_url('product/filterSidebar'); ?>",
		data: dataString,
		success:function(data){
			window.location.reload();
			}

		});



}
</script>

<script>
//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked
$("#<?php echo$pane; ?> p.menu_head").click(function(){
    $(this).toggleClass("plus minus").next("div.menu_body").slideToggle(300);
});
</script>

<script src="<?php echo base_url('assets/sliderprice/jquery-ui.js');?>"></script>
<!-- Jquery UI Range Script -->
<script>
var fruits = ['asus', 'banana', 'grapes', 'mango', 'orange'];

/**
* Array filters items based on search criteria (query)
*/
function filterItems(query) {
return fruits.filter(function(el) {
		return el.toLowerCase().indexOf(query.toLowerCase()) > -1;

})
}

console.log(filterItems('ap')); // ['apple', 'grapes']
console.log(filterItems('an')); // ['banana', 'mango', 'orange']

// test
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
