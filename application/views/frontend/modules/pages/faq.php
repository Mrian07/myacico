<style>
@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
/* written by riliwan balogun http://www.facebook.com/riliwan.rabo*/
.board{
    width: 75%;
margin: 60px auto;
height: 500px;
background: #fff;
/*box-shadow: 10px 10px #ccc,-10px 20px #ddd;*/
}
.board .nav-tabs {
    position: relative;
    /* border-bottom: 0; */
    /* width: 80%; */
    margin: 40px auto;
    margin-bottom: 0;
    box-sizing: border-box;

}

.board > div.board-inner{
    /*background: #fafafa url(http://subtlepatterns.com/patterns/geometry2.png);*/
    /*background-size: 30%;*/
    background: #fff;

}

p.narrow{
    width: 60%;
    margin: 10px auto;
}

.liner{
    height: 2px;
    background: #CFD8DC;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    /* background-color: #ffffff; */
    border: 0;
    border-bottom-color: transparent;
}

span.round-tabs{
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: white;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}

span.round-tabs.one{
    color:  #9C27B0;
    border: 2px solid #9C27B0;
}

li.active span.round-tabs.one{
    background: #fff !important;
    border: 2px solid #CFD8DC;
    color: #9C27B0;
}

span.round-tabs.two{
    color: #E91E63;
    border: 2px solid #E91E63;
}

li.active span.round-tabs.two{
    background: #fff !important;
    border: 2px solid #CFD8DC;
    color: #E91E63;
}

span.round-tabs.three{
    color: #FF5722;
    border: 2px solid #FF5722;
}

li.active span.round-tabs.three{
    background: #fff !important;
    border: 2px solid #CFD8DC;
    color: #FF5722;
}

span.round-tabs.four{
    color: #009688;
    border: 2px solid #009688;
}

li.active span.round-tabs.four{
    background: #fff !important;
    border: 2px solid #CFD8DC;
    color: #009688;
}

span.round-tabs.five{
    color: #4CAF50;
    border: 2px solid #4CAF50;
}

li.active span.round-tabs.five{
    background: #fff !important;
    border: 2px solid #CFD8DC;
    color: #4CAF50;
}

.nav-tabs > li.active > a span.round-tabs{
    background: #fafafa;
}
.nav-tabs > li {
    width: 20%;
}
/*li.active:before {
    content: " ";
    position: absolute;
    left: 45%;
    opacity:0;
    margin: 0 auto;
    bottom: -2px;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    z-index: 1;
    transition:0.2s ease-in-out;
}*/
li:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #ddd;
    transition:0.1s ease-in-out;

}
li.active:after {
    content: " ";
    position: absolute;
    left: 44%;
    opacity:1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #424242;

}
.nav-tabs > li a{
   width: 70px;
   height: 70px;
   margin: 20px auto;
   border-radius: 100%;
   padding: 0;
}

.nav-tabs > li a:hover{
    background: transparent;
}

.tab-content{
}
.tab-pane{
   position: relative;
padding-top: 50px;
}
.tab-content .head{
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 25px;
    text-transform: uppercase;
    padding-bottom: 10px;
}
.btn-outline-rounded{
    padding: 10px 40px;
    margin: 20px 0;
    border: 2px solid transparent;
    border-radius: 25px;
}

.btn.green{
    background-color:#5cb85c;
    /*border: 2px solid #5cb85c;*/
    color: #ffffff;
}



@media( max-width : 585px ){

    .board {
width: 90%;
height:auto !important;
}
    span.round-tabs {
        font-size:16px;
width: 50px;
height: 50px;
line-height: 50px;
    }
    .tab-content .head{
        font-size:20px;
        }
    .nav-tabs > li a {
width: 50px;
height: 50px;
line-height:50px;
}

li.active:after {
content: " ";
position: absolute;
left: 35%;
}

.btn-outline-rounded {
    padding:12px 20px;
    }
}
.faq-content #accordion .panel-title > a.accordion-toggle::before, .faq-content #accordion a[data-toggle="collapse"]::before  {
    content:"−";
    float: left;
    font-family: 'Glyphicons Halflings';
	margin-right :1em;
	margin-left:10px;
	color:#fff;
	font-size:13px;
	font-weight:300;
	display:inline-block;
	width:20px;
	height:20px;
	line-height:20px;

	border-radius:50%;
	text-align:center;
	font-size:10px;
	background:#ff9900;
}
.faq-content #accordion .panel-title > a.accordion-toggle.collapsed::before, .faq-content  #accordion a.collapsed[data-toggle="collapse"]::before  {
    content:"+";
	color:#fff;
	font-size:10px;
	font-weight:300;
	background:#333;
}

