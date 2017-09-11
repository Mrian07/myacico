<div id="map" style="width:1600px;height:400px;background:yellow"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>


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
