<div class="container">
  <div class="b-simulasi">
    <div class="title-simulasi">SIMULASI TARIF PENGIRIMAN</div>
    <div class="sub-title-simulasi">Simulasi Tarif Pengiriman ke:</div>
    <p><b>JENIS EKSPEDISI</b></p>
    <table border="0" width="100%">
      <tr>
        <td width="50%">Propinsi</td>
        <td>
          <select name="province" id="region_sel" class="form-control mandatory">
            <option value="">-Pilih-</option>
          </select>
        </td>
      </tr>
      <tr>  
        <td width="50%">Kota</td><td>
          <select name="city" id="city_sel" class="form-control mandatory">
            <option value="">-Pilih-</option>
          </select>
        </td>
      </tr>
      <tr>  
        <td width="50%">Jasa Pengiriman</td><td>
          <select name="ongkir" id="ongkir_sel" class="form-control mandatory">
            <option value="">-Pilih-</option>
          </select>
          <!-- <select class="form-control">
            <option>-Pilih-</option>
          </select> -->
        </td>
      </tr>
    </table>

    <div class="sub-title-simulasi">Simulasi Harga Pengiriman</div>
    <table border="0" width="100%">
      <tr>
        <td width="50%">Harga Produk <span class="small-text-simulasi">(Harga satuan produk yang dibeli)</span></td>
        <td>
          <div class="form-group row">
            <div class="col-xs-6">
              <div class="input-group">
                <span class="input-group-addon">Rp.</span>
                <input type="text" class="form-control" name="pricelist" readonly value="<?php echo $pricelist; ?>">
              </div>
            </div>
          </div>
        </td>
      </tr>
      <tr>  
        <td width="50%">Kuantiti Produk <span class="small-text-simulasi">(Kuantiti produk yang dibeli)</span></td>
        <td>
          <div class="row">
            <div class="col-xs-2">
              <input type="text" class="form-control" id="qty" value="1">
            </div>
          </div>
        </td>
      </tr><tr>    
        <td width="50%">Ongkos Kirim <span class="small-text-simulasi">(Terima asuransi)</span></td><td>
          <b><span id="tot_ongkir">Rp.0</span></b>
        </td>
      </tr><tr>  
        <td width="50%">Total Biaya <span class="small-text-simulasi">(Total harga produk + ongkos kirim)</span></td><td>
          <b><span id="tot_biaya">Rp.0</span></b>
        </td>
      </tr>
    </table>

    <div class="title-simulasi">SYARAT & KETENTUAN</div>
    <p>1.Perhitungan biaya pengiriman berdasarkan berat x tarif per kilogram atau berdasarkan volume.</p>
    <p>2.Untuk berat barang 1 (satu) koli (paket) = 75 kg atau di atasnya dikenakan surcharge 50%.</p>
    <p>3.Tarif bisa berubah setiap saat tanpa pemberitahuan sebelumnya.</p>
    <p>4.Resiko yang terjadi dalam perjalanan maupun keterlambatan pengiriman bukan menjadi tanggung jawab kami. Semua barang yang dikirim dengan JNE, TIKI, atau NCS akan diasuransikan untuk mengantisipasi kehilangan dan kerusakan dalam perjalanan. Proses klaim akan melibatkan pihak pelanggan dan kami untuk pembuktian.</p>
    <p>5.Harga tarif ini hanya merupakan referensi. Segala perubahan dan beban tambahan yang terjadi sepenuhnya akan dibebankan pada pembeli.</p>

  </div>
</div>
<script>

$(document).ready(function() {
  // $("#tot_ongkir").html("Rp.0");
  // $("#tot_biaya").html("Rp.0");
  var negara = "209";
  $.get( api_base_url+"/cregion/getlistcregionbyidccountry/"+negara, function(r){
    r.forEach(function(o){
      $("#region_sel").append("<option value='"+o.c_region_id+"'>"+o.name+"</option>");
    });
    $("#region_sel").prop('disabled', false).change(get_city);
  }, "json" );

});

$("#qty").on("change",function() {
    var qty = this.value;
    var sku = "<?php echo$sku; ?>";
    $.get( api_base_url+"/freight/ro?destination="+$("#city_sel").val()+"&sku="+sku+"&quantity="+qty+"&courier="+$("#ongkir_sel").val(), function(r){

      $("#tot_ongkir").html("Rp."+formatNumber(r.courier[0].serviceCourier.amount));
      $("#tot_biaya").html("Rp."+formatNumber(r.totalPrice));

    }, "json" );
});

function get_city(){
  $("#tot_ongkir").html("Rp.0");
  $("#tot_biaya").html("Rp.0");
  $("#city_box").slideDown();
  $("#city_sel").prop('disabled', true).html('<option value="">-Pilih-</option>').unbind("change", get_courier);
  $.get( api_base_url+"/ccity/getlistccitybyidregion/"+$("#region_sel").val(), function(r){
    r.forEach(function(o){
      $("#city_sel").append("<option value='"+o.rajaongkirId+"'>"+o.name+"</option>");
    });
    $("#city_sel").prop('disabled', false).change(get_courier);
  }, "json" );
}

function get_courier(){
  $("#tot_ongkir").html("Rp.0");
  $("#tot_biaya").html("Rp.0");
  var sku = "<?php echo$sku; ?>";
  $("#ongkir_sel").prop('disabled', true).html('<option value="">-Pilih-</option>');
  $.get( api_base_url+"/freight/ro?destination="+$("#city_sel").val()+"&sku="+sku, function(r){
    r.courier.forEach(function(o){
      $("#ongkir_sel").append("<option value='"+o.code+"'>"+o.shipperName+"</option>");
    });
    $("#ongkir_sel").prop('disabled', false).change(get_ongkir);
  }, "json" );
}

function get_ongkir(){
  $("#tot_ongkir").html("Rp.0");
  $("#tot_biaya").html("Rp.0");
  var sku = "<?php echo$sku; ?>";
  var qty = $("#qty").val();
  $.get( api_base_url+"/freight/ro?destination="+$("#city_sel").val()+"&sku="+sku+"&quantity="+qty+"&courier="+$("#ongkir_sel").val(), function(r){

    $("#tot_ongkir").html("Rp."+formatNumber(r.courier[0].serviceCourier.amount));
    $("#tot_biaya").html("Rp."+formatNumber(r.totalPrice));

  }, "json" );
}

function get_village(){
  $("#tot_ongkir").html("Rp.0");
  $("#tot_biaya").html("Rp.0");

  $("#village_box").slideDown();
  $("#village_id").prop('disabled', true).html('<option value="">--pilih--</option>');
  $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+$("#district_id").val(), function(r){
    r.forEach(function(o){
      $("#village_id").append("<option value='"+o.c_village_id+"'>"+o.name+"</option>");
    });
      $("#village_id").prop('disabled', false).change(get_postal);
  }, "json" );
}

function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
}
</script>
