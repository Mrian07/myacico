<link href="<?php echo base_url('assets/css/style_cart_by_ci.css');?>" rel="stylesheet">

<div class="container detail-page">
  <div style='margin:0px auto; width:1000px; margin-top:30px;  height:50px;'>
    <div class="number-container">
      <div class="title-step"><p><?=$lang_shoping_cart;?></p></div>
      <div class="title-step2"><p><?=$lang_shoping_method_cart;?></p></div>
      <div class="title-step3"><p><?=$lang_payment_confirm;?></p></div>
    </div>
  </div>
  <div style='margin:0px auto; width:900px; margin-bottom:50px; height:50px;'>
    <div class="number-container">
      <div class="number"><p>1</p></div>
      <div class="number2"><p>2</p></div>
      <div class="number3"><p>3</p></div>
      <div class="barred"></div>
    </div>
  </div>

    <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1150px;margin-bottom:40px;'><?php echo $lang_shoping_cart; ?></div>
    <div class='box-ship'>

      <?php echo anchor('checkout/addressbook',$lang_tamb3, array('class'=>'btn-add-adrs')); ?>
      <br><br>
      <div class='box-ship-info-adrs'>
        <?php echo $lang_another; ?></br>
        <select name='selectShip' id='selectShip' class="form-control" onchange="pilihAlamat(this);">
          <option value=''>-Pilih-</option>
          <?php foreach($hasil_ship as $dasa_ship){
            $almt_shipping =$dasa_ship['name'].", ".$dasa_ship['address_name'].", ".$dasa_ship['address1']." ".$dasa_ship['city_name']." ".$dasa_ship['postal'];
            if($shipping_address_id==$dasa_ship['id']){
              echo"<option value=".$dasa_ship['id']." selected>".$almt_shipping."</option>";
            }else{
              echo"<option value=".$dasa_ship['id'].">".$almt_shipping."</option>";
            }

          }?>
        </select>
      </div>
      <div class='box-ship-info'>
      <?php echo $lang_coursss; ?></br>
        <select name='kurir' id='kurir' onchange="pilihKurir(this);" class="form-control">
          <option value='kosong-kosong'>-Pilih-</option>
          <?php
          $jmlKur = count($hasil_kurir);
          if($jmlKur){
          foreach($hasil_kurir as $dataKur){
            $nameKurir = $dataKur['shipperName'];
            ?>

            <?php if($this->session->userdata('id_kurir')==$dataKur['shipperId']){?>
              <option value='<?php echo $dataKur['shipperId']; ?>-<?php echo $dataKur['amount']; ?>-<?php echo $dataKur['shipperName']; ?>' selected><?php echo $dataKur['shipperName']; ?></option>
            <?php }else{?>
              <option value='<?php echo $dataKur['shipperId']; ?>-<?php echo $dataKur['amount']; ?>-<?php echo $dataKur['shipperName']; ?>'><?php echo $dataKur['shipperName']; ?></option>
            <?php } ?>

          <?php }
          }?>


        </select>
      </div>
      <div class='box-ship-info'>
        <?php echo $lang_paket; ?></br>
        <select id='pilihPaket' class="form-control paket">
          <option value=''>-Pilih-</option>
          <?php
          $jmlKur = count($hasil_kurir);
          if($jmlKur){

              if($nameKurir=='Myacico Courier'){
                echo"<option value='Flat Rate'>Flat Rate</option>";
              }elseif($nameKurir=='JNE Regular' || $nameKurir=='Ninja Express'){
                echo"<option value='Reguler'>Reguler</option>";
              }else{
                  echo"<option>-</option>";
              }

           } ?>

        </select>
      </div>
      <div class='box-ship-info'>
        <?php echo $lang_biaya; ?></br>
        -
      </div>
      <div class='box-ship-info'>
      <?php echo $lang_ongk; ?></br>Rp.<span class='amount'>-</span>
      </div>

      <div class='box-ship-info' style='text-align:right'>

      </div>
      <div style='clear:both'></div>
      <div class='box-com'>
        <font color='red'><b><?php echo $lang_alamatTr; ?></b></font></br>
        <div class="row" id='box-adrs'>
          <div class="col-xs-12 alamat" id='box-shadow'><?php  if(isset($alamat_shipping)){ echo$alamat_shipping; }else{echo"-";} ?></div>
        </div>
      </div>
      <div class='box-com2'>
        <?php echo $lang_cata;?></br>
        <textarea id='styled'></textarea>
      </div>

      <div style='clear:both'></div>

      <br><br>
    <div class="col-md-12 listCart">
      <center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center>
    </div>

    <div style='clear:both'></div>
  </div>

  <button onclick='next()' class="checkout-button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span><b><?php echo $lang_byr1; ?></b> <?php
  echo $lang_byr2 ?></span> <img src="<?php echo base_url('images/general/Spinner_cart.gif');?>" id="spinner_img" style="display:none"></button>
  <div style='clear:both'></div>
