

</body>

<!-- START JAVASCRIPT -->
<!-- Placed at the end of the document so the pages load faster -->
<!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->


<!-- bootstrap.min.js bentrok dengan drowpdown serach di header, sementara ditutup dulu->
<!--<script src="<?php echo base_url('assets/nav/js/bootstrap.min.js');?>"></script>-->
<!-- Bootsnavs -->

<!--
<script src="<?php //echo base_url('assets_adminlte/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>-->
<script>
$("#btnTop").click(function() {
     $("html, body").animate({ scrollTop: 0 }, "slow");
     return false;
  });

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

<script>
	function langFunction($data){

		var lang = $data;
		var data = 'lang='+ lang;
		var url = "<?php echo site_url('home/switchLang'); ?>";
		var success = function(html)
		{
			 location.reload();
		}

		$.post( url, data, success);
	}
</script>

<script>
//Buat ngecek jumlah keranjang
$(document).ready(function() {

	totalCart();

});
</script>
</html>
