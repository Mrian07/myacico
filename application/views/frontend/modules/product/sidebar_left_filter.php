	<div id="sidebar-animation-unready">
		<div class="menu_list_unready"></div>
		<div class="menu_list_unready"></div>
		<div class="menu_list_unready"></div>
		<div class="menu_list_unready"></div>
		<div class="menu_list_unready"></div>
	</div>

<script>
function filterSidebar(filterAlias,valueAlias){
	var dataString = 'filterAlias='+filterAlias+'&valueAlias='+valueAlias;
	$.ajax({
		type: "POST",
		url: "<?php echo site_url('product/filterSidebar'); ?>",
		data: dataString,
		success:function(data){
			window.location.reload();
		}
	});
}
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