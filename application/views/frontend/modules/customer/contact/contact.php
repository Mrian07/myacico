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


	<form>
		<div class="form-group">
			<label for="pwd">Nama:</label>
			<input type="password" class="form-control" id="nama" name='nama'>
		</div>
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="password" class="form-control" id="email" name='email'>
		</div>
		<div class="form-group">
			<label for="pwd">Judul Pesan:</label>
			<input type="password" class="form-control" id="judul" name='judul'>
		</div>
		<div class="form-group">
			<label for="pwd">Pesan:</label>
			<textarea class="form-control" rows="5" id="pesan" name='pesan'></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Kirim</button>
	</form>
	<br><br>

   </div>

 </div>

</div>
