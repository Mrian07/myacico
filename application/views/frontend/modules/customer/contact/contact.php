



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

<iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.649842298437!2d106.81277131436264!3d-6.17760599552759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f68061654a55%3A0xaafcf85e4760d02a!2sPT.+Myacico+Global+Indonesia!5e0!3m2!1sen!2sid!4v1496997240232" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>


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
