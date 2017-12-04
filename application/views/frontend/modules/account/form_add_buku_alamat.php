<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> TAMBAH BUKU ALAMAT
	</div>
</div>


<div class="container my-container-white">

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/bukuAlamat', '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'.$field_back, array('class'=>'btn-back'));?></p>
			<p><?php echo $field_lengkap; ?></p>

			<div class="panel panel-default">
				<div class="panel-body">

				  <form name="test1" method="post">
				  <input type="hidden" id="isbillto" name="isbillto" value="N" />
				  <input type="hidden" id="isshipto" name="isshipto" value="Y" />
				  <input type="hidden" id="ispayfrom" name="ispayfrom" value="N" />
				  <input type="hidden" id="isremitto" name="isremitto" value="N" />
					<input type="hidden" id = "name"name="name"   />




					<div class='row'>
						<div class="col-sm-6">
							<div class="form-group">
							<label><?php echo $field_name; ?></label>
								<?php echo $user->name; ?>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
							<label>Email:</label>
								<?php echo $user->email; ?>
							</div>
						</div>

					</div>
          <div class="form-group">
          <label><?php echo $field_atasnama; ?></label>
          <input type="text" id="atas_name" name="atas_name" class="form-control mandatory"/>

          </div>
					<div class="form-group">
					  <label><?php echo $field_save ; ?></label>
					  <input type="text" id="address_name" name="address_name" class="form-control mandatory"/>
					</div>
					<div class="form-group">
					  <label><?php echo $lang_addres; ?>*</label>
            <textarea rows="4" cols="50" id="address1" name="address1" class="form-control mandatory"></textarea>
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
															 <option value="" selected="selected">--Pilih--</option>
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
							<label><?php echo $field_kel; ?></label>
					  <select name="village_id" id="village_id" class="form-control mandatory"></select>
					</div>
			         <div class="form-group"  id="postal_box">
        <label><?php echo $lang_PostCode; ?>*</label>
          <input type="text" name="postal" id="postal" class="form-control mandatory" ></select>
        </div>
					<div class="form-group">
					<label>Handphone*</label>
						<input type="text" id = "phone"name="phone" class="form-control mandatory" />
					</div>
					<div class="form-group">
					<label><?php echo  $field_telpon; ?></label>
						<input type="text" id = "phone2"name="phone2" class="form-control"/>
					</div>
					<div class="clearfix"></div>
						<input type="submit" id="submit_btn" class="btn btn-primary" value="Save"> <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
				  </form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    var negara =209;
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
  $("#village_id").prop('disabled', true).html('<option value="">--pilih--</option>');
  $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+$("#district_id").val(), function(r){
    r.forEach(function(o){
      $("#village_id").append("<option value='"+o.c_village_id+"'>"+o.name+"</option>");

      //$("#postal").val(o.postal);
    });
    $("#village_id").prop('disabled', false);
  }, "json" );

}
function get_distric(){
  $("#ditric_box").slideDown();
  $("#district_id").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_village);
  $.get(api_base_url+"/cdistrict/getlistdistrictbycityid/"+$("#city_sel").val(), function(r){
    r.forEach(function(o){
      $("#district_id").append("<option value='"+o.c_district_id+"'>"+o.name+"</option>");
    });
    $("#district_id").prop('disabled', false).change(get_village);;
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

var data = {};

$(document).ready(function() {
    $('#submit_btn').attr('disabled','disabled');
	var token = document.cookie.split('x-auth=')[1].split(';').shift();

        var apiGet= api_base_url+'/aduser/getinformationuser?token='+token;
$.ajax({
    type:"GET",
    headers:{"token":token},
    success: function(data){
        //$("#name").val(data.name)
        $("#phone").val(data.phone);
        $("#phone2").val(data.phone2);

        },
    dataType: "json",
    url: apiGet});

    $("form").submit(function(e){
    e.preventDefault();
    var token = document.cookie.split('x-auth=')[1].split(';').shift();

    var apiurl = api_base_url +'/aduser/addaddress';
    var name = $("#atas_name").val();
    var phone = $("#phone").val();
    var phone2 = $("#phone2").val();
    var address_name = $("#address_name").val();
    var address1 = $("#address1").val();


    var postal = $("#postal").val();
    var district_id = $("#district_id").val();
    var village_id = $("#village_id").val();
    var isbillto = $("#isbillto").val();
    var isshipto = $("#isshipto").val();
    var ispayfrom = $("#ispayfrom").val();
    var isremitto = $("#isremitto").val();

		if(name ===''){
						$.alert({title:'Alert', content: ' Atas Nama tidak boleh kosong'});
						$('#spinner_img').hide();
						$('#submit_btn').val('Kirim').removeClass('disabled');
						$('.mandatory').prop('disabled', false);
						return false;
					}
					if(phone ===''){
									$.alert({title:'Alert', content: 'handphone tidak boleh kosong'});
									$('#spinner_img').hide();
									$('#submit_btn').val('Kirim').removeClass('disabled');
									$('.mandatory').prop('disabled', false);
									return false;
								}
					if(phone2 ===''){
									$.alert({title:'Alert', content: ' Telepon tidak boleh kosong'});
									$('#spinner_img').hide();
									$('#submit_btn').val('Kirim').removeClass('disabled');
									$('.mandatory').prop('disabled', false);
									return false;
								}
								if(address_name ===''){
												$.alert({title:'Alert', content: 'Status Alamat tidak boleh kosong'});
												$('#spinner_img').hide();
												$('#submit_btn').val('Kirim').removeClass('disabled');
												$('.mandatory').prop('disabled', false);
												return false;
											}
											if(address1 ===''){
															$.alert({title:'Alert', content: 'Alamat tidak boleh kosong'});
															$('#spinner_img').hide();
															$('#submit_btn').val('Kirim').removeClass('disabled');
															$('.mandatory').prop('disabled', false);
															return false;
														}
														if(postal ===''){
																		$.alert({title:'Alert', content: 'Kode Post tidak boleh kosong'});
																		$('#spinner_img').hide();
																		$('#submit_btn').val('Kirim').removeClass('disabled');
																		$('.mandatory').prop('disabled', false);
																		return false;
																	}
																	if(district_id ===''){
																					$.alert({title:'Alert', content: 'Kecamatan tidak boleh kosong'});
																					$('#spinner_img').hide();
																					$('#submit_btn').val('Kirim').removeClass('disabled');
																					$('.mandatory').prop('disabled', false);
																					return false;
																				}
																				if(village_id ===''){
																								$.alert({title:'Alert', content: 'Kelurahaan tidak boleh kosong'});
																								$('#spinner_img').hide();
																								$('#submit_btn').val('Kirim').removeClass('disabled');
																								$('.mandatory').prop('disabled', false);
																								return false;
																							}





    data.name = name;
    data.phone = phone;
    data.phone2 = phone2;
    data.address_name = address_name;
    data.address1 = address1;


    data.postal = postal;
    data.c_country_id = negara;
    data.district_id = district_id;
    data.isbillto = isbillto;
    data.isshipto = isshipto;
    data.ispayfrom = ispayfrom;
    data.isremitto = isremitto;
    data.village_id = village_id;

		var success = function(r){
		$('#spinner_img').hide();
		$('#submit_btn').val('Save').removeClass('disabled');
    //      $.alert({
    //  title: 'Alert!',
    //  content: 'Alamat Baru Berhasil di tambahkan',
    // });
//      alert(r.message);

			$("#name").val(null);
			$("#phone").val(null);
			$("#phone2").val(null);
			$("#address_name").val(null);
			$("#address1").val(null);


			$("#postal").val(null);
			$("#district_id").val(null);
			$("#isbillto").val(null);
			$("#isshipto").val(null);
			$("#ispayfrom").val(null);
		  $("#isremitto").val(null);
			  console.log('OK:', r.status);

      window.location.replace(base_url+"/account/bukuAlamat/1");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", headers:{"token":token}, data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, error: error, timeout: 30000 });
    // success handling


var error = function(er){
  $('#spinner_img').hide();
  $('#submit_btn').val('Save').removeClass('disabled');
  console.log('OK:', er);
  $.alert({
    title: 'Alert!',
    content: 'koneksi tidak berhasil, silahkan coba lagi!',
  });
};




    // do validation
    // var form_ok = true;
    // $('.mandatory').each(function(){
    //   if($(this).val()==''){
    //     $.alert({title:'Alert', content: $(this).prev().text().slice(0,-1)+ ' is required!'});
    //     // onContentReady: function(){$(this).focus();}
    //     form_ok = false;
    //     return false;
    //   }
    //
    // });


  });


});
</script>
