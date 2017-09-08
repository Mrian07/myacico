

<div id="map" style="width:1600px;height:400px;background:yellow"></div>

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

<div class="container-fluid">

  <div class="row">
    <div class="col-sm-4"> <h4 style="color:red;">PT Myacico Global Indonesia</h4><br/>
      <h5> Jl. Kesehatan No 60 O-P,<br/>
      RT 2, RW 4
      Petojo Selatan, Gambir,<br/> Pusat
      Jakarta Pusat 10160</h5>
     </div>
<div class="col-sm-4"> <h3 style="color:black;">Subject</h3><br/>

  <div class="input-group-btn">
  <select class="form-control btn btn-default " data-ng-options="t.name for t in vm.types" data-ng-model="vm.object.type">

      <option>Action</option>
      <option>Another action</option>
      <option>Something else here</option>
     </select>
  </div>
  <label for="comment">Pesan</label>

  <textarea class="form-control" rows="5" id="comment"></textarea>
   </div>
   <div class="col-sm-2"> <h3 style="color:black;">Subject</h3>
     <div class="form-group">
       <label for="usr">Name</label>
       <input type="text"  class="form-control" id="usr">
     </div>
     <button type="button" class="btn btn-default">Simpan</button>
   </div>

 </div>
