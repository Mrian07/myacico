<div class="footer">
	Hak cipta &copy; oleh MyACICO.com
</div>

</body>
<script src="<?php echo base_url('assets_adminlte/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>
<script>
$(document).ready(function() {
	$('#alertSubmit').show('slow').delay(5000).hide('slow');
		
});	
</script>  

<script>
	$(document).ready(function(e){
		$('.search-panel .dropdown-menu').find('a').click(function(e) {
			e.preventDefault();
			var param = $(this).attr("href").replace("#","");
			var concept = $(this).text();
			$('.search-panel span#search_concept').text(concept);
			$('.input-group #search_param').val(param);
		});
	});
</script>
		
</html>