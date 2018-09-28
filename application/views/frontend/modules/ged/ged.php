<style>
  .item-city{
    display:block;
    border-bottom: 1px solid #dddddd;
    margin-top:8px;
    cursor:pointer;
  }

  #load_data{
    display: none;
    overflow:scroll; height:400px;
    border: 1px solid #dddddd;
    padding:5px;
  }

  #btnSrc{
    margin-top: 5px;
    margin-bottom: 5px;
  }

  #formSrcCity{
    display: none;
  }
</style>

<div class="container">



  <div class="b-simulasi">
    <div class="title-simulasi">SIMULASI TARIF PENGIRIMAN GED (Garuda Express Delivery)</div>
    <div class="sub-title-simulasi">Simulasi Tarif Pengiriman ke:</div>
    <p><b>JENIS EKSPEDISI</b></p>
    <table border="0" width="100%">
    <tr>
        <td width="50%">Kota Asal</td>
        <td>
          <input type="text" value="Jakarta" class="form-control mandatory" readonly>
        </td>
      </tr>
      <tr>
        <td width="50%" valign="top">Kota Tujuan</td>
        <td>
        <input type="text" id="city" class="form-control" readonly>
        <button type='button' class='btn btn-warning' id="btnSrc" onClick="srcCity()">Cari Kota Tujuan</button>  
        <input type="text" id="formSrcCity" class="form-control" placeholder="Cari kota tujuan..." onKeyUp="sortCity()">
        <div id="load_data"></div>
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
        <td width="50%">Ongkos Kirim</td>
        <td>
          <input type="hidden" class="form-control" id="ongKirOri">
          <b><span id="tot_ongkir">Rp.0</span></b><img src="<?php echo base_url('images/general/Spinner.gif');?>" class="spinner_num" style="display:none">
        </td>
      </tr>
      <tr>
        <td width="50%">Asuransi</td><td>
          <input type="hidden" class="form-control" id="asuransi">
          <b><span id="tot_asuransi">Rp.0</span></b><img src="<?php echo base_url('images/general/Spinner.gif');?>" class="spinner_num" style="display:none">
        </td>
      </tr>
      <tr>
        <td width="50%">Berat Satuan</td><td>
          <div class="row">
            <div class="col-xs-3">
              <div class='input-group'>
                <input type="number" class="form-control" id="tot_berat" value="<?php echo$berat; ?>">
                <div class='input-group-addon'>Kg</div>
              </div>
            </div>
          </div>  
          <!-- <b><span id="tot_berat">0 Kg</span></b><img src="<?php echo base_url('images/general/Spinner.gif');?>" class="spinner_num" style="display:none">

          <b><span id="tot_berat">0 Kg</span></b><img src="<?php echo base_url('images/general/Spinner.gif');?>" class="spinner_num" style="display:none"> -->
        </td>
      </tr>
      <tr>
        <td width="50%">Total Biaya <span class="small-text-simulasi">(Harga produk + Ongkos kirim + Asuransi)</span></td><td>
          <b><span id="tot_biaya">Rp.0</span></b><img src="<?php echo base_url('images/general/Spinner.gif');?>" class="spinner_num" style="display:none">
        </td>
      </tr>
    </table>

  </div>
</div>
<script>
$(document).ready(function(){

  var base_url = '<?php echo base_url();?>';
  var price = "<?php echo $pricelistOri; ?>";
  $("#price").html("Rp."+formatNumber(price));

  var limit = 50;
  var start = 1;
  var action = 'inactive';
  function load_country_data(limit, start)
  {

    $.ajax({
      url: base_url + "simulasi/loadGed/" + start,
      method:"GET",
      // data:{limit:limit},
      cache:false,
      success:function(data)
      {
        $('#load_data').append(data);
        if(data == '')
        {
        $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
        action = 'active';
        }
        else
        {
        $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
        action = "inactive";
        }
      }
    });
  }

  if(action == 'inactive')
  {
    action = 'active';
    load_country_data(limit, start);
  }
  $(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
    {
      action = 'active';
      start = start + limit;
      setTimeout(function(){
      load_country_data(limit, start);
      }, 1000);
    }
  });

});

