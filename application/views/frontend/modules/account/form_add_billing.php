<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> DATA BILLING</h3>
		</div>
	  </div>
	</div> 
	
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/informasiAkun', '<i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali');?></p>
			<p>Silakan lengkapi data billing Anda dibawah ini.</p>
			<div class="panel panel-default">
				<div class="panel-body">	
				  <form name="signup" method="post">
					<div class="form-group">
					
                                          <input type="hidden" id="bill" name="bill" value="Y" />
                                          <input type="hidden" id="ship" name="ship" value="Y" />
                                          <input type="hidden" id="pay" name="pay" value="Y" />
                                          <input type="hidden" id="remit" name="remit" value="N" />
                                          <input type="hidden" id="addn" name="addn" value="kontrakan" />
                                          <input type="hidden" id="alamat3" name="alamat3" value="kelurahan duri kosambi" />
					</div>
					<div class="form-group">
					  <label><?php echo $lang_addres; ?>*</label>
					  <input type="text" id = "alamat1" name="alamat1" class="form-control mandatory" />
					  <input type="text" id = "alamat2" name="alamat2" class="form-control mandatory" />
					</div>
					<div class="form-group" style="display:none" id="ditric_box">
							<label><?php echo $lang_Keca; ?>*</label>
					  <select name="kecamatan" id="ditric_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group" style="display:none" id="city_box">
						<label><?php echo $lang_kota; ?>*</label>
					  <select name="city" id="city_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group">
					<label><?php echo $lang_PostCode; ?>*</label>
					  <input type="text" name="zip" class="form-control mandatory" />
					</div>
					<div class="form-group" style="display: none;" id="region_box">
					<label><?php echo $lang_Provience; ?>*</label>
					  <select name="province" id="region_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group">
					<label><?php echo $lang_Country; ?>*</label>
					  <select name="country" id="country_sel" class="form-control mandatory" disabled >
						<option value="">--pilih--</option>
					  </select>
					</div>
					
					
					<div class="clearfix"></div>
						<input type="submit" id="submit_btn" class="btn btn-primary" value="Update"> <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
				  </form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$.ajaxSetup({
  error: function(){
    alert('service not available, please try again later');
  },
  timeout: 10000/*,
  contentType: "application/json; charset=UTF-8"*/
});

function get_distric(){
  $("#ditric_box").slideDown();
  $("#ditric_sel").prop('disabled', true).html('<option value="">--pilih--</option>');
  $.get(api_base_url+"/cdistrict/getlistdistrictbycityid/"+$("#city_sel").val(), function(r){
    r.forEach(function(o){
      $("#ditric_sel").append("<option value='"+o.c_district_id+"'>"+o.name+"</option>");
    });
    $("#ditric_sel").prop('disabled', false);
  }, "json" );
}

function get_city(){
  $("#city_box").slideDown();
  $("#city_sel").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_distric);
  $.get( api_base_url+"/ccity/getlistccitybyidregion/"+$("#region_sel").val(), function(r){
    r.forEach(function(o){
      $("#city_sel").append("<option value='"+o.c_city_id+"'>"+o.name+"</option>");
    });
    $("#city_sel").prop('disabled', false).change(get_distric);
  }, "json" );
}

function get_region(){
  $("#region_box").slideDown();
  $("#region_sel").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_city);
  $.get( api_base_url+"/cregion/getlistcregionbyidccountry/"+$("#country_sel").val(), function(r){
    r.forEach(function(o){
      $("#region_sel").append("<option value='"+o.c_region_id+"'>"+o.name+"</option>");
    });
    $("#region_sel").prop('disabled', false).change(get_city);
  }, "json" );
}
var data = {};
$(document).ready(function() {
  $("form").submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    var token = document.cookie.split('x-auth=')[1].split(';').shift();
    var apiurl = api_base_url + '/aduser/updateaddress?token='+token;
    console.log(apiurl);die();
    var alamat = $("#addn").val();
    var alamat1 = $("#alamat1").val();
    var alamat2 = $("#alamat2").val();
    var alamat3 = $("#alamat3").val();
    var kecamatan = $("#ditric_sel").val();
    var kota = $("#city").val();
    var propinsi = $("#province").val();
    var negara = $("#country").val();
    var kode_pos = $("#zip").val();
    var bill = $("#bill").val();
    var ship = $("#ship").val();
    var pay = $("#pay").val();
    var remit = $("#remit").val();
   
    //var fl=document.signup;
//    var data = $(this).serialize();
//     return alert(data);die();
    data.addressname = alamat;
    data.address1 = alamat1;
    data.address2 = alamat2;
    data.address3 = alamat3;
    data.postal = kode_pos;
    data.c_district_id = kecamatan;
    data.isbillto = bill;
    data.isshipto = ship;
    data.ispayfrom = pay;
    data.isremitto = remit;
    // return alert(data);

    // success handling

    var success = function(r){
         $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
         $.alert({
     title: 'Alert!',
     content: 'Alamat Baru Berhasil di tambahkan',
    });
//      alert(r.message);
      console.log('OK:', r.status);
        $("#addn").val(null);
        $("#alamat1").val(null);
        $("#alamat2").val(null);
        $("#alamat3").val(null);
        $("#ditric_sel").val(null);
        $("#city").val(null);
        $("#province").val(null);
        $("#country").val(null);
        $("#zip").val(null);
        $("#bill").val(null);
        $("#ship").val(null);
        $("#pay").val(null);
        $("#remit").val(null);
        window.location.replace(base_url+"/account/bukuAlamat");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, error: error, timeout: 30000 });

    // do validation
    var form_ok = true;
    $('.mandatory').each(function(){
      if($(this).val()==''){
        $.alert({title:'Alert', content: $(this).prev().text().slice(0,-1)+ ' is required!'});
        // onContentReady: function(){$(this).focus();}
        form_ok =false;
        return false;
      }

    });
    

    if(form_ok==false) return false;
    if(fl.password.value!=$('#password2').val())alert('password not match!!!');

    else {
      $('#spinner_img').show();
      $('#submit_btn').val('loading...').addClass('disabled');
      $.post( apiurl, data, success, "json" );
    }
  });

  $.get(api_base_url+"/ccountry/getlistccountry", function(r){
    console.log(r);
    r.forEach(function(o){
      $("#country_sel").append("<option value='"+o.c_country_id+"'>"+o.name+"</option>");
    });
    $("#country_sel").prop('disabled', false).change(get_region);
  }, "json" );
});
</script>
