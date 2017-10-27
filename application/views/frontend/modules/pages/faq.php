<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* --------------------------------

Primary style

-------------------------------- */
*, *::after, *::before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

*::after, *::before {
  content: '';
}

body {
  font-size: 100%;
  font-family: "Open Sans", sans-serif;
  color: #4e5359;
  background-color: #f3f3f5;
}
body::after {
  /* overlay layer visible on small devices when the right panel slides in */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(78, 83, 89, 0.8);
  visibility: hidden;
  opacity: 0;
  -webkit-transition: opacity .3s 0s, visibility 0s .3s;
  -moz-transition: opacity .3s 0s, visibility 0s .3s;
  transition: opacity .3s 0s, visibility 0s .3s;
}
body.cd-overlay::after {
  visibility: visible;
  opacity: 1;
  -webkit-transition: opacity .3s 0s, visibility 0s 0s;
  -moz-transition: opacity .3s 0s, visibility 0s 0s;
  transition: opacity .3s 0s, visibility 0s 0s;
}
@media only screen and (min-width: 768px) {
  body::after {
    display: none;
  }
}

a {
  color: #a9c056;
  text-decoration: none;
}

/* --------------------------------

Main components

-------------------------------- */
header {
  position: relative;
  height: 180px;
  line-height: 180px;
  text-align: center;
  background-color: #a9c056;
}
header h1 {
  color: #ffffff;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 20px;
  font-size: 1.25rem;
}
@media only screen and (min-width: 1024px) {
  header {
    height: 240px;
    line-height: 240px;
  }
  header h1 {
    font-size: 36px;
    font-size: 2.25rem;
    font-weight: 300;
  }
}

.cd-faq {
  width: 90%;
  max-width: 1024px;
  margin: 2em auto;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}
.cd-faq:after {
  content: "";
  display: table;
  clear: both;
}
@media only screen and (min-width: 768px) {
  .cd-faq {
    position: relative;
    margin: 4em auto;
    box-shadow: none;
  }
}