.faq-content{float:left; width:100%;}
.faq-content .panel-heading{padding-left:0px; border-radius:0px !important;}
.faq-content .panel-heading a{text-decoration:none;}
.faq-content .panel{border-radius:0px !important;}
.faq-content .panel-default{}
.faq-content .panel-heading{background:#f3f3f3 !important; color:#666666;}
.faq-content .panel-body{font-size:14px; color:#666666;}
.faq-saelect{background:#f3f3f3; padding:15px; border-bottom:2px solid #666666; float:left; width:100%; margin-bottom:20px; margin-top:-10px;}
.faq-saelect span{font-size:16px; color:#333; margin-right:20px;}
.faq-saelect select{border:1px solid #dcdcdc; color:#999999; width:300px; height:40px;}
.faq-content .panel{border-top:none !important; border-right:none !important; border-left:none !important;}
.faq-content .panel-body{border:1px solid #f3f3f3;}
</style>

<section style="background:#efefe9;">
        <div class="container">
            <div class="row">
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="Home">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-home"></i>
                      </span>
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="User profile">
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-user"></i>
                     </span>
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="Gift">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-gift"></i>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="Chat">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-comment"></i>
                         </span>
                     </a></li>

                

                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">


					                          <h3 class="head text-center">Syarat Dan Ketentuan<sup>™</sup> <span style="color:#f48260;">♥</span></h3>
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="about-page-content testimonial-page">
										 					<div class="faq-content">
										 								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										 									<div class="panel panel-default">
										 									<div class="panel-heading" role="tab">
										 										<h4 class="panel-title">
										 										<a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq1">
										 											<span>Hak Cipta</span>
										 										</a>
										 										</h4>
										 									</div>
										 									<div id="faq1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										 										<div class="panel-body">
										 									HAK CIPTA OLEH MYACICO.COM SELURUH HAK CIPTA TIDAK ADA BAGIAN DARI WEBSITE INI YANG DAPAT DIPUBLIKASIAKN
																		DIGANDAKAN ATAU DISEBARLUASKAN DALAM SEGALA CARA, TERMASUK MENYALIN DAN MEMINDAHKAN DALAM BENTUK APAPU TANPA IZIN TERTULIS
																		DARI PENERBIT DAN PEMILIK WEBSITE, TERKECUALI PENAWARAN DAN FOTO YANG DITERBITKAN DENGAN KREDIT YANG DIBERIKAN, DAN HANYA
																		DIGUNAKAN SENDIRI DAN NON KOMERSIAL, DI IZINKAN OLEH HUKUM CIPTA, UNTUK PERMINTAAN IZIN TERTULIS, KEPADA PENERBIT DENGAN SUBJEK YANG JELAS UNTUK PENERBITAN konteN KAMI DAPAT MENGUBAH
																		PERSYARATAN PENGGUNAAN KONDISIONAL DAN PEMERIKSAAN SEBELUM MENGGUNAKAN KEMBALI SETIAP KONTEN DARI WEBSITE INI
										 									</div>
										 									</div>
										 									</div>
																			<div class="panel panel-default">
<div class="panel-heading" role="tab">
	<h4 class="panel-title">
	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq2">
		<span>Situs Pihak Ke tiga</span>
	</a>
	</h4>
</div>
<div id="faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	<div class="panel-body">
	 MYACICO.COM DIPERBOLEHKAN UNTUK MEMBERIKAN LINK KE SITUS INTERNET YANG DITERBITKAN OLEH PIHAK KETIGA
	 DAN DIPERBOLEHKAN UNTUK MENYAJIKAN DARI PIHAK KETIGA DI WEBSITE INI. SITUS PIHAK KETIGA TIDAK DIPELIHARA,
	 DIOPERASIKAN ATAU DIKENDALIKAN OLEH MYACICO.COM DAN TIDAK MEMBUAT PERNYATAAN DALAM HAL SITUS SITUS TERSEBUT
	</div>
</div>
</div>





										 								</div>

										 						</div>
										 		</div>





													</div>

                      </div>
                      <div class="tab-pane fade" id="profile">
                          <h3 class="head text-center"> Profile</h3>
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="about-page-content testimonial-page">
															<div class="faq-content">
																		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
																			<div class="panel panel-default">
																			<div class="panel-heading" role="tab">
																				<h4 class="panel-title">
																				<a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq3">
																					<span>Penggunaan Menu Wishlist</span>
																				</a>
																				</h4>
																			</div>
																			<div id="faq3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
																				<div class="panel-body">
																			Suka dengan product nya namum tidak ingin beli sekarang? ingin disimpan untuk pembelanjaan selanjutnya? kamu bsa gunakan
																		suka dengan product nya namum tidak ingin beli sekarang? ingin disimpan untuk pembelanjaan selanjutnya? kamu bsa gunakan "wishlist" adalah menu dimana kamu bisa menempatkan item yang kamu inginkan untuk pembelian selanjutnya. untuk menandakan produk yang diinginkan, kamu cukup pilih menu "tambahahkan ke wishlist" yang terletak di menu sisi kanan produk
																			  <img src="https://s1.postimg.org/9g5qa7alpb/02z.png" alt="Nature" style="width:100%">
																			</div>
																			</div>
																			</div>






																		</div>

																</div>
												</div>





													</div>




                      </div>
                      <div class="tab-pane fade" id="messages">


											<div class="container-fluid inner-container" >



														<div class="col-md-12">

														   <div class="about-page-content testimonial-page">
																	<div class="faq-content">
																				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
																				  <div class="panel panel-default">
																					<div class="panel-heading" role="tab">
																					  <h4 class="panel-title">
																						<a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq4">
																						  <span>Pengembalian barang</span>
																						</a>
																					  </h4>
																					</div>
																					<div id="faq4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
																					  <div class="panel-body">
																							<center>  <img src="https://s1.postimg.org/7x0982647j/button12.png" alt="Nature" style="width:20%">
																								<br/>
																								Contoh Stiker pengembalian barang ke tim gudang yang harus kamu telpelkan di kardus kemasan luar agar<br/>
																								terlihat oleh pihak jasa ekspedisi
																						<br/> <br/>		<img src="https://s1.postimg.org/58p3ythkqn/image.png" alt="Nature" style="width:20%">

																							</center>
																					</div>
																					</div>
																				  </div>





																				</div>

																		</div>
														</div>
													  </div>

											</div>
                      </div>
                      <div class="tab-pane fade" id="settings">

													<div class="about-page-content testimonial-page">
														 <div class="faq-content">
																	 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
																		 <div class="panel panel-default">
																		 <div class="panel-heading" role="tab">
																			 <h4 class="panel-title">
																			 <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#faq5">
																				 <span>Contact US !!</span>
																			 </a>
																			 </h4>
																		 </div>
																		 <div id="faq5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
																			 <div class="panel-body">
																				 <center>  <img src="https://s1.postimg.org/2c76pt83hb/vvvv.png" alt="Nature" style="width:50%">
																					 <br/>


																				 </center>
																		 </div>
																		 </div>
																		 </div>





																	 </div>

															 </div>
											 </div>


                      </div>
                      <div class="tab-pane fade" id="doner">
  <div class="text-center">
    <i class="img-intro icon-checkmark-circle"></i>
</div>
<h3 class="head text-center">thanks for staying tuned! <span style="color:#f48260;">♥</span> Bootstrap</h3>
<p class="narrow text-center">
  Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
</p>
</div>
<div class="clearfix"></div>
</div>

</div>
</div>
</div>
</section>
<script>
$(function(){
$('a[title]').tooltip();
});


</script>
