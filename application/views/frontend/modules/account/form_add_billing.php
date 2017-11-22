
<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> TAMBAH BUKU ALAMAT
	</div>
</div>

<div class="container">

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/informasiAkun', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Kembali', array('class'=>'btn-back'));?></p>
			<p>Silakan lengkapi data billing Anda dibawah ini.</p>

			<div class="panel panel-default">
				<div class="panel-body">
				  <form name="test1" method="post">
				  <input type="hidden" id="isbillto" name="isbillto" value="N" />
				  <input type="hidden" id="isshipto" name="isshipto" value="Y" />
				  <input type="hidden" id="ispayfrom" name="ispayfrom" value="N" />
				  <input type="hidden" id="isremitto" name="isremitto" value="N" />
          <input type="hidden" id = "name" name="name"  value="<?php echo $user->name;?>" />

					<div class="form-group">
					  <label>Disimpan sebagai alamat (contoh: alamat rumah, alamat kantor dll.)*</label>
					  <input type="text" id="address_name" name="address_name" class="form-control mandatory"/>
					</div>
					<div class="form-group">
					  <label><?php echo $lang_addres; ?>*</label>
					  <!--<input type="text" id = "address1"name="address1" class="form-control mandatory"/>-->
					<textarea rows="4" cols="50" id="address1" name="address1" class="form-control mandatory"></textarea>
 
                                          <input type="text" id = "address2" name="address2" class="form-control mandatory"/>
					</div>
                                        <div class="form-group">
					<label><?php echo $lang_Country; ?>*</label>
					  <select name="country" id="country_sel" class="form-control mandatory">
						<option value="209" selected="selected">Indonesia</option>
					  </select>
					</div>
                                      <div class="form-group" id="region_box">
					<label><?php echo $lang_Provience; ?>*</label>
                                        <select name="province" id="region_sel" class="form-control mandatory">
                                            <option value="">--Pilih--</option>
                                        </select>
                                      </div>
                                        <div class="form-group" style="display:none" id="city_box">
						<label><?php echo $lang_kota; ?>*</label>
					  <select name="city" id="city_sel" class="form-control mandatory"></select>
					</div>
					<div class="form-group" style="display:none" id="ditric_box">
							<label><?php echo $lang_Keca; ?>*</label>
					  <select name="district_id" id="district_id" class="form-control mandatory"></select>
					</div>
                                        <div class="form-group" style="display:none" id="village_box">
							<label><?php echo "Kelurahan"; ?>*</label>
					  <select name="village_id" id="village_id" class="form-control mandatory"></select>
					</div>

					<div class="form-group">
				 <label><?php echo $lang_PostCode; ?>*</label>
					 <select type="text" name="postal" id="postal" class="form-control mandatory" ></select>
				 </div>
					<div class="form-group">
					<label>Handphone*</label>
						<input type="text" id = "phone"name="phone" class="form-control mandatory" />
					</div>
					<div class="form-group">
					<label>Telepon</label>
						<input type="text" id = "phone2"name="phone2" class="form-control"/>
					</div>

					<div class="clearfix"></div>
						<input type="submit" id="submit_btn" class="btn btn-primary" value="Tambah"> <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
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

$('#village_id').change(function () {
        var end = this.value;
      $('#submit_btn').removeAttr('disabled');
    });

function get_village(){
  $("#village_box").slideDown();
  $("#village_id").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_postal);
  $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+$("#district_id").val(), function(r){
    r.forEach(function(o){
      $("#village_id").append("<option value='"+o.c_village_id+"'>"+o.name+"</option>");
    });
       $("#village_id").prop('disabled', false).change(get_postal);
  }, "json" );
}

