<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.649842298437!2d106.81277131436264!3d-6.17760599552759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f68061654a55%3A0xaafcf85e4760d02a!2sPT.+Myacico+Global+Indonesia!5e0!3m2!1sen!2sid!4v1496997240232" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>

<div class="container">

	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> HUBUNGI KAMI</h3>
		</div>
	  </div>
	</div>

	<div class="row">
		<div class="col-sm-4"> <h4 style="color:red;">PT Myacico Global Indonesia</h4><br/>
		<h5> Jl. Kesehatan No 60 O-P,<br/>
		RT 2, RW 4
		Petojo Selatan, Gambir,<br/> Pusat
		Jakarta Pusat 10160</h5>
		</div>
		<div class="col-sm-8">
			<p>Silakan hubungi kami melalui kolom dibawah ini.</p>


			<form action=''>
			<div class="form-group">
			<label>Nama Anda</label>
			<input type="text" id="nama" name="nama" class="form-control mandatory" />
			</div>
			<div class="form-group">
			<label>Email Anda</label>
			<input type="email" id="email" name="email" class="form-control mandatory" />
			</div>
			<div class="form-group">
			<label>Keperluan</label>
			<select id='keperluan' name='keperluan' class="form-control mandatory">
				<option value=''>-Pilih-</option>
				<option value='Product Issue'>Product Issue</option>
				<option value='Customer Relation'>Customer Relation</option>
				<option value='Payment Issue'>Payment Issue</option>
				<option value='Returns and Exchange'>Returns and Exchange</option>
				<option value='Becoming a Partner'>Becoming a Partner</option>
				<option value='Others'>Others</option>
			</select>
			</div>
			<div class="form-group">
			<label>Pesan</label>
			<textarea class="form-control mandatory" rows="5" id="pesan" name='pesan'></textarea>
			</div>
			<input type="submit" class="btn btn-primary" id="submit_btn" value="Kirim">  <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
			</form>
			<br><br>
		</div>
	</div>

</div>

<script type="text/javascript">

$(document).ready(function() {
	
	$("form").submit(function(e){
		e.preventDefault();
		// do validation
		var form_ok = true;
			$('.mandatory').each(function(){
			if($(this).val()==''){
			$.alert({title:'Alert', content: $(this).prev().text()+ ' tidak boleh kosong!'});
			// onContentReady: function(){$(this).focus();}
			form_ok =false;
			return false;
			}
		});
		if(form_ok==false) return false;

		$('#spinner_img').show();
		$('#submit_btn').val('Loading...').addClass('disabled');		

		/*var nama=$('#nama').val();
		var email=$('#email').val();
		var keperluan=$('#keperluan').val();
		var pesan=$('#pesan').val();*/
		var data = $(this).serialize();
		var url = "<?php echo site_url('customer/prosesContact'); ?>";
		var success = function(html)
		{	
			if(html=='gagal'){
				$.alert({title:'Alert', content: ' Pesan gagal terkirim silakan coba kembali!'});
				$('#spinner_img').hide();
				$('#submit_btn').val('Kirim').removeClass('disabled');
				$('.mandatory').prop('disabled', false);
			}else{
				location.href="<?php echo site_url('customer/messageSent'); ?>";
			}
		}
		
		$.post( url, data, success);
		$('.mandatory').prop('disabled', true);
  });
});
</script>
