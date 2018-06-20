<style type="text/css">
		.pop-container {
			width: 1200px;
			height: 370px;
			font-family: 'arial';
			background-color: #fff;
			border : 1px solid #f1f1f1;
			padding: 10px;
      margin-top:10px;
		}
		.pop-title{
			padding: 10px;
			color: #666;
		}
		.pop-box{
			width: 350px;
			height: 400px;
			border : 1px solid #f1f1f1;
			border-radius: 10px;
			margin-left: 10px;
			display: inline-block;
		}
		.pop-img{
			float: left;
			text-align: center;
		}
		.gambar{
			float: left;
			width: auto;
			height: 130px;
		}
		.pop-left{
			float: left;
			width: 40%;
			height: 600px;
		}
		.pop-right{
			float: right;
			width: 59%;
			height: 600px;
		}
		.big-boxes{
			width: 95%;
			height: 170px;
			margin-top: 50px;
			padding: 10px;
			font-size: 12px;
			color: #999;
			float: left;
			background-color: #f1f1f1;
			z-index: 9;
		}
		.mid-boxes{
			text-align: center;
			width: 55%;
			height: 60px;
			float: left;
			margin-left: 15px;
			padding: 5px;
			font-size: 12px;
			color: #999;
		}
		.small-boxes{
			text-align: center;
			width: 17%;
			height: 60px;
			float: left;
			margin-left: 5px;
			padding: 5px;
			font-size: 12px;
			color: #999;
		}
		.small-boxes select{
			/*-webkit-appearance: none;
   			-moz-appearance:none;
   			appearance:none;*/
   			height: 25px;
   			width: 100px;
   			margin-top: 10px;
   			color: #999;
   			text-align: center;
   			text-align-last: center;
   			border : none;
   			background-color: transparent;
		}
		.small-boxes input{
			-webkit-appearance: none;
   			-moz-appearance:none;
   			appearance:none;
   			height: 25px;
   			width: 100px;
   			margin-top: 10px;
   			color: #999;
   			text-align: center;
   			text-align-last: center;
   			border-radius: 5px;
		}
		.small-boxes p{
			font-size: 12px;
			color: #999;
			font-weight: bold;
		}

		.mid-boxes textarea{
			-webkit-appearance: none;
   			-moz-appearance:none;
   			appearance:none;
   			height: 45px;
   			width: 400px;
   			margin-top: 10px;
   			color: #999;
   			text-align: center;
   			text-align-last: center;
   			border-radius: 5px;
		}
		.alamat{
			width: 100%;
			font-size: 12px;
			color: #999;
			margin-top: -30px;
			position: absolute;
		}
		.pilih1{
			/*position: absolute;*/
			margin-top: -45px;
			margin-right: 170px;
			float: right;
		}
		.pilih2{
			/*position: absolute;*/
			margin-top: -45px;
			margin-right: 0px;
			float: right;
		}
		.pilih1 select{
   			height: 25px;
   			width: 120px;
   			margin-top: 10px;
   			color: #999;
   			text-align: center;
   			text-align-last: center;
   			border : none;
   			background-color: transparent;
		}
		.pilih2 select{
   			height: 25px;
   			width: 130px;
   			margin-top: 10px;
   			color: #999;
   			text-align: center;
   			text-align-last: center;
   			border : none;
   			background-color: transparent;
		}
		.shadow-box{
			width: 250px;
			height: 130px;
			box-shadow: 1px 1px 5px #888888;
			background-color: #fff;
			float: left;
			margin-top: 20px;
			padding: 10px;
		}
		.alamat2{
			width: 100%;
			font-size: 12px;
			color: #999;
			margin-top: 30px;
			margin-left: 300px;
			position: absolute;
		}
		.checkout-button{
			width: 190px;
			/*height: 30px;*/
			float: right;
			padding: 5px;
			background-color: red;
			border-radius: 10px;
			color: white;
			margin-top: 50px;
      font-size:15px;
      padding:10px;
		}

    /*.checkout-button{
			margin-top: 10px;
			padding: 5px;
			background-color: red;
			border-radius: 10px;
			color: white;
      font-size:15px;
      padding:10px;
      float: right;
		}*/

		.checkout-button img{
			height: 20px;
		}
		.back-button{
			width: 150px;
			height: 20px;
			float: right;
			padding: 10px;
			background-color: red;
			border-radius: 10px;
			color: white;
			margin-top: 30px;
			margin-right: 20px;
      margin-top: 50px;
		}
	</style>
  <div class="container">
    <br><p align='center'><img src="<?php echo base_url('images/general/step1.jpg'); ?>" border="0"></p>
    <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'>KERANJANG BELANJA</div>
  <div class="pop-container">
		<div class="pop-left">
			<!-- <img class="gambar" src="https://cdn.myacico.co.id/myacicoproductimg/APPLSMAR00002007354.jpg"> -->
      <img class="gambar" src="https://cdn.myacico.co.id/myacicoproductimg/samssmart0001000256.jpg">


			<div class="pop-title">SAMSUNG Galaxy S8 5.8 Inch 64GB/4GB [SM-G950] - Black </div>
		</div>
		<div class="pop-right">
			<div>
				<div class="small-boxes">
					<label>Kurir Pengiriman</label>
					<select>
						<option>JNE</option>
						<option>Ninja Express</option>
					</select>
				</div>
				<div class="small-boxes">
					<label>Paket Pengiriman</label>
					<select>
						<option>Regular</option>
						<option>YES</option>
					</select>
				</div>
				<div class="small-boxes">
					<label>Biaya Asuransi</label>
					<p>Wajib Asuransi</p>
				</div>
				<div class="small-boxes">
					<label>Ongkos Kirim</label>
					<p>Rp.9.000</p>
				</div>
				<div class="small-boxes">
					<label>Subtotal</label>
					<p>Rp 8.499.150</p>
				</div>
				<div class="small-boxes">
					<label>Jumlah Barang</label>
					<input type="text" name="qty" value="1">
				</div>
				<div class="small-boxes">
					<label>Harga Barang</label>
					<p>Rp 8.499.150</p>
				</div>
				<div class="mid-boxes">
					<span>Catatan</span><br>
					<textarea></textarea>
				</div>
			</div>

			<div class="big-boxes">
				<p class="alamat">Alamat Tujuan</p>
				<div class="pilih1">
					<select>
						<option>Pilih Alamat Lain</option>
						<option>Alamat 1</option>
						<option>Alamat 2</option>
					</select>
				</div>
				<div class="pilih2">
					<select>
						<option>Tambah Alamat Baru</option>
						<option>Alamat 1</option>
						<option>Alamat 2</option>
					</select>

				</div>
				<div class="shadow-box">
					<b>Yasser Arafat Ahmad</b><br>
						Jl. Tanah Abang 4 No.60 O-P 10160 Gambir Kota Administrasi <br>Jakarta Pusat DKI Jakarta
				</div>
				<p class="alamat2">
					 <b>Yasser Arafat Ahmad</b><br>
						Jl. Tanah Abang 4 No.60 O-P 10160 <br>Gambir Kota Administrasi <br>Jakarta Pusat DKI Jakarta
				</p>
			</div>

      <a href='<?php echo base_url('cart/newcheckout');?>' class="checkout-button btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span><b>BAYAR</b> SEKARANG</span></a>

        <!-- <a href='<?php //echo base_url('cart/newcheckout');?>' id='btn-pop-bayar' class="btn btn-default">Bayar <i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
				<!-- <a href='<?php //echo base_url('cart/newcheckout');?>' class='checkout-button'><img src="https://myacico.co.id/images/general/cart.png"><span><b>BAYAR</b> SEKARANG</span></a> -->

			<!-- <div class="back-button">
				<span>KEMBALI BELANJA</span>
			</div> -->
		</div>

		<!-- <div class="checkout-button"><img src="https://myacico.co.id/images/general/cart.png"><span>MULAI CHECKOUT</span></div> -->
	</div>
  </div>
