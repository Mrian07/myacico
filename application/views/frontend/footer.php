

<div class='btn-top'>
	<a href="#" id='btnTop'>
		<img src='<?php echo base_url('images/general/btn-top.png');?>' border='0' /></a>
</div>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h3><span>EMAIL NEWSLETTER</span></h3>
				Sign up for MyAcico news & Special Offers
				
				<div class="input-group">   
					<input type="text" class="my-sub-field" name="x" placeholder="Search term...">
					<span class="input-group-btn">
						<button class="btn btn-default my-sub-button" type="button">SUBSCRIBE</button>
					</span>
				</div>
				
			</div>
			<div class="col-sm-3">
				<h3><span>DELIVERY</span></h3>
				2x24 hours delivery on weekdays for all areas of JABODETABEK and free delivery to all area in Indonesia.
			</div>
			<div class="col-sm-3">
				<h3><span>RETURN</span></h3>
				Damage to goods caused by errors from the manufacturer of goods, can be exchanged within 7 working days or money back within 2x24 hours.
			</div>
			<div class="col-sm-3">
				<h3><span>EMAIL NEWSLETTER</span></h3>
				All items in Myacico.com are guaranteed for 7 days, counted upon receipt of the goods.
			</div>
		</div>
		<div class="row my-foot-box">
			<div class="col-sm-3">
				<h3><span>COMPANY</span></h3>
				Tentang Kami Syarat & Ketentuan Kebijakan Privasi Kebijakan Hak Cipta.
			</div>
			<div class="col-sm-3">
				<h3><span>BANTUAN</span></h3>
				FAQ Pengembalian & Pembatalan Garansi & Jaminan Hubungi Kami.
			</div>
			<div class="col-sm-3">
				<h3><span>IKUTI KAMI</span></h3>
				
				<div class='sos'>
				<ul>
				  <li><a class="active" href="#home"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				  <li><a href="#news"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				  <li><a href="#contact"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				  <li><a href="#about"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
				</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<h3><span>PENGIRIMAN</span></h3>
				<img src='<?php echo base_url('images/general/logo_kurir_kecil.png');?>' border='0'/>
			</div>
		</div>	
		<div class="row my-foot-box">
			<div class="col-sm-3">
				<h3><span>PEMBAYARAN</span></h3>

			</div>	
		</div>		
		
	</div>
	<div class='cpyright'>
		Copyright &copy; 2017 PT. MyAcico Global Indonesia. All Rights Reserved.
	</div>
</div>
		
</body>

<!-- START JAVASCRIPT -->
<!-- Placed at the end of the document so the pages load faster -->
<!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
<script src="<?php echo base_url('assets/nav/js/bootstrap.min.js');?>"></script>
<!-- Bootsnavs -->
<script src="<?php echo base_url('assets/nav/js/bootsnav.js');?>"></script>

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
			//alert('berhasil ganti');
			 location.reload();
		}
		
		$.post( url, data, success);
	}
</script>
		
</html>