function sortCity(){
  var base_url = '<?php echo base_url();?>';
  var key  = $('#formSrcCity').val();


  $.ajax({
      url: base_url + "simulasi/srcGed/" + key,
      method:"GET",
      // data:{limit:limit},
      cache:false,
      success:function(data)
      {
        $('#load_data').html(data);

      }
    });
}

function pilihCity(id){
  $('#city').val(id);
  $('#load_data').css("display", "none");
  $('#formSrcCity').css("display", "none");

  var qty = $("#qty").val();
  var pricelist = $("#pricelist").val()*qty;
  $("#price").html("Rp."+formatNumber(pricelist));
  // $("#priceProduct").val(pricelist);
  $('.spinner_num').show();
  $.ajax({
      url: "https://netcr.myacico.co.id/api/apirequest",
      type:"POST",
      data: JSON.stringify(
        {
          name: id
        }
      ),
      contentType: 'application/json',
      dataType: 'json',
      cache:false,
      success:function(response)
      {


        var sku = "<?php echo $sku; ?>";
        var qty = $('#qty').val(); 

        $.get( api_base_url+"/freight/ro?sku="+ sku +"&quantity="+qty, function(r){
  
          var lastNum = response.list.length-1;  
          var ongKir = parseInt(response.list[lastNum].price1st)*(parseInt(r.totalWeightIncludePacking)/1000)*qty;
          var asuransi = parseInt(r.totalAsuransi);
          var berat = parseInt(r.totalWeightIncludePacking)/1000; 
          var total = parseInt(pricelist) + parseInt(ongKir) + parseInt(asuransi);

          $("#asuransi").val(r.totalAsuransi);   
          $("#ongKirOri").val(response.list[lastNum].price1st);  
          $("#tot_ongkir").html("Rp."+formatNumber(ongKir));
          $("#tot_asuransi").html("Rp."+formatNumber(asuransi));
          $("#tot_berat").val(formatNumber(berat));
          $("#tot_biaya").html("Rp."+formatNumber(total));
          $('.spinner_num').hide();

        }, "json" );

      }
      ,
      error: function () {
          alert("error");
      }
    });

}

function srcCity(){
  $('#load_data').css("display", "block");
  $('#formSrcCity').css("display", "block");
}

$("#tot_berat").on("change",function() {
  var berat = parseInt(this.value);
  var ongKir = $("#ongKirOri").val();
  var asuransi = $("#asuransi").val();
  $('.spinner_num').show();

  $("#qty").val('1'); 
  var totalOngkir =  parseInt($("#ongKirOri").val()) * berat;
  $("#tot_ongkir").html("Rp."+formatNumber(totalOngkir));
  var pricelist = $("#pricelist").val()*1;
  var total = parseInt(pricelist) + parseInt(totalOngkir) + parseInt(asuransi);

  $("#tot_biaya").html("Rp."+formatNumber(total));
  $('.spinner_num').hide();
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
    var ongkir_sel = $("#ongkir_sel").val();
    if(ongkir_sel==""){ $('.spinner_num').hide(); return; }

    
    var sku = "<?php echo $sku; ?>";

    $.get( api_base_url+"/freight/ro?sku="+ sku +"&quantity="+qty, function(r){

      var ongKir = $("#ongKirOri").val()*(parseInt(r.totalWeightIncludePacking)/1000)*qty;;
      var asuransi = parseInt(r.totalAsuransi);
      var berat = parseInt(r.totalWeightIncludePacking)/1000; 
      var total = parseInt(pricelist) + parseInt(ongKir) + parseInt(asuransi);

      $("#asuransi").val(r.totalAsuransi);   
      $("#tot_ongkir").html("Rp."+formatNumber(ongKir));
      $("#tot_berat").val(formatNumber(berat));
      $("#tot_asuransi").html("Rp."+formatNumber(asuransi));
      $("#tot_biaya").html("Rp."+formatNumber(total));
      $('.spinner_num').hide();

    }, "json" );

  }
});

function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
}

</script>
