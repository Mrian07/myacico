<style>
.box-ship{
  border: 1px solid #dddddd;
  padding:20px;
  margin:10px 0px;
  color: #4a4847;
}

.box-cart{
  border: 1px solid #dddddd;
  padding:20px;
  margin:10px 0px;
  color: #4a4847;
  height: 350px;
  overflow:auto;
}


.box-ship-info{
  float:left;
  width:177px;
  height:auto;
  margin-right:5px;
  /*text-align: center;*/

}
.box-com{
  float:left;
  padding-top:10px;
  width:540px;
  /*background:#e9e8e7;*/
}

textarea#styled {
	width: 500px;
	height: 120px;
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Tahoma, sans-serif;
	background-image: url(bg.gif);
	background-position: bottom right;
	background-repeat: no-repeat;
}
#box-adrs{
  background: #e9e8e7;
  height:120px;
}

#box-shadow{
	height: 100px;
  width:550px;
	box-shadow: 1px 1px 5px #888888;
	background-color: #fff;
	float: left;
	margin: 8px;
	padding: 10px;
}
.btn-add-adrs{
  background:#f2f2f1;
  color:#746d68;
  padding:5px;
  font-weight: bold;
}
.btn-add-adrs:hover{
  background:#e9e8e7;
  text-decoration: none;
  color:#111111;
  font-weight: bold;
}
.checkout-button{
	/*width: 190px;*/
	/*height: 30px;*/
	float: right;
	padding: 5px;

  background: transparent;
  border: 1px;
	color: white;
  font-size:15px;
  padding:10px;
}

.checkout-button:hover{
  background-color: #ca3833;
  color:#f1eeee;
}
</style>


<style type="text/css">
.title-step{
    width: 200px;
    display: inline-block;
    margin-right: 0%;
    margin-top:0px;
    margin-bottom:0px;
  }
  .title-step p{
    color: red;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
  }

  .title-step2{
    width: 230px;
    display: inline-block;
    margin-top:0px;
    margin-bottom:0px;
    margin-left: 160px;

  }
  .title-step2 p{
    color: #9a9c9b;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
  }

  .title-step3{
    width: 250px;
    display: inline-block;
    margin-right: 0px;
    margin-left: 110px;
    margin-top:0px;
    margin-bottom:0px;
  }
  .title-step3 p{
    color: #9a9c9b;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
  }

  .number{
    width: 60px;
    height: 60px;
    background-color: red;
    display: inline-block;
    border-radius: 50px;
    margin-right: 24%;
    margin-top:0px;
    margin-bottom:-500px;
  }
  .number p{
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    padding-top: 20px;
  }

  .number2{
    width: 60px;
    height: 60px;
    background-color: #9a9c9b;
    display: inline-block;
    border-radius: 50px;
    margin-left: 110px;
    margin-top:0px;
    margin-bottom:-500px;
  }
  .number2 p{
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    padding-top: 20px;
  }

  .number3{
    width: 60px;
    height: 60px;
    background-color: #9a9c9b;
    display: inline-block;
    border-radius: 50px;
    margin-right: 0px;
    margin-left: 300px;
    margin-top:0px;
    margin-bottom:-500px;
  }
  .number3 p{
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    padding-top: 20px;
  }

  .barred{
    width: 90%;
    height: 10px;
    background-color: red;
    /*position: absolute;*/
    margin-top: -25px;
    z-index: -1;
  }

</style>

<div class="container">
  <div style='margin:0px auto; width:1000px; margin-top:30px;'>
    <div class="number-container">
      <div class="title-step"><p>Keranjang Belanja</p></div>
      <div class="title-step2"><p>Metode Pembayaran</p></div>
      <div class="title-step3"><p>Konfirmasi Pembayaran</p></div>
    </div>
  </div>
  <div style='margin:0px auto; width:900px; margin-bottom:50px;'>
    <div class="number-container">
      <div class="number"><p>1</p></div>
      <div class="number2"><p>2</p></div>
      <div class="number3"><p>3</p></div>
      <div class="barred"></div>
    </div>
  </div>
