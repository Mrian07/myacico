
<div class="my-container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> UBAH BUKU ALAMAT
	</div>
</div>
<div class="my-container">

	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/bukuAlamat', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Kembali', array('class'=>'btn-back'));?></p>
			<p>Silakan lengkapi data penerima dibawah ini jika anda ingin mengubah alamat Penerima. </br> *harap isi kemabali negara, propinsi, kota, dan kecamatan. </p>
			<div class="panel panel-default">
				<div class="panel-body">
				  <form name="signup" method="post">
					<div class="form-group">
					<input type="hidden" id = "name" name="name"  value="<?php echo $user->name;?>" />
                                        <input type="hidden" id = "id" name="id" />
                                          <input type="hidden" id="isbillto" name="isbillto" value="Y" />
                                        <input type="hidden" id="isshipto" name="isshipto" value="N" />
                                        <input type="hidden" id="ispayfrom" name="ispayfrom" value="N" />
                                        <input type="hidden" id="isremitto" name="isremitto" value="N" />
                                        <input type="hidden" id="idAdd" name="idAdd" value="<?php echo $this->uri->segment(3);?>" />
                                        <!--<label>Nama Penerima*</label>-->
                                        <!--<input type="text" id = "name" name="name" class="form-control mandatory"/>-->
					</div>
                                        <div class="form-group">
					  <label>Disimpan sebagai alamat (contoh: alamat rumah, alamat kantor dll.)*</label>
					  <input type="text" id="address_name" name="address_name" class="form-control mandatory" value="<?php echo $hasil['address_name'];?>" />
					</div>
					<div class="form-group">
					  <label><?php echo $lang_addres; ?>*</label>
					  <input type="text" id = "address1"name="address1" class="form-control mandatory" value="<?php echo $hasil['address1'];?>" />
					  <input type="text" id = "address2" name="address2" class="form-control mandatory" value="<?php echo $hasil['address2'];?>" />

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
                                                                                                                            <option value="<?php echo $hasil['region_id'];?>" selected="selected"><?php echo $hasil['region_name'];?></option>
                                                                                                                           </select>
                                                                                                                   </div>
					<div class="form-group" id="city_box">
						<label><?php echo $lang_kota; ?>*</label>
					  <select name="city" id="city_sel" class="form-control mandatory">

                                      </select>
					</div>
                                        <div class="form-group" id="ditric_box">
							<label><?php echo $lang_Keca; ?>*</label>
                                                        <!--<input name="district_id" >-->
                                                        <select name="district_id" id="district_id" class="form-control mandatory">

                                                        </select>
					</div>
                                       <div class="form-group" id="village_box">
							<label><?php echo "kelurahan"; ?>*</label>
                                                        <select name="village_id" id="village_id" class="form-control mandatory">


                                                        </select>
					</div>
					<div class="form-group">
				 <label><?php echo $lang_PostCode; ?>*</label>
					 <select type="text" name="postal" id="postal" class="form-control mandatory" ></select>
				 </div>
                                      <div class="form-group">
					<label>Handphone*</label>
						<input type="text" id = "phone"name="phone" class="form-control mandatory" value="<?php echo $hasil['phone'];?>" />
					</div>
					<div class="form-group">
					<label>Telepon</label>
						<input type="text" id = "phone2"name="phone2" class="form-control" value="<?php echo $hasil['phone2'];?>" />
					</div>




					<div class="clearfix"></div>
                                            <input type="submit" id="submit_btn" class="btn btn-primary" value="Update"> <img src="<?php echo base_url('images/general/Spinner.gif');?>" id="spinner_img" style="display:none">

				  </form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>

   // var propName;
    var kotaId;
    var kecId;
    var kelId;
    var postal= "<?php echo $hasil['postal'];?>";
    var kota = "<?php echo $hasil['city_id'];?>";

     var kec = "<?php echo $hasil['district_id'];?>";
    var kel = "<?php echo $hasil['village_id'];?>";

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
$('#postal').change(function () {
        var end = this.value;
      $('#submit_btn').removeAttr('disabled');
    });
    function get_region(){
      $("#region_box").slideDown();
        var negara = $('#country_sel').val();

      $("#region_sel").prop('disabled', true).unbind("change", get_city);
      /*
      $.ajax({
          type:"GET",
           success: function(data){

           },
      dataType: "json",
    url: apiGet});
        */
      $.get( api_base_url+"/cregion/getlistcregionbyidccountry/"+negara, function(r){
        r.forEach(function(o){
          $("#region_sel").append("<option value='"+o.c_region_id+"'>"+o.name+"</option>");
        });
        $("#region_sel").prop('disabled', false).change(get_city);
      }, "json" );
    }
