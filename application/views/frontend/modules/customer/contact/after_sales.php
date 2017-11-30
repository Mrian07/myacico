<!DOCTYPE html>
<div class="container">
	 <div class="row">
	  <div class="col-sm-6">
		
		<?php echo $lang_a_sales;?>
		
	  </div>
	
   <br>
	  <div class="col-sm-6">
              <div id="sukses_after_sales" style="display: none;">
                   <div class="col-sm-8" style="text-align: justify;text-justify: inter-word;">
                       <center>
                           <h3><b>TERIMA KASIH</b></h3><br>
                       </center>
                           
    Telah menghubungi kami. Customer service kami akan segera menghubungi Anda.
	
	  </div>
              </div>

     <div id="aftersale">
         <div class="row">
  <div class="col-sm-12 text-center">
      <b><?php echo $lang_aftersales_cont;?></b> 
  </div>
</div>
    <form name="myForm" method="post">
<div class="row">
   
    <div class="col-sm-6">
        <input type="text" id="subject" name="subject" class="form-control mandatory" placeholder="<?php echo$lang_subjek;?>">
  </div>
    <div class="col-sm-6">
     <input type="text" id="email" name="email" class="form-control mandatory" placeholder="<?php echo$lang_email_add;?>">
  </div>
</div> <br>
<div class="row">
    <div class="col-sm-6">
     <input type="text" id="nama" name="nama" class="form-control mandatory" placeholder="<?php echo$lang_name;?>">
  </div>
    <div class="col-sm-6">
     <input type="text" id="phone" name="phone" maxlength="12" class="form-control mandatory" placeholder="<?php echo$lang_phone;?>">
  </div>
</div> <br>
<div class="row">
    <div class="col-sm-6">
     <input type="text" id="id_order" name="id_order" class="form-control mandatory" placeholder="<?php echo$lang_order_id;?>">
  </div>
    <div class="col-sm-6">
     <input type="text" id="company" name="company" class="form-control mandatory" placeholder="<?php echo$lang_company;?>">
  </div>
</div> <br>
<div class="row">
    <div class="col-sm-12">
    <textarea class="form-control mandatory" id="message" name="message" rows="3" style="width: 550px; height: 200px;" placeholder="<?php echo$lang_msg;?>"></textarea>
  </div>
</div>
        <br>
<div class="col-sm-12 text-center">
    <input type="submit" id="submit_btn" class="btn btn-primary" value="Kirim">
</div>
        </form>

          </div>
         </div>
	</div> 
</div>
<script type="text/javascript">
    
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

var apiurl_comp = baseApiUrl + '/mail/aftersales';
    console.log('asd',apiurl_comp);
var data = {};
$('#phone').on('input', function(event) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
$(document).ready(function() {
    
//$("#ilang").load(function() {
//            if (this.value == 'Kantor Cabang' || this.value == 'Kantor Pembantu' || this.value == 'Perwakilan') {
//                $('#ilang').show();
//            } else {
//                $("#ilang").hide();
//            }
//        });


  $('form').submit(function(e){
     
    e.preventDefault();
    var nama = $("#nama").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
    var phone = $("#phone").val();
    var company = $("#company").val();
    var id_order = $("#id_order").val();
    
      
    

      if(nama ===''){
        $.alert({title:'Alert', content: ' Nama tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        $("#nama").focus();
        return false;
      }
      if(email ===''){
        $.alert({title:'Alert', content: ' Email tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      if(subject ===''){
        $.alert({title:'Alert', content: ' Keperluan tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      
      if(message ===''){
        $.alert({title:'Alert', content: ' Pesan tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      if(phone ===''){
        $.alert({title:'Alert', content: ' Telepon tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
       if(company ===''){
        $.alert({title:'Alert', content: ' Perusahaan tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      if(id_order ===''){
        $.alert({title:'Alert', content: ' No Pesanan tidak boleh kosong'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      data.name = nama;
    data.email = email;
    data.subject = subject;
    data.message = message;
    data.phone = phone;
    data.company = company;
    data.orderID = id_order;

// if(name==''){
// 			$.alert({
// 				title: 'Alert!',
// 				content: 'Nama tidak boleh kosong!',
// 			});
//       return false;
// 		}
		    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Email Tidak Benar");
        return false;
    }



		// comment baru

    var success = function(data)
		{

			if(data.status==1){
        // console.log('asdasd',data.status);

                $('#aftersale').hide(); 
                $('#sukses_after_sales').show(); 
				//
			}else{
        $.alert({title:'Alert', content: ' pesan gagal dikirim silahkan coba kembali !'});
        $('#spinner_img').hide();
        $('#submit_btn').val('Kirim').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
			}

		}


    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl_comp, success:success });

  });

  });

</script>
