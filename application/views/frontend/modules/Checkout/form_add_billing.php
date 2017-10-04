<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}

	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}

	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}

	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}

}
</style>

<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> CHECKOUT / BILLING

		  </div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row" ng-controller="cartCnt">
		<div class="col-md-7">
			<div class="panel panel-default">
			  <div class="panel-heading">
			  <div class="row">
					<div class="col-md-8">
						<b>Data Billing/ Pengirim</b>
					</div>
					<div class="col-md-4" style='text-align: right'>
						<?php echo anchor('checkout', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Kembali');?>
						
					</div>
				</div>	
			  </div>
			  <div class="panel-body">
			  
				<div class="row">
					<div class="col-md-12">
						
						<form name="signup" method="post">
						<input type="hidden" id = "name"name="name"   />
						<input type="hidden" id = "phone1"name="phone1"   />
						<input type="hidden" id = "phone2"name="phone2" />

						<div class="form-group">

						<input type="hidden" id="bill" name="bill" value="N" />
						<input type="hidden" id="ship" name="ship" value="Y" />
						<input type="hidden" id="pay" name="pay" value="N" />
						<input type="hidden" id="remit" name="remit" value="N" />
						<input type="hidden" id="addn" name="addn" value="kontrakan" />
						<input type="hidden" id="alamat3" name="alamat3" value="kelurahan duri kosambi" />
						</div>
						
						<div class='row'>
							<div class="col-sm-6">
								<div class="form-group">
								<label>Nama:</label>
									<?php echo $user->name; ?>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label>EMail:</label>
									<?php echo $user->email; ?>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class="col-sm-12">
								<p>Silakan lengkapi data billing/ pengirim dibawah ini dengan lengkap.</p>
							</div>
						</div>	
						
						<div class="form-group">
						  <label>Disimpan sebagai alamat (contoh: alamat rumah, alamat kantor dll.)*</label>
						  <input type="text" id="address_name" name="address_name" class="form-control mandatory"/>
						</div>
						<div class="form-group">
						<label><?php echo $lang_addres; ?>*</label>
						<input type="text" id = "alamat1"name="alamat1" class="form-control mandatory" />
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
						<input type="text" id ="postal" name="postal" class="form-control mandatory" />
						</div>
						<div class="form-group">
						<label>Handphone*</label>
							<input type="text" id = "phone"name="phone" class="form-control mandatory" />
						</div>
						<div class="form-group">
						<label>Telepon</label>
							<input type="text" id = "phone2"name="phone2" class="form-control"/>
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
		<div class="col-md-5">
			<?php $this->load->view('frontend/modules/checkout/checkout_cart',$this->data); ?>		
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
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	$.get(api_base_url+'/aduser/getinformationuser?token='+token,

	function(data){
	console.log('data nya adalah:', data);
	console.log('test',token);
		$("#name").val(data.name)
	  $("#phone1").val(data.phone1);
 		$("#phone2").val(data.phone2);


		// var addressname = $('.addressname');
		// var rumah = $('.rumah');


		 //if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');


		//  data.forEach(function(p){
		// 	 rumah.append(
		 //
		// 		 '<tr><td>'+p.addressname+'  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td><td><a href="'+api_base_url+'/aduser/deleteaddress?token='+token+'&addessid='+p.cbpartner_location_id+'"><h4>'+p.cbpartner_location_id+'</h4></a></td></tr>'
		 //
		 //
		// 	 )






});
    $("form").submit(function(e){
    e.preventDefault();
    var token = document.cookie.split('x-auth=')[1].split(';').shift();

    var apiurl = api_base_url + '/aduser/addaddress?token='+token;
    var alamat = $("#addn").val();
		var name = $("#name").val();
		var phone1 = $("#phone1").val();
		var phone2 = $("#phone2").val();
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
		data.name = name;
		data.phone1 = phone1;
		data.phone2 = phone2;
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

   // console.log(data);die();
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
				$("#name").val(null)
				$("#phone1").val(null);
				$("#phone2").val(null);
        window.location.replace(base_url+"/account/bukuAlamat");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, error: error, timeout: 30000 });
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

  $.get(api_base_url+"/ccountry/getlistccountry", function(r){
    console.log(r);
    r.forEach(function(o){
      $("#country_sel").append("<option value='"+o.c_country_id+"'>"+o.name+"</option>");
    });
    $("#country_sel").prop('disabled', false).change(get_region);
  }, "json" );
});
</script>
