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
        <td width="50%">Kota</td><td><img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_city" style="display:none">
          <select name="city" id="city_sel" class="form-control mandatory">
            <option value="">-Pilih-</option>
          </select>
        </td>
      </tr>
      <tr>
        <td width="50%">Kecamatan</td><td><img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_kec" style="display:none">
          <select name="district_id" id="district_id" class="form-control mandatory">
            <option value="">-Pilih-</option>
          </select>
        </td>
      </tr>
      <tr>
        <td width="50%">Jasa Pengiriman</td><td><img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_ongkir" style="display:none">
          <select name="ongkir" id="ongkir_sel" class="form-control mandatory">
            <option value="">-Pilih-</option>
          </select>
        </td>
      </tr>
    </table>

    <div class="sub-title-simulasi">Simulasi Harga Pengiriman</div>
    <table border="0" width="100%">
      <tr>
        <td width="50%">Kuantiti Produk <span class="small-text-simulasi">(Kuantiti produk yang dibeli)</span></td>
        <td>
          <div class="row">
            <div class="col-xs-2">
              <input type="number" class="form-control" id="qty" value="1">
              <input type="hidden" class="form-control" id="pricelist" value="<?php echo $pricelistOri; ?>">
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td width="50%">Harga Produk <span class="small-text-simulasi">(Harga satuan produk yang dibeli)</span></td>
          <td><b><span id="price">Rp.0</span></b>
        </td>
      </tr>
      <tr>
        <td width="50%">Ongkos Kirim</td><td>
          <b><span id="tot_ongkir">Rp.0</span></b><img src="<?php echo base_url('images/general/Spinner.gif');?>" class="spinner_num" style="display:none">
        </td>
      </tr>
      <tr>
        <td width="50%">Asuransi</td><td>
          <b><span id="tot_asuransi">Rp.0</span></b><img src="<?php echo base_url('images/general/Spinner.gif');?>" class="spinner_num" style="display:none">
        </td>
      </tr>
      <tr>
        <td width="50%">Total Biaya <span class="small-text-simulasi">(Harga produk + Ongkos kirim + Asuransi)</span></td><td>
          <b><span id="tot_biaya">Rp.0</span></b><img src="<?php echo base_url('images/general/Spinner.gif');?>" class="spinner_num" style="display:none">
        </td>
      </tr>
    </table>
<!--
    <div class="title-simulasi">SYARAT & KETENTUAN</div>
    <p>1. Perhitungan biaya pengiriman berdasarkan berat x tarif per kilogram atau berdasarkan volume.<br>
    2. Untuk berat barang 1 (satu) koli (paket) = 75 kg atau di atasnya dikenakan surcharge 50%.<br>
    3. Tarif bisa berubah setiap saat tanpa pemberitahuan sebelumnya.<br>
    4. Resiko yang terjadi dalam perjalanan maupun keterlambatan pengiriman bukan menjadi tanggung jawab kami. Semua barang yang dikirim dengan JNE, TIKI, atau NCS akan diasuransikan untuk mengantisipasi kehilangan dan kerusakan dalam perjalanan. Proses klaim akan melibatkan pihak pelanggan dan kami untuk pembuktian.<br>
    5. Harga tarif ini hanya merupakan referensi. Segala perubahan dan beban tambahan yang terjadi sepenuhnya akan dibebankan pada pembeli.</p> -->

  </div>
</div>
<script>

$(document).ready(function() {
  var negara = "209";
  var price = "<?php echo $pricelistOri; ?>";
  $("#price").html("Rp."+formatNumber(price));
  $.get( api_base_url+"/cregion/getlistcregionbyidccountry/"+negara, function(r){
    r.forEach(function(o){
      $("#region_sel").append("<option value='"+o.c_region_id+"'>"+o.name+"</option>");
    });
    $("#region_sel").prop('disabled', false).change(get_city);
  }, "json" );

});