</div>

<script>
// var url = '<?php echo site_url('checkout/note'); ?>'
// $("#styled").on("change keyup paste", function() {
//     var noteVal = $(this).val();
//
//     $.ajax
//     ({
//         url: url+'/?note='+noteVal,
//         success:function(html){
//         console.log(html);
//       }
//     });
//
//     // if(currentVal == oldVal) {
//     //     return; //check to prevent multiple simultaneous triggers
//     // }
//     //
//     // oldVal = currentVal;
//     // //action to be performed on textarea changed
//     // alert(oldVal);
// });

function next(){
  var noteVal = $('#styled').val();
  var kurir = $('#kurir').val();
  var itemKosong = $('#itemKosong').val();
  var selectShip = $('#selectShip').val();
  var pilihPaket = $('#pilihPaket').val();

    if(itemKosong=="1"){
      $.alert({
        title: 'Alert!',
        content: '<?php echo$lang_alert_cart_empty; ?>',
      });
    }
    else if(selectShip==""){
    $.alert({
      title: 'Alert!',
      content: '<?php echo$lang_alert_cart_shipping; ?>',
    });
  }else if(kurir=="kosong-kosong"){
    $.alert({
      title: 'Alert!',
      content: '<?php echo$lang_alert_cart_kurir; ?>',
    });
  }else if(pilihPaket==""){
    $.alert({
      title: 'Alert!',
      content: '<?php echo$lang_alert_cart_paket; ?>',
    });
  }else{
    $('#spinner_img').show();
    $('.checkout-button').css("background", "#f9a8a8");

    if(noteVal){
        var url = '<?php echo site_url('checkout/note'); ?>';
        $.ajax
        ({
            url: url+'/?note='+noteVal,
            success:function(html){
            console.log(html);
            if(html){
              window.location.replace("<?php echo base_url('checkout/summary');?>");
            }
          }
        });
      }else{
        window.location.replace("<?php echo base_url('checkout/summary');?>");
      }


  }
}

function pilihAlamat(id){
  $(".alamat").html('Loading...');
  $(".amount").html('-');
  var id = id.value;
  var url = '<?php echo site_url('checkout/pilihShip'); ?>'

  if(id==''){
    $(".alamat").html('');
  }else{
    $.ajax
    ({
    url: url+'/?id='+id,
    success:function(html){
        console.log(id)
        getAsap(id);
        $(".alamat").html(html);
        $(".amount").html('-');
        getKurir(id);
        $(".paket").html('<option value="">-Pilih-</option>');
      }
    });

  }

}

function getAsap(id){
    var apiurl = api_base_url +'/freight/isdki?villageid='+id;

     $.ajax({
        url: apiurl,
        success:function(res){
            console.log(res)
                 if(res.isDKI=='N'){
        $(".asapGb").hide();
      }else{
        $(".asapGb").show()
      }

        }
    })

}
function getKurir(id){

  var url = '<?php echo site_url('checkout/selectKurir'); ?>'
  $.ajax
  ({
  url: url+'/?id='+id,
  success:function(html){
      $("#kurir").html(html);
    }
  });
}

function pilihKurir(row){
  var result=row.value.split('-');
  var id = result[0];
  var amount = result[1];
  var nameKur = result[2];
  if(id=='kosong'){
    $(".amount").html('-');
    $('#pilihPaket').html('-');
  }else{

    var url = '<?php echo site_url('checkout/pilihKurir'); ?>'
    $.ajax
    ({
    url: url+'/?id='+id+'&amount='+amount+'&name='+nameKur,
    success:function(html){
        $(".amount").html(html);
      }
    });

    var url = '<?php echo site_url('checkout/pilihPaket'); ?>'
    $.ajax
    ({
    url: url+'/?id='+id+'&amount='+amount+'&name='+nameKur,
    success:function(html){
        $(".paket").html(html);
      }
    });

  }

}

$(document).ready(function() {
var id_add ="<?php echo get_cookie('shipping_address_id');?>"

  $('#kurir').prop('selectedIndex',0);

	var cookie = document.cookie.split('x-auth=');
	if(cookie.length > 1){

		$.ajax
		({
		url: "<?php echo site_url('cart/listCartToken'); ?>",
		success:function(html){
				$(".listCart").html(html);
                                getAsap(id_add)
			}
		});
	}
});

</script>
