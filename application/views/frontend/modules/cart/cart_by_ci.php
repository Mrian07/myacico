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
	width: 190px;
	/*height: 30px;*/
	float: right;
	padding: 5px;
	background-color: red;
	border-radius: 10px;
	color: white;
  font-size:15px;
  padding:10px;
}

.checkout-button:hover{
  text-decoration: none;
  background-color: #ca3833;
  color:#f1eeee;
}
.checkout-button:active{
  text-decoration: none;
  background-color: #ca3833;
  color:#f1eeee;
}
.checkout-button:visited{
  text-decoration: none;
  background-color: #ca3833;
  color:#f1eeee;
}
</style>
<div class="container">
<br><p align='center'><img src="<?php echo base_url('images/general/step1.jpg'); ?>" border="0"></p>
    <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'>SHIPPING</div>
    <div class='box-ship'>
      <div class='box-ship-info'>
        Kurir Pengiriman</br>
        <select name='' class="form-control">
          <option>JNE</option>
          <option>Ninja Express</option>
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
        Ongkos Kirim</br>-
      </div>
      <div class='box-ship-info'>
        Pilih Alamat Lain</br>
        <select name='' class="form-control">
          <option>Pilih Alamat Lain</option>
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
          <div class="col-xs-12" id='box-shadow'>Komplek Puri</div>
        </div>
      </div>
      <div style='clear:both'></div>
  </div>
  <a href='<?php echo base_url('cart/newcheckout');?>' class="checkout-button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span><b>BAYAR</b> SEKARANG</span></a>
  <div style='clear:both'></div>
  <div class='box-cart'>

    <div class="col-md-12 listCart">
      <center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center>
    </div>

    <div style='clear:both'></div>
  </div>
</div>


<script>
$(document).ready(function() {

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