$("#qty").on("change",function() {
  var qty = this.value;
  var pricelist = $("#pricelist").val()*qty;
  $("#price").html("Rp."+formatNumber(pricelist));
  $('.spinner_num').show();

  if(qty<1){
    $.alert({
      title: 'Alert!',
      content: 'Masukan kuantiti produk dengan benar',
    });
    $("#qty").val("");
    $("#tot_asuransi").html("Rp.0");
    $("#tot_ongkir").html("Rp.0");
    $("#tot_biaya").html("Rp.0");
    $('.spinner_num').hide();

  }else{

    var sku = "<?php echo$sku; ?>";
    var ongkir_sel = $("#ongkir_sel").val();
    if(ongkir_sel==""){ $('.spinner_num').hide(); return; }
    $.get( api_base_url+"/freight/ro?destination="+$("#district_id").val()+"&sku="+sku+"&quantity="+qty+"&courier="+$("#ongkir_sel").val(), function(r){

      // $("#tot_ongkir").html("Rp."+formatNumber(r.courier[0].serviceCourier.amount));
      // $("#tot_biaya").html("Rp."+formatNumber(r.totalPrice));

      var ongKir = parseInt(r.courier[0].serviceCourier.amount);
      var asuransi = parseInt(r.product.asuransi)*qty;
      var total = parseInt(pricelist) + parseInt(ongKir) + parseInt(asuransi);

      $("#tot_ongkir").html("Rp."+formatNumber(ongKir));
      $("#tot_asuransi").html("Rp."+formatNumber(asuransi));
      // $("#tot_biaya").html("Rp."+formatNumber(r.totalPrice+r.totalAsuransi+r.courier[0].serviceCourier.amount));
      $("#tot_biaya").html("Rp."+formatNumber(total));
      $('.spinner_num').hide();

    }, "json" );
  }
});

function get_city(){
  $('#spinner_city').show();
  $("#tot_asuransi").html("Rp.0");
  $("#tot_ongkir").html("Rp.0");
  $("#tot_biaya").html("Rp.0");
  $("#city_box").slideDown();
  $("#city_sel").prop('disabled', true).html('<option value="">-Pilih-</option>').unbind("change", get_distric);
  $.get( api_base_url+"/ccity/getlistccitybyidregion/"+$("#region_sel").val(), function(r){
    r.forEach(function(o){
      $("#city_sel").append("<option value='"+o.c_city_id+"'>"+o.name+"</option>");
    });
    $('#spinner_city').hide();
    $("#city_sel").prop('disabled', false).change(get_distric);
  }, "json" );
}

function get_distric(){
    $('#spinner_kec').show();
    $("#ditric_box").slideDown();
    $("#district_id").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_courier);
    $.get(api_base_url+"/cdistrict/getlistdistrictbycityid/"+$("#city_sel").val(), function(r){
      r.forEach(function(o){
        $("#district_id").append("<option value='"+o.rajaongkirId+"'>"+o.name+"</option>");
      });
      $('#spinner_kec').hide();
      $("#district_id").prop('disabled', false).change(get_courier);;
    }, "json" );
  }

function get_courier(){
  $('#spinner_ongkir').show();
  $("#tot_asuransi").html("Rp.0");
  $("#tot_ongkir").html("Rp.0");
  $("#tot_biaya").html("Rp.0");
  var sku = "<?php echo$sku; ?>";
  $("#ongkir_sel").prop('disabled', true).html('<option value="">-Pilih-</option>');
  $.get( api_base_url+"/freight/ro?destination="+$("#district_id").val()+"&sku="+sku, function(r){
    r.courier.forEach(function(o){
      if(o.shipperName){
        $("#ongkir_sel").append("<option value='"+o.code+"'>"+o.shipperName+"</option>");
      }else{
        alert('Jasa Pengiriman Tidak Ada');
      }

    });
    $('#spinner_ongkir').hide();
    $("#ongkir_sel").prop('disabled', false).change(get_ongkir);
  }, "json" );
}

function get_ongkir(){

  var qty = $("#qty").val();
  var pricelist = $("#pricelist").val()*qty;
  $("#price").html("Rp."+formatNumber(pricelist));

  $("#tot_asuransi").html("Rp.0");
  $("#tot_ongkir").html("Rp.0");
  $("#tot_biaya").html("Rp.0");
  $('.spinner_num').show();
  var sku = "<?php echo$sku; ?>";
  var qty = $("#qty").val();
  var ongkir_sel = $("#ongkir_sel").val();
  if(ongkir_sel==""){ $('.spinner_num').hide(); }

  $.get( api_base_url+"/freight/ro?destination="+$("#district_id").val()+"&sku="+sku+"&quantity="+qty+"&courier="+$("#ongkir_sel").val(), function(r){
    var ongKir = parseInt(r.courier[0].serviceCourier.amount);
    var asuransi = parseInt(r.product.asuransi)*qty;
    var total = parseInt(pricelist) + parseInt(ongKir) + parseInt(asuransi);

    // var total = parseInt(pricelist) + parseInt(r.courier[0].serviceCourier.amount) + parseInt(r.product.asuransi);

    $("#tot_ongkir").html("Rp."+formatNumber(ongKir));
    $("#tot_asuransi").html("Rp."+formatNumber(asuransi));
    // $("#tot_biaya").html("Rp."+formatNumber(r.totalPrice+r.totalAsuransi+r.courier[0].serviceCourier.amount));
    $("#tot_biaya").html("Rp."+formatNumber(total));
    $('.spinner_num').hide();
  }, "json" );

}

function get_village(){
  $("#tot_asuransi").html("Rp.0");
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