.cd-faq-categories a {
  position: relative;
  display: block;
  overflow: hidden;
  height: 50px;
  line-height: 50px;
  padding: 0 28px 0 16px;
  background-color: #4e5359;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #ffffff;
  white-space: nowrap;
  border-bottom: 1px solid #555b61;
  text-overflow: ellipsis;
}
.cd-faq-categories a::before, .cd-faq-categories a::after {
  /* plus icon on the right */
  position: absolute;
  top: 50%;
  right: 16px;
  display: inline-block;
  height: 1px;
  width: 10px;
  background-color: #7f868e;
}
.cd-faq-categories a::after {
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.cd-faq-categories li:last-child a {
  border-bottom: none;
}
@media only screen and (min-width: 768px) {
  .cd-faq-categories {
    width: 20%;
    float: left;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
  }
  .cd-faq-categories a {
    font-size: 13px;
    font-size: 0.8125rem;
    font-weight: 600;
    padding-left: 24px;
    padding: 0 24px;
    -webkit-transition: background 0.2s, padding 0.2s;
    -moz-transition: background 0.2s, padding 0.2s;
    transition: background 0.2s, padding 0.2s;
  }
  .cd-faq-categories a::before, .cd-faq-categories a::after {
    display: none;
  }
  .no-touch .cd-faq-categories a:hover {
    background: #555b61;
  }
  .no-js .cd-faq-categories {
    width: 100%;
    margin-bottom: 2em;
  }
}
@media only screen and (min-width: 1024px) {
  .cd-faq-categories {
    position: absolute;
    top: 0;
    left: 0;
    width: 200px;
    z-index: 2;
  }
  .cd-faq-categories a::before {
    /* decorative rectangle on the left visible for the selected item */
    display: block;
    top: 0;
    right: auto;
    left: 0;
    height: 100%;
    width: 3px;
    background-color: #a9c056;
    opacity: 0;
    -webkit-transition: opacity 0.2s;
    -moz-transition: opacity 0.2s;
    transition: opacity 0.2s;
  }
  .cd-faq-categories .selected {
    background: #42464b !important;
  }
  .cd-faq-categories .selected::before {
    opacity: 1;
  }
  .cd-faq-categories.is-fixed {
    /* top and left value assigned in jQuery */
    position: fixed;
  }
  .no-js .cd-faq-categories {
    position: relative;
  }
}

.cd-faq-items {
  position: fixed;
  height: 100%;
  width: 90%;
  top: 0;
  right: 0;
  background: #ffffff;
  padding: 0 5% 1em;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  z-index: 1;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: translateZ(0) translateX(100%);
  -moz-transform: translateZ(0) translateX(100%);
  -ms-transform: translateZ(0) translateX(100%);
  -o-transform: translateZ(0) translateX(100%);
  transform: translateZ(0) translateX(100%);
  -webkit-transition: -webkit-transform .3s;
  -moz-transition: -moz-transform .3s;
  transition: transform .3s;
}
.cd-faq-items.slide-in {
  -webkit-transform: translateZ(0) translateX(0%);
  -moz-transform: translateZ(0) translateX(0%);
  -ms-transform: translateZ(0) translateX(0%);
  -o-transform: translateZ(0) translateX(0%);
  transform: translateZ(0) translateX(0%);
}
.no-js .cd-faq-items {
  position: static;
  height: auto;
  width: 100%;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}
@media only screen and (min-width: 768px) {
  .cd-faq-items {
    position: static;
    height: auto;
    width: 78%;
    float: right;
    overflow: visible;
    -webkit-transform: translateZ(0) translateX(0);
    -moz-transform: translateZ(0) translateX(0);
    -ms-transform: translateZ(0) translateX(0);
    -o-transform: translateZ(0) translateX(0);
    transform: translateZ(0) translateX(0);
    padding: 0;
    background: transparent;
  }
}
@media only screen and (min-width: 1024px) {
  .cd-faq-items {
    float: none;
    width: 100%;
    padding-left: 220px;
  }
  .no-js .cd-faq-items {
    padding-left: 0;
  }
}

.cd-close-panel {
  position: fixed;
  top: 5px;
  right: -100%;
  display: block;
  height: 40px;
  width: 40px;
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  z-index: 2;
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: right 0.4s;
  -moz-transition: right 0.4s;
  transition: right 0.4s;
}
.cd-close-panel::before, .cd-close-panel::after {
  /* close icon in CSS */
  position: absolute;
  top: 16px;
  left: 12px;
  display: inline-block;
  height: 3px;
  width: 18px;
  background: #6c7d8e;
}
.cd-close-panel::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.cd-close-panel::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.cd-close-panel.move-left {
  right: 2%;
}
@media only screen and (min-width: 768px) {
  .cd-close-panel {
    display: none;
  }
}

.cd-faq-group {
  /* hide group not selected */
  display: none;
}
.cd-faq-group.selected {
  display: block;
}
.cd-faq-group .cd-faq-title {
  background: transparent;
  box-shadow: none;
  margin: 1em 0;
}
.no-touch .cd-faq-group .cd-faq-title:hover {
  box-shadow: none;
}
.cd-faq-group .cd-faq-title h2 {
  text-transform: uppercase;
  font-size: 12px;
  font-size: 0.75rem;
  font-weight: 700;
  color: #bbbbc7;
}
.no-js .cd-faq-group {
  display: block;
}
@media only screen and (min-width: 768px) {
  .cd-faq-group {
    /* all groups visible */
    display: block;
  }
  .cd-faq-group > li {
    background: #ffffff;
    margin-bottom: 6px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.08);
    -webkit-transition: box-shadow 0.2s;
    -moz-transition: box-shadow 0.2s;
    transition: box-shadow 0.2s;
  }
  .no-touch .cd-faq-group > li:hover {
    box-shadow: 0 1px 10px rgba(108, 125, 142, 0.3);
  }
  .cd-faq-group .cd-faq-title {
    margin: 2em 0 1em;
  }
  .cd-faq-group:first-child .cd-faq-title {
    margin-top: 0;
  }
}

