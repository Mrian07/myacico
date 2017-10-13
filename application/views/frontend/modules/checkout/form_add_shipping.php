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

			<i class="fa fa-angle-right" aria-hidden="true"></i> CHECKOUT / PENERIMA

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
						<b>Data Billing/ Penerima</b>
					</div>
					<div class="col-md-4" style='text-align: right'>
						<?php echo anchor('checkout', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Kembali');?>

					</div>
				</div>
			  </div>
	
				 <div class="panel-body">


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
            <div class="row">
              <div class="col-sm-12">

                <p>Silakan lengkapi data billing Anda dibawah ini.</p>

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
                      <input type="text" id = "address1"name="address1" class="form-control mandatory"/>
                      <input type="text" id = "address2" name="address2" class="form-control mandatory"/>
                    </div>
                    <div class="form-group" style="display:none" id="ditric_box">
                        <label><?php echo $lang_Keca; ?>*</label>
                      <select name="district_id" id="district_id" class="form-control mandatory"></select>
                    </div>
                    <div class="form-group" style="display:none" id="city_box">
                      <label><?php echo $lang_kota; ?>*</label>
                      <select name="city" id="city_sel" class="form-control mandatory"></select>
                    </div>
                    <div class="form-group">
                    <label><?php echo $lang_PostCode; ?>*</label>
                      <input type="text" id="postal" name="postal" class="form-control mandatory" />
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
                      <input type="submit" id="submit_btn" class="btn btn-primary" value="Tambah"> <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">
                    </form>
                  </div>
                </div>
     

			</div>


			</div>

		</div>
		<div class="col-md-5">
			<?php 			
			$this->data['token'] = $_COOKIE['x-auth'];
			$token = $_COOKIE['x-auth'];
			$api = "order/cart/detail";
			$url = api_base_url($api);
			
			$options = ["http" => [
			"method" => "GET",
			"header" => ["token: " . $token,
			"Content-Type: application/json"],
			]];
			
			$context = stream_context_create($options);
			$konten = file_get_contents($url, false, $context);
			
			
			$this->data['hasil'] = json_decode($konten, true);
			//echo"<pre>"; print_r($hasil); 
			
			if(json_decode($konten, true)){
				$this->load->view('frontend/modules/checkout/checkout_cart',$this->data); 
			}else{
				echo"<center>Keranjang masih kosong</center>";
			}
			
			?>
		</div>
	</div>


</div>
<script>
$.ajaxSetup({
  error: function(){
    alert('service not available, please try again later');
  },
  timeout: 10000/*,
  contentType: "application/json; charset=UTF-8"*/
});

function get_distric(){
  $("#ditric_box").slideDown();
  $("#district_id").prop('disabled', true).html('<option value="">--pilih--</option>');
  $.get(api_base_url+"/cdistrict/getlistdistrictbycityid/"+$("#city_sel").val(), function(r){
    r.forEach(function(o){
      $("#district_id").append("<option value='"+o.c_district_id+"'>"+o.name+"</option>");
    });
    $("#district_id").prop('disabled', false);
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
$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data) , url: apiurl, success: success, error: error });

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

  $.get(api_base_url+"/ccountry/getlistccountry", function(r){
    console.log(r);
    r.forEach(function(o){
      $("#country_sel").append("<option value='"+o.c_country_id+"'>"+o.name+"</option>");
    });
    $("#country_sel").prop('disabled', false).change(get_region);
  }, "json" );
});
</script>
