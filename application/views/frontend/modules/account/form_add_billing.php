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
                                      <input type="hidden" id = "name" name="name" value="<?php echo $user->name; ?>"   />
                                      <div class="form-group">
					  <label><?php echo "Telepon 1:"; ?>*</label>
                                      <input type="text" id = "phone" name="phone"   />
                                      <label><?php echo "Telepon 2:"; ?>*</label>
                                     <input type="text" id = "phone2" name="phone2" />
                                      </div>
					<div class="form-group">
					
                                          <input type="hidden" id="isbillto" name="isbillto" value="N" />
                                          <input type="hidden" id="isshipto" name="isshipto" value="Y" />
                                          <input type="hidden" id="ispayfrom" name="ispayfrom" value="N" />
                                          <input type="hidden" id="isremitto" name="isremitto" value="N" />
                                          <input type="hidden" id="address_name" name="address_name" value="kontrakan" />
                                          <input type="hidden" id="address3" name="address3" value="kelurahan duri kosambi" />
					</div>
					<div class="form-group">
					  <label><?php echo $lang_addres; ?>*</label>
					  <input type="text" id = "address1" name="address1" class="form-control mandatory" />
					  <input type="text" id = "address2" name="address2" class="form-control mandatory" />
					</div>
					<div class="form-group" style="display:none" id="ditric_box">
							<label><?php echo $lang_Keca; ?>*</label>
					  <select name="district_id" id="ditric_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group" style="display:none" id="city_box">
						<label><?php echo $lang_kota; ?>*</label>
					  <select name="city" id="city_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group">
					<label><?php echo $lang_PostCode; ?>*</label>
					  <input type="text" id="postal" name="postal" class="form-control mandatory" />
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
    
    var apiurl = api_base_url +'/aduser/addaddress?token='+token;
//    console.log(apiurl);
    var address_name = $("#address_name").val();
    var address1 = $("#address1").val();
    var address2 = $("#address2").val();
    var address3 = $("#address3").val();
    var district_id = $("#ditric_sel").val();
    //var kota = $("#city").val();
    //var propinsi = $("#province").val();
   // var negara = $("#country").val();
    var postal = $("#postal").val();
    var isbillto = $("#isbillto").val();
    var isshipto = $("#isshipto").val();
    var ispayfrom = $("#ispayfrom").val();
    var isremitto = $("#isremitto").val();
    var phone = $("#phone").val();
    var phone2 = $("#phone2").val();
    var name = $("#name").val();
    //var fl=document.signup;
//    var data = $(this).serialize();
    // return alert(data);die();
    data.address_name = address_name;
    data.address1 = address1;
    data.address2 = address2;
    data.address3 = address3;
    data.address4 = "test add";
    data.postal = postal;
    data.district_id = district_id;
    data.isbillto = isbillto;
    data.isshipto = isshipto;
    data.ispayfrom = ispayfrom;
    data.isremitto = isremitto;
    data.phone = phone;
    data.phone2 = phone2;
    data.name = name;
//    data.kelurahan = 'test';
//     return alert(data);

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
//        $("#addn").val(null);
//        $("#alamat1").val(null);
//        $("#alamat2").val(null);
//        $("#alamat3").val(null);
//        $("#ditric_sel").val(null);
//        $("#city").val(null);
//        $("#province").val(null);
//        $("#country").val(null);
//        $("#zip").val(null);
//        $("#bill").val(null);
//        $("#ship").val(null);
//        $("#pay").val(null);
//        $("#remit").val(null);
//        $("#phone1").val(null);
//        $("#phone2").val(null);
        window.location.replace(base_url+"/account/bukuAlamat");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    //console.log('test'+data);
    
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, timeout: 30000 });

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