function get_village(){
  $("#village_box").slideDown();
  $("#village_id").prop('disabled', true).html('<option value="">--pilih--</option>');
  $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+$("#district_id").val(), function(r){
    r.forEach(function(o){
      $("#village_id").append("<option value='"+o.c_village_id+"'>"+o.name+"</option>");
    });
       $("#village_id").prop('disabled', false).change(get_postal);
  }, "json" );
}
function get_distric(){
  $("#ditric_box").slideDown();
  $("#district_id").prop('disabled', true).html('<option value="">--pilih--</option>');
  $.get(api_base_url+"/cdistrict/getlistdistrictbycityid/"+$("#city_sel").val(), function(r){
    r.forEach(function(o){
      $("#district_id").append("<option value='"+o.c_district_id+"'>"+o.name+"</option>");
    });
    $("#district_id").prop('disabled', false).change(get_village);
  }, "json" );
}

function get_city(){
  $("#city_box").slideDown();

  //alert(kota);
  $("#city_sel").prop('disabled', true).html('<option value="">--pilih--</option>').unbind("change", get_distric);
  $.get( api_base_url+"/ccity/getlistccitybyidregion/"+$("#region_sel").val(), function(r){
      console.log(r);
    r.forEach(function(o){
      $("#city_sel").append("<option value='"+o.c_city_id+"'>"+o.name+"</option>");
    });
    $("#city_sel").prop('disabled', false).change(get_distric);
  }, "json" );
}



       function get_postal(){
      $("#postal_box").slideDown();
      $("#postal").prop('disabled', true).html('<option value="">--pilih--</option>');
      $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+$("#district_id").val(), function(r){
        r.forEach(function(o){
          $("#postal").append("<option value='"+o.postal+"'>"+o.postal+"</option>");
                console.log('23',o.postal);
        });
        $("#postal").prop('disabled', false);
      }, "json" );
    }