<!-- <br><p align='center'><img src="<?php //echo base_url('images/general/step1.jpg'); ?>" border="0"></p> -->

    <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1150px;margin-bottom:40px;'>KERANJANG BELANJA</div>
    <div class='box-ship'>
      <div class='box-ship-info'>
        Kurir Pengiriman</br>
        <select name='kurir' id='kurir' onchange="pilihKurir(this);" class="form-control">
          <option value='kosong-kosong'>-Pilih-</option>
          <?php
          $jmlKur = count($hasil_kurir);
          if($jmlKur){
          foreach($hasil_kurir as $dataKur){?>

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
        Paket Pengiriman</br>
        <select name='' class="form-control">
          <option>-</option>
        </select>
      </div>
      <div class='box-ship-info'>
        Biaya Asuransi</br>
        -
      </div>
      <div class='box-ship-info'>
        Ongkos Kirim</br>Rp.<span class='amount'>-</span>
      </div>
      <div class='box-ship-info'>
        Pilih Alamat Lain</br>
        <select name='selectShip' id='selectShip' class="form-control" onchange="pilihAlamat(this);">
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
      <div class='box-ship-info' style='text-align:right'>
        <?php echo anchor('checkout/addressbook','Tambah Alamat Baru', array('class'=>'btn-add-adrs')); ?>
      </div>
      <div style='clear:both'></div>
      <div class='box-com'>
        Catatan</br>
        <textarea id='styled'></textarea>
      </div>
      <div class='box-com'>
        Alamat Tujuan</br>
        <div class="row" id='box-adrs'>
          <div class="col-xs-12 alamat" id='box-shadow'><?php  if(isset($alamat_shipping)){ echo$alamat_shipping; }else{echo"-";} ?></div>
        </div>
      </div>
      <div style='clear:both'></div>
  </div>

  <div class='box-cart'>

    <div class="col-md-12 listCart">
      <center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center>
    </div>

    <div style='clear:both'></div>
  </div>

  <button onclick='next()' class="checkout-button"> <img src="https://s8.postimg.org/mgry4ywxx/Artboard_1-100.jpg"> <img src="<?php echo base_url('images/general/Spinner_cart.gif');?>" id="spinner_img" style="display:none"></button>
  <div style='clear:both'></div>
</div>


<script>
function next(){

  // alert('jalan');die();
  var kurir = $('#kurir').val();
  var itemKosong = $('#itemKosong').val();
  var selectShip = $('#selectShip').val();
    if(itemKosong=="1"){
      $.alert({
        title: 'Alert!',
        content: 'Keranjang belanja kosong transaksi tidak bisa dilanjutkan.',
      });
    }
    else if(selectShip==""){
    $.alert({
      title: 'Alert!',
      content: 'Alamat tujuan tidak boleh kosong',
    });
  }else if(kurir=="kosong-kosong"){
    $.alert({
      title: 'Alert!',
      content: 'Silakan pilih kurir pengiriman',
    });
  }else{
    $('#spinner_img').show();
    $('.checkout-button').css("background", "#f9a8a8");
      window.location.replace("<?php echo base_url('checkout/summary');?>");
  }
  // alert(kurir);
  // alert(selectShip);
}

function pilihAlamat(id){
  $(".alamat").html('Loading...');
  $(".amount").html('-');
  var id = id.value;
  var url = '<?php echo site_url('checkout/pilihShip'); ?>'
  $.ajax
  ({
  url: url+'/?id='+id,
  success:function(html){
      $(".alamat").html(html);
      $(".amount").html('-');
      getKurir(id);

    }
  });

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
  }else{
    var url = '<?php echo site_url('checkout/pilihKurir'); ?>'
    $.ajax
    ({
    url: url+'/?id='+id+'&amount='+amount+'&name='+nameKur,
    success:function(html){
        $(".amount").html(html);
      }
    });
  }


  //window.location.replace("<?php //echo site_url('checkout/pilihKurir/'); ?>"+id+'/'+amount);
}

// $("#pilihAlamat").change(function(){
// //  window.location.replace("<?php //echo site_url('checkout/finish/'); ?>"+hasil.idTransaksi);
//   var id = this.value;
//     alert("The text has been changed.");
// });
$(document).ready(function() {

  $('#kurir').prop('selectedIndex',0);

	var cookie = document.cookie.split('x-auth=');
	if(cookie.length > 1){

		$.ajax
		({
		url: "<?php echo site_url('cart/listCartToken'); ?>",
		success:function(html){
				$(".listCart").html(html);
			}
		});
	}
});

</script>