.cd-faq-trigger {
  position: relative;
  display: block;
  margin: 1.6em 0 .4em;
  line-height: 1.2;
}
@media only screen and (min-width: 768px) {
  .cd-faq-trigger {
    font-size: 24px;
    font-size: 1.5rem;
    font-weight: 300;
    margin: 0;
    padding: 24px 72px 24px 24px;
  }
  .cd-faq-trigger::before, .cd-faq-trigger::after {
    /* arrow icon on the right */
    position: absolute;
    right: 24px;
    top: 50%;
    height: 2px;
    width: 13px;
    background: #cfdca0;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition-property: -webkit-transform;
    -moz-transition-property: -moz-transform;
    transition-property: transform;
    -webkit-transition-duration: 0.2s;
    -moz-transition-duration: 0.2s;
    transition-duration: 0.2s;
  }
  .cd-faq-trigger::before {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    right: 32px;
  }
  .cd-faq-trigger::after {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  .content-visible .cd-faq-trigger::before {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  .content-visible .cd-faq-trigger::after {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
  }
}

.cd-faq-content p {
  font-size: 14px;
  font-size: 0.875rem;
  line-height: 1.4;
  color: #6c7d8e;
}
@media only screen and (min-width: 768px) {
  .cd-faq-content {
    display: none;
    padding: 0 24px 30px;
  }
  .cd-faq-content p {
    line-height: 1.6;
  }
  .no-js .cd-faq-content {
    display: block;
  }
}
.test2 {
  margin-top:10px;
    margin-left:30px;
  font-size: 10px;
}
div {
    border: 3px solid #4CAF50;
    padding: 5px;
}

.img1 {
    float: right;
}

.clearfix {
    overflow: auto;
}

.img2 {
    float: right;
}
.tiga3{

    margin-left:30px;
}
</style>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('assets/nav/css/reset34.css');?>" />
  <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url('assets/nav/css/style34.css');?>" />


    <script type="text/javascript" src="<?php echo base_url('assets/nav/js/js1/modernizr.js');?>"></script>
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<title>FAQ Template | CodyHouse</title>
</head>
<body>
<header>
	<h1>FAQ Template</h1>
</header>
<section class="cd-faq">
	<ul class="cd-faq-categories">
		<li><a class="selected" href="#basics">PERTANYAAN UMUM</a></li>
		<li><a href="#mobile">PERTANYAAN LAINNYA</a></li>
		<!-- <li><a href="#account">Account</a></li> -->
		<!-- <li><a href="#payments">Payments</a></li>
		<li><a href="#privacy">Privacy</a></li>
		<li><a href="#delivery">Delivery</a></li> -->
	</ul> <!-- cd-faq-categories -->

	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			<li class="cd-faq-title"><h2>PERTANYAAN UMUM</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">CEK STATUS ORDER</a>
				<div class="cd-faq-content">
					<p>JIKA ORDER KAMU TELAH DIKONFRIMAS, KAMU AKAN MENDAPATKAN EMAIL KONFRIMASI ORDER
            <br/>
            DI EMAIL YANG KAMU GUNAKAN
          </p><br/>

				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Konfrimasi Bayaran</a>
				<div class="cd-faq-content">
          <p>JIKA ORDER KAMU TELAH DIKONFRIMAS, KAMU AKAN MENDAPATKAN EMAIL KONFRIMASI ORDER
            <br/>
            DI EMAIL YANG KAMU GUNAKAN
          </p>
          <p>EMAIL KONFRIMASI ORDER AKAN TERDIRI DARI:
            <br>
            1. NOMOR ORDER
            2. JUMLAH HARGA
            3. JUMLAH PESANAN
            4. ALAMAT PENAGIHAN DAN PENGIRIMAN  <br>
          </p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">MEMBATALKAN PESANAN</a>
				<div class="cd-faq-content">
					<p>
            PENGEMBALIAN DAN PEMBATALAN
          </p><br/>
          <p>
            KEPUASAN PELANGGAN ADALAH PARAMETER BAGI KAMI UNTUK TERUS BERINOVASI DARI HARI KEHARI. KAMI<br>
            MEMAHAMI BAHAWA AKAN ADA PERUBAHAN PEMIKIRAN DALAM SUSUSAN TEKONOLOG PRODUK YANG KAMI TAWARKAN.<br>
            SERTA SETIAP KERUSAKAN YANG TAK TERDUGA. UNTUK ITU. KAMI MENAWARKAN 30 HARI PENGEMBALIAN DANA UNTUK<br>
            BARANG - BARANG YANG BELUM TERBUKA SEGELNYA UNTUK PROSES INVOICE. PEMBATALAN YANG MUNGKIN SUDAH<br>
            DIPESAN TAPI BELUM DIKONFRIMASI OLEH CUSTOMER, UNTUK ITU KAMI DENGAN SENANG HATI AKAN MEMBATALKAN DAN<br>
            MEMBERIKAN PENGEMBALIAN UANG. DENGAN MENENKAN TOMBOL <i class="fa fa-ban" aria-hidden="true"></i> ( CANCEL ) ATAU <i class="fa fa-phone-square" aria-hidden="true"></i> HUBUNGI CUSTOMER SERVICE <br>
            DI 021-3502099 UNTUK BANTUAN SELANJUTNYA
  </p>


				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">FORM PENUKARAN / PENGEMBALIAN</a>
				<div class="cd-faq-content">
					<p>
            1. KLIK RIWAYAT DAN STATUS PESANAN DAN CLICK PENGEMBALIAN PRODUK
            <br/>
              </p>
              <div class="test2">
            Nomor Order : #32847624 &nbsp &nbsp Tanggal Pesanan : 18 SEPT 2017  &nbsp &nbsp HARGA / PRICE : Rp. 700.00
            </div>
          <img src="https://s1.postimg.org/3atv6hmwfz/Untitled-4_copy.png"><br/>
          <center>
          <img src="https://s1.postimg.org/1f8ct5g42n/image.png">
          </center>
        <p> 2.  ISI FORMULIR RETUR ONLINE <br/>
          + PILIH PESANAN YANG INGIN ANDA RETURN BESERTA ALASANNYA.<br/>
          <center>
          <img src="https://s1.postimg.org/54v87v862n/zxc.png">
        </center>
          + PILIH METODE PENGEMBALIAN YANG DIINGINKAN.<br/>
        </p>
          <div class="tiga3">
            - GANTI DENGAN PESANAN YANG SAMA<br>
            - PENGEMBALIAN DANA
          </div>
            + PILIH METODE PENGEMBALIAN YANG DIINGINKAN.<br/><br>
              <p> 3.  CETAK FORMULIR RETURN ( PILIHAN ) <br/></p>
                  <p> 4.  KEMAS BARANGNYA DAN TEMPELKAN RETURN LABEL PADA BAGIAN LUAR KEMASAN <br/></p>
        </div> <!-- cd-faq-content -->
			</li>
      <li>
        <a class="cd-faq-trigger" href="#0">CARA MENGGUNAKAN FITUR PENUKARAN DAN PENGEMBALIAN</a>
        <div class="cd-faq-content">

          <img src="https://s1.postimg.org/2pwq84qijz/image.png">
            <br/>
              <img src="https://s1.postimg.org/6usbk91m67/image.png">


        </div> <!-- cd-faq-content -->
      </li>
      <li>
        <a class="cd-faq-trigger" href="#0">ESTIMASI PROSES PENUKARAN DAN PENGEMBALIAN DANA</a>
        <div class="cd-faq-content">
<center>
          <img src="https://s1.postimg.org/9jy3d3pnrj/image.png">
            <img src="https://s1.postimg.org/6irq47v4cf/image.png">


        </center>
            <br/>



        </div> <!-- cd-faq-content -->
      </li>
		</ul> <!-- cd-faq-group -->

		<ul id="mobile" class="cd-faq-group">
			<li class="cd-faq-title"><h2>PERTANYAAN LAINNYA</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">PERTANYAAN UMUM</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam atque corrupti iusto architecto impedit explicabo repudiandae qui similique aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore, odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium, eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">PENGIRIMAN DAN BIAYA PENGIRIMAN</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempore, placeat quisquam rerum! Eligendi fugit dolorum tenetur modi fuga nisi rerum, autem officiis quaerat quos. Magni quia, quo quibusdam odio. Error magni aperiam amet architecto adipisci aspernatur! Officia, quaerat magni architecto nostrum magnam fuga nihil, ipsum laboriosam similique voluptatibus facilis nobis? Eius non asperiores, nesciunt suscipit veniam blanditiis veritatis provident possimus iusto voluptas, eveniet architecto quidem quos molestias, aperiam eum reprehenderit dolores ad deserunt eos amet. Vero molestiae commodi unde dolor dicta maxime alias, velit, nesciunt cum dolorem, ipsam soluta sint suscipit maiores mollitia assumenda ducimus aperiam neque enim! Quas culpa dolorum ipsam? Ipsum voluptatibus numquam natus? Eligendi explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae, molestias!</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">PEMABAYARAAN</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
				</div> <!-- cd-faq-content -->
			</li>
      <li>
				<a class="cd-faq-trigger" href="#0">GARANSI DAN REPARASI</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempore, placeat quisquam rerum! Eligendi fugit dolorum tenetur modi fuga nisi rerum, autem officiis quaerat quos. Magni quia, quo quibusdam odio. Error magni aperiam amet architecto adipisci aspernatur! Officia, quaerat magni architecto nostrum magnam fuga nihil, ipsum laboriosam similique voluptatibus facilis nobis? Eius non asperiores, nesciunt suscipit veniam blanditiis veritatis provident possimus iusto voluptas, eveniet architecto quidem quos molestias, aperiam eum reprehenderit dolores ad deserunt eos amet. Vero molestiae commodi unde dolor dicta maxime alias, velit, nesciunt cum dolorem, ipsam soluta sint suscipit maiores mollitia assumenda ducimus aperiam neque enim! Quas culpa dolorum ipsam? Ipsum voluptatibus numquam natus? Eligendi explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores officia! Beatae, molestias!</p>
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->








	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
    <script type="text/javascript" src="<?php echo base_url('assets/nav/js/js1/jquery-2.1.1.js');?>"></script>
<script src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/nav/js/js1/jquery.mobile.custom.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/nav/js/js1/main.js');?>"></script>


</body>
</html>