var data = {};
$(document).ready(function() {

     var kotas = function(){
         var propId = "<?php echo $hasil['region_id'];?>";
          var kota = "<?php echo $hasil['city_id'];?>";
        //  alert(kota);
         $.get( api_base_url+"/ccity/getlistccitybyidregion/"+$("#region_sel").val(), function(r){
      console.log(r);
    r.forEach(function(o){
       // alert("ccccccccc"+propId);
        if(o.c_city_id == kota)
        {
             $("#city_sel").append("<option value='"+o.c_city_id+"' selected='selected'>"+o.name+"</option>");
        }
        else{
            //alert("saas");
             $("#city_sel").append("<option value='"+o.c_city_id+"'>"+o.name+"</option>");
        }

    });
    $("#city_sel").prop('disabled', false).change(get_distric);
  }, "json" );


  console.log(propId);
  var insideTest = "variable inside test";

}
var keces= function(){

    var keca=kec;

   console.log("sasasdasd",keca);
    $.get(api_base_url+"/cdistrict/getlistdistrictbycityid/"+kota, function(r){
    r.forEach(function(o){
        if(o.c_district_id == keca)
        {
          $("#district_id").append("<option value='"+o.c_district_id+"' selected='selected'>"+o.name+"</option>");
        }
        else {
            $("#district_id").append("<option value='"+o.c_district_id+"'>"+o.name+"</option>");
        }

    });
    $("#district_id").prop('disabled', false).change(get_village);
  }, "json" );
   //alert($("#city_sel").val());
}
 var kels=function(){
     $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+kec, function(r){
    r.forEach(function(o){
     if(o.c_village_id == kel)
        {
          $("#village_id").append("<option value='"+o.c_village_id+"' selected='selected'>"+o.name+"</option>");
        }
        else {
           $("#village_id").append("<option value='"+o.c_village_id+"'>"+o.name+"</option>");
        }


    });
       $("#village_id").prop('disabled', false).change(get_postal);
  }, "json" );
 }
 var kodePos = function(){
     $.get(api_base_url+"/village/getlistvillagebyiddistrict/"+kec, function(r){
        r.forEach(function(o){
            if(o.postal == postal){
                $("#postal").append("<option value='"+o.postal+"' selected='selected'>"+o.postal+"</option>");
            }else{
                $("#postal").append("<option value='"+o.postal+"'>"+o.postal+"</option>");
            }
          
                console.log('23',o.postal);
        });
        $("#postal").prop('disabled', false);
      }, "json" );
 }
    kotas();
    keces();
    kels();
    kodePos();
    $('#submit_btn').attr('disabled','disabled');
    var token = document.cookie.split('x-auth=')[1].split(';').shift();
    var idAdd = $('#idAdd').val();
//    $http.get('www.google.com/someapi', {
//    headers: {'Authorization': 'Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=='}
//});

/*
 var apiGet= api_base_url+'/aduser/getaddress/'+idAdd+'?token='+token;
$.ajax({
    type:"GET",
    headers:{"token":token},
    //beforeSend: getAdd(),
    success: function(data){
        var addressname = $('.addressname');
  var rumah = $('.rumah');
  var mybutton = $('.mybutton');
  $("#id").val(data.id);
        $("#address_name").val(data.address_name);
        $("#name").val(data.name);
        $("#phone").val(data.phone);
        $("#phone2").val(data.phone2);
        propId=data.region_id;
        kotaId=data.city_id;
        kecId=data.district_id;
        kelId=data.village_id;
        postal=data.postal;region_name
        $("#postal").val(data.postal);
        $("#address1").val(data.address1);
        $("#address2").val(data.address2);
        console.log("data: ",data);
        data.forEach(function(p){

  rumah.append(

  '<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td></tr>'
  )
  mybutton.append(
  '<div class="my-btn-general"><a href="'+base_url+'account/formBilling/'+p.id+'" class="my-link-general">Ubah</a></div>'
  )
  });

        },
    dataType: "json",
    url: apiGet});
*/

   /*
        $.get(api_base_url+'/aduser/getaddress/'+idAdd+'?token='+token,
 function(data){
 console.log('data nya adalah:', data);

  var addressname = $('.addressname');
  var rumah = $('.rumah');
  var mybutton = $('.mybutton');
  if(data.length == 0) return box.append('<p>Data tidak ditemukan</p>');
  if(data.length == 0) { $('#biling-empty').show();  }else{ $('#biling-ready').show(); }

        $("#id").val(data.id);
        $("#address_name").val(data.address_name);
        $("#name").val(data.name);
        $("#phone").val(data.phone);
        $("#phone2").val(data.phone2);
        $("#postal").val(data.postal);
        $("#address1").val(data.address1);
        $("#address2").val(data.address2);
//        console.log('data nya adalah:', data[0]['id']);
  data.forEach(function(p){

  rumah.append(

  '<tr><td>'+p.address_name+',  '+p.address1+' '+p.address2+' '+p.address3+' '+p.address3+' '+p.address4+' '+p.cityname+' '+p.postal+'</td></tr>'
  )
  mybutton.append(
  '<div class="my-btn-general"><a href="'+base_url+'account/formBilling/'+p.id+'" class="my-link-general">Ubah</a></div>'
  )
  });


  });
    */
  $("form").submit(function(e){
      
    e.preventDefault();
    //var data = $(this).serialize();
    var token = document.cookie.split('x-auth=')[1].split(';').shift();
    var apiurl = api_base_url + '/aduser/updateaddress?token='+token;
//    console.log('test'+token);
    var id = $("#idAdd").val();
    var name =  $("#name").val();
        var phone = $("#phone").val();
        var phone2 = $("#phone2").val();
        var address_name = $("#address_name").val();
        var address1 = $("#address1").val();
        var address2 = $("#address2").val();
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
data.id = id;
    data.address_name = address_name;
    data.name = name;
    data.phone = phone;
    data.phone2 = phone2;
    data.address_name = address_name;
    data.address1 = address1;
    data.address2 = address2;
    data.postal = postal;
    data.district_id = district_id;
    data.isbillto = 'Y';
    data.isshipto = 'N';
    data.ispayfrom = 'N';
    data.isremitto = 'N';
    data.village_id = village_id;
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
        window.location.replace(base_url+"/account/informasiAkun");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), headers:{"token":token}, dataType: "json", url: apiurl, success: success, timeout: 30000 });

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
	//    $("#country_sel").prop('disabled', true).html('<option value="209" selected="selected">Indonesia</option>');
	//    $("#country_sel").prop('disabled', true).html('<option value="">Indonesia</option>');
	//    $("#country_sel").prop('disabled', true).on("load", get_region);
	    r.forEach(function(o){
	      $("#country_sel").append("<option value='"+o.c_country_id+"'>"+o.name+"</option>");
	    });
	    $("#country_sel").prop('disabled', true).change(get_region(this));
	  }, "json" );
});
</script>
