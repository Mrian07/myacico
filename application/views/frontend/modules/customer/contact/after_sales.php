<!DOCTYPE html>
<style>
.strike-throgh {
	text-decoration: line-through;
}
</style>
<div class="container">
	 <div class="row">
	  <div class="col-sm-4">

		<?php echo $lang_a_sales;?>

	  </div>

   <br>
   <div class="col-sm-8">
   <div class="col-sm-5" style="padding-right: 0">
       <?php echo $lang_aftersale_baner;?>
  </div>

	  <div class="col-sm-7" style="padding-left: 0">
              <div id="sukses_after_sales" style="display: none;">
                   <div class="col-sm-8" style="text-align: justify;text-justify: inter-word;">
                       <center>
                           <h3><b><?php echo$lang_thanks;?></b></h3><br>
                       </center>

    <?php echo$lang_aftersale_keterangan;?>

	  </div>
              </div>

     <div id="aftersale" style="display: block;background: #ffff;border: 1px solid;border-top-right-radius: 10px;padding: 10px;border-bottom-right-radius: 10px;border: 1px solid #ccc;border-left: 0;height: 460px;">

         <div class="row">
  <div class="col-sm-12 text-center">
      <b><?php echo $lang_aftersales_cont;?></b>
  </div>

</div>

    <form name="myForm" method="post">
<div class="row" style="margin-bottom: 10px;">

    <div class="col-sm-6">
        <input type="text" id="subject" name="subject" class="form-control mandatory" placeholder="<?php echo$lang_subjek;?>">
  </div>
    <div class="col-sm-6">
     <input type="email" id="email" name="email" class="form-control mandatory" placeholder="<?php echo$lang_email_add;?>">
  </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-sm-6">
     <input type="text" id="nama" name="nama" class="form-control mandatory" placeholder="<?php echo$lang_name;?>">
  </div>
    <div class="col-sm-6">
     <input type="text" id="phone" name="phone" maxlength="12" class="form-control mandatory" placeholder="<?php echo$lang_phone;?>">
  </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-sm-6">
     <input type="text" id="id_order" name="id_order" class="form-control mandatory" placeholder="<?php echo$lang_order_id;?>">
  </div>
    <div class="col-sm-6">
     <input type="text" id="company" name="company" class="form-control mandatory" placeholder="<?php echo$lang_company;?>">
  </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-sm-12">
    <textarea class="form-control mandatory" id="message" name="message" rows="3" style="width: 100%; height: 200px;" placeholder="<?php echo$lang_msg;?>"></textarea>
  </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-sm-12 text-center">
        <input type="submit" id="submit_btn" class="btn btn-danger btn-lg" style="border-radius: 5px;padding: 8px 0;margin-bottom: 7px;background-color: #c81423;width: 100%;" value="<?php echo$lang_btn_Kirim;?>">
    </div>
</div>
        </form>

         <div class="clearfix"></div>
          </div>

         </div>
       <div class="row" style="margin-bottom: 10px;">
        <?php echo $lang_aftersale_bawah;?>
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


  $('form').submit(function(e){

    e.preventDefault();
    var nama = $("#nama").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
    var phone = $("#phone").val();
    var company = $("#company").val();
    var id_order = $("#id_order").val();



      if(subject ===''){
        $.alert({title:'Alert', content: ' <?php echo$lang_msg1?>'});
        $('#spinner_img').hide();
        $('#submit_btn').val('<?php echo$lang_btn_Kirim;?>').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }

      if(email ===''){
        $.alert({title:'Alert', content: ' <?php echo$lang_msg2?>'});
        $('#spinner_img').hide();
        $('#submit_btn').val('<?php echo$lang_btn_Kirim;?>').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }

       if(nama ===''){
        $.alert({title:'Alert', content: ' <?php echo$lang_msg3?>'});
        $('#spinner_img').hide();
        $('#submit_btn').val('<?php echo$lang_btn_Kirim;?>').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        $("#nama").focus();
        return false;
      }
      if(phone ===''){
        $.alert({title:'Alert', content: ' <?php echo$lang_msg5?>'});
        $('#spinner_img').hide();
        $('#submit_btn').val('<?php echo$lang_btn_Kirim;?>').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      if(id_order ===''){
        $.alert({title:'Alert', content: ' <?php echo$lang_msg7?>'});
        $('#spinner_img').hide();
        $('#submit_btn').val('<?php echo$lang_btn_Kirim;?>').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
       if(company ===''){
        $.alert({title:'Alert', content: ' <?php echo$lang_msg6?>'});
        $('#spinner_img').hide();
        $('#submit_btn').val('<?php echo$lang_btn_Kirim;?>').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
        return false;
      }
      if(message ===''){
        $.alert({title:'Alert', content: '<?php echo$lang_msg4?>'});
        $('#spinner_img').hide();
        $('#submit_btn').val('<?php echo$lang_btn_Kirim;?>').removeClass('disabled');
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

                $('#aftersale').hide();
                $('#sukses_after_sales').show();
				//
			}else{
        $.alert({title:'Alert', content: ' <?php echo$lang_msg8?>'});
        $('#spinner_img').hide();
        $('#submit_btn').val('<?php echo$lang_btn_Kirim;?>').removeClass('disabled');
        $('.mandatory').prop('disabled', false);
			}

		}


    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
    $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl_comp, success:success });

  });

  });

</script>