function get_distric(){
  $("#ditric_box").slideDown();
  $("#district_id").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_village);
  $.get(api_base_url+"/cdistrict/getlistdistrictbycityid/"+$("#city_sel").val(), function(r){
    r.forEach(function(o){
      $("#district_id").append("<option value='"+o.c_district_id+"'>"+o.name+"</option>");
    });
    $("#district_id").prop('disabled', false).change(get_village);
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
        var negara = $('#country_sel').val();

      $("#region_sel").prop('disabled', true).unbind("change", get_city);
    
      $.get( api_base_url+"/cregion/getlistcregionbyidccountry/"+negara, function(r){
        r.forEach(function(o){
          $("#region_sel").append("<option value='"+o.c_region_id+"'>"+o.name+"</option>");
        });
        $("#region_sel").prop('disabled', false).change(get_city);
      }, "json" );
    }
$.get(api_base_url+"/ccountry/getlistccountry", function(r){
	    console.log(r);
	//    $("#country_sel").prop('disabled', true).html('<option value="209" selected="selected">Indonesia</option>');
	//    $("#country_sel").prop('disabled', true).html('<option value="">Indonesia</option>');
	//    $("#country_sel").prop('disabled', true).on("load", get_region);
	    r.forEach(function(o){
	      $("#country_sel").append("<option value='"+o.c_country_id+"'>"+o.name+"</option>");
	    });
	    $("#country_sel").prop('disabled', true).change(get_region(this));
	  }, "json" );

       function get_postal(){
      $("#postal_box").slideDown();
      //$("#postal").prop('disabled', true).html('<option value="">--pilih--</option>');
      $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+$("#district_id").val(), function(r){
       // r.forEach(function(o){
       //   $("#postal").append("<option value='"+o.postal+"'>"+o.postal+"</option>");
      $("#postal").append(" <input type='text' id = 'kdpos'  class='form-control mandatory' value='"+r[0]['postal']+"'  disabled/>");

               // console.log('23',o.postal);
       // });
        $("#postal").prop('disabled', false);
      }, "json" );
    }

var data = {};

$(document).ready(function() {
	var token = document.cookie.split('x-auth=')[1].split(';').shift();

    $("form").submit(function(e){
    e.preventDefault();
   // var data = $(this).serialize();
    var token = document.cookie.split('x-auth=')[1].split(';').shift();
	  var apiurl = api_base_url +'/aduser/addaddress?token='+token;

        var name =  $("#name").val();
        var phone = $("#phone").val();
        var phone2 = $("#phone2").val();
        var address_name = $("#address_name").val();
        var address1 = $("#address1").val();
        var address2 = $("#address2").val();
        var address3 = $("#address3").val();
        var address4 = $("#address4").val();
        var postal = $("#postal").val();
        var district_id = $("#district_id").val();
        var village_id = $("#village_id").val();
        var isbillto = $("#isbillto").val();
        var isshipto = $("#isshipto").val();
        var ispayfrom = $("#ispayfrom").val();
        var isremitto = $("#isremitto").val();

    //var fl=document.signup;
//    var data = $(this).serialize();
//     return alert(data);die();
data.name = name;
data.phone = phone;
data.phone2 = phone2;
data.address_name = address_name;
data.address1 = address1;
data.address2 = address2;
data.address3 = "address3";
data.address4 = "address4";
data.postal = postal;
data.district_id = district_id;
data.village_id = village_id;
data.isbillto = 'Y';
data.isshipto = 'Y';
data.ispayfrom = 'Y';
data.isremitto = 'Y';
		// data.name = name;
		// data.phone = phone;
		// data.phone2 = phone2;
    // data.address_name = address_name;
    // data.address1 = address1;
    // data.address2 = address2;
		//     data.address3 = address3;
		// data.address4 = address4;
    // data.postal = postal;
    // data.district_id = district_id;
    // data.isbillto = isbillto;
    // data.isshipto = isshipto;
    // data.ispayfrom = ispayfrom;
    // data.isremitto = isremitto;

    //return alert(data.phone);die();
     var success = function(r){
         $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
//         $.alert({
//     title: 'Alert!',
//     content: 'Alamat Baru Berhasil di tambahkan',
//    });
//      alert(r.message);
      console.log('OK:', r.status);
			// $("#name").val(null);
			// $("#phone").val(null);
			// $("#phone2").val(null);
			// $("#address_name").val(null);
			// $("#address1").val(null);
			// $("#address2").val(null);
			// $("#address3").val(null);
			// $("#address4").val(null);
			// $("#postal").val(null);
			// $("#district_id").val(null);
			// $("#isbillto").val(null);
			// $("#isshipto").val(null);
			// $("#ispayfrom").val(null);
		  // $("#isremitto").val(null);

        window.location.replace(base_url+"/account/informasiAkun");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
		console.log('ini data',token);
		//die();
$.ajax({ type:"POST", contentType: "application/json", headers:{"token":token}, data:JSON.stringify(data) , url: apiurl, success: success, error: error });

		//$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, error: error, timeout: 30000 });

		// success handling


var error = function(er){
  $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
  console.log('OK:', er);
  $.alert({
    title: 'Alert!',
    content: 'koneksi tidak berhasil, silahkan coba lagi!',
  });
};
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


  });


});
</script>
