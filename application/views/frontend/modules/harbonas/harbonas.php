
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.min.css');?>">

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_home.css');?>" />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url('assets/nav/css/animate.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/nav/css/bootsnav2.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/nav/css/style.css');?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/nav/js/bootsnav.js');?>"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images/general/favicon.ico');?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets_adminlte/font-awesome-4.7.0/css/font-awesome.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_harbonas.css');?>" />
		<!-- s: Datepicker-->
		<link rel="stylesheet" href="<?php echo base_url('date_picker/bootstrap-datetimepicker.min.css');?>" type='text/css'>
		<!-- CSS -->

		<!-- s: Alert -->
		<script type="text/javascript" src="<?php echo base_url('assets/alert/js/jquery-confirm.js');?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/alert/css/jquery-confirm.css');?>" />

<!-- asdasd -->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HARBOLNAS</title>

<link href="css/harbolnas.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
<header>
    <div class="primary_header">
      <img src="topbanner.png" width="auto" height="auto" alt=""/>    </div>
</header>
<a href="https://myacico.co.id">
<img src="<?php echo base_url('images/general/FBO.png');?>" width="100%" height="auto"></a>
<br/>
<br/>
 <div>
  <section>
    <article class="left_article">
      <center>
  		<button data-toggle="collapse" data-target="#demo" class='my-btn-brand'><?php echo "Syarat Dan Ketentuan"; ?> <span style='font-size:24px;'><i class="fa fa-angle-double-right" aria-hidden="true"></i></span></button>
  		<div id="demo" class="collapse asd" style='margin-top:20px; text-align:justify; border-radius:5px; padding:20px; color:#111111; '>
      A. Promo berlaku mulai tanggal 12 - 14 Desember 2017<br/>
      B. Untuk mendapatkan <b>Ekstra Diskon</b>, masukkan kode voucher yang diinginkan pada halaman Pengiriman & Pembayaran<br/>
      C. <b>1 User ID</b> dapat menggunakan <b>kode voucher maksimum 1x (satu kali)</b> dengan pembelian maksimum <b>3 pcs untuk setiap SKU (kode)</b> produk per transaksi.<br/>
			D. Promo ini tidak dapat digabungkan dengan promo lainnya.<br/>
      E. myACICO.co.id berhak mengubah syarat dan ketentuan sewaktu-waktu tanpa pemberitahuan sebelumnya<br/>
      F. myACICO.co.id berhak secara sepihak membatalkan pesanan apabila tidak sesuai dengan <b> Syarat & Ketentuan berlaku </b> dan/atau ditemukan <b> adanya indikasi kecurangan/pelanggaran</b> yang merugikan pihak myACICO.co.id, termasuk (namun tidak terbatas pada) pembuatan lebih dari 1 (satu) akun oleh 1 (satu) customer yang sama
  		</div>
  	</center>

    </article>
    <br>

    <br>
    <div class="promo">
      <span> Promo Partner </span>
    </div>
    <br/>
		<!-- asdasd -->
    <div class="test">
    <div class="pp" onclick="location.href='<?php echo base_url('HarbolnasPartners/index/1');?>'" style='cursor: pointer;'>

    <!-- <button type="button" class="btn btn-default pp" ></button> -->
  </div>
<?
if($id == 1){
  echo "halo";

}if($id == 2){

}
  echo "halo2";
?>

  <div class="">
  <button type="button" class="btn btn-default pp1" onclick="location.href='<?php echo base_url('HarbolnasPartners/index/2');?>'" style='cursor: pointer;'>></button>
</div>

<div class="clearfix"></div>
</div>

    <div class="partner">
    <br>

    <br>
    <div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:0px; margin-bottom:10px;'>
      <i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo "MOM's FAVORITE"; ?>
    </div>
    <div style='clear:both'></div>

    <div class="span12" style='background:#e9f6fe; padding:10px; margin-top:10px'>


      <div class="promo-front owl-carousel" align="center">
        <?php

        $jmlslide0=count($dathome2['productList']);

        $n=1;
        foreach($dathome2['productList'] as $key => $itemslide0){
          if($n=="$jmlslide0"){
            $active='active';
          }else{
            $active='';
          }
          ?>

        <div class="item" style='background:#ffffff; padding:10px; height:300px; width:175px; margin-left:5px;  margin-right:5px; text-align:center;float:left;'>

            <a href="<?php echo base_url('product/detail/'. $itemslide0['m_product_id'].'/'. $itemslide0['alias']);?>"><center><img src="<?php echo $itemslide0['imageurl']; ?>"  style="height:120px; width: 120px"></center></a>
                <p class="box-title" style='color: #4b4b4b; height:35px'><?php
                $str1 = $itemslide0['name'];
                $str2 = substr($str1, 0, 41);
                $str = strlen($str2);
                if($str <= 40){
                 echo $itemslide0['name'];
                }else{
                  // $str = substr($str, 0, 49);
                   echo $str2."....";
                }
                ?></span></p>
                <?php if($itemslide0['specialPrice'] == 0){
                ?>   <div class="box-title2" style='color: #8a0202'>Rp.<?php echo money($itemslide0['pricelist']); ?></div>
              <?php  }else{  ?>
                <p class="box-title2"><s >Rp.<?php echo money($itemslide0['pricelist']); ?></s></p><div class="box-title2" style='color: #8a0202; '><p >Rp.<?php echo money($itemslide0['specialPrice']); ?></p></div>
            <?php } ?>
            <?php if($itemslide0['discount'] == 0){
              echo "";
            } else { ?>

              <span class=" " style="color:white;">  <?php echo $itemslide0['discount']; ?> %</span>

            <?php }
            if($itemslide0['istodayshipping'] == 'Y')
              {
              ?>
              <center>
                <img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
             </center>
              <?php }?>
        </div>
        <?php $n++;  } ?>
      </div>

      <div style='clear:both;'></div>

    </div>


      <div style='clear:both;'>

			</div>

    </div>

		<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:0px; margin-bottom:10px;'>
      <i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo "PAKET HEMAT"; ?>
    </div>
    <div style='clear:both'></div>

    <div class="span12" style='background:#e9f6fe; padding:10px; margin-top:10px'>


      <div class="promo-front owl-carousel" align="center">
        <?php

        $jmlslide0=count($dathome9['productList']);
        $n=1;
        foreach($dathome9['productList'] as $key => $itemslide0){
          if($n=="$jmlslide0"){
            $active='active';
          }else{
            $active='';
          }
          ?>

        <div class="item" style='background:#ffffff; padding:10px; height:300px; width:175px; margin-left:5px;  margin-right:5px; text-align:center;float:left;'>

            <a href="<?php echo base_url('product/detail/'. $itemslide0['m_product_id'].'/'. $itemslide0['alias']);?>"><center><img src="<?php echo $itemslide0['imageurl']; ?>"  style="height:120px; width: 120px"></center></a>

                <p class="box-title" style='color: #4b4b4b; height:35px'><?php
                $str1 = $itemslide0['name'];
                $str2 = substr($str1, 0, 41);
                $str = strlen($str2);
                if($str <= 40){
                 echo $itemslide0['name'];
                }else{
                  // $str = substr($str, 0, 49);
                   echo $str2."....";
                }
                ?></span></p>
                <?php if($itemslide0['specialPrice'] == 0){
                ?>   <div class="box-title2" style='color: #8a0202'>Rp.<?php echo money($itemslide0['pricelist']); ?></div>
              <?php  }else{  ?>
                <p class="box-title2"><s >Rp.<?php echo money($itemslide0['pricelist']); ?></s></p><div class="box-title2" style='color: #8a0202; '><p >Rp.<?php echo money($itemslide0['specialPrice']); ?></p></div>
            <?php } ?>
            <?php if($itemslide0['discount'] == 0){
              echo "";
            } else { ?>

              <span class=" " style="color:white;">  <?php echo $itemslide0['discount']; ?> %</span>

            <?php }
            if($itemslide0['istodayshipping'] == 'Y')
              {
              ?>
              <center>
                <img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
             </center>
              <?php }?>
        </div>
        <?php $n++;  } ?>
      </div>

      <div style='clear:both;'></div>

    </div>
		<div style='padding:15px; font-family:tahoma; font-size:20px; border-top: 3px solid #c40202; color:#535151; margin-top:0px; margin-bottom:10px;'>
			<i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo "TRAVEL ESSENTIAL"; ?>
		</div>
		<div style='clear:both'></div>

		<div class="span12" style='background:#e9f6fe; padding:10px; margin-top:10px'>


			<div class="promo-front owl-carousel" align="center">
				<?php

				$jmlslide0=count($dathome3['productList']);
				$n=1;
				foreach($dathome3['productList'] as $key => $itemslide0){
					if($n=="$jmlslide0"){
						$active='active';
					}else{
						$active='';
					}
					?>

				<div class="item" style='background:#ffffff; padding:10px; height:300px; width:175px; margin-left:5px;  margin-right:5px; text-align:center;float:left;'>

						<a href="<?php echo base_url('product/detail/'. $itemslide0['m_product_id'].'/'. $itemslide0['alias']);?>"><center><img src="<?php echo $itemslide0['imageurl']; ?>"  style="height:120px; width: 120px"></center></a>

								<p class="box-title" style='color: #4b4b4b; height:35px'><?php
								$str1 = $itemslide0['name'];
								$str2 = substr($str1, 0, 41);
								$str = strlen($str2);
								if($str <= 40){
								 echo $itemslide0['name'];
								}else{
									// $str = substr($str, 0, 49);
									 echo $str2."....";
								}
								?></span></p>
								<?php if($itemslide0['specialPrice'] == 0){
								?>   <div class="box-title2" style='color: #8a0202'>Rp.<?php echo money($itemslide0['pricelist']); ?></div>
							<?php  }else{  ?>
								<p class="box-title2"><s >Rp.<?php echo money($itemslide0['pricelist']); ?></s></p><div class="box-title2" style='color: #8a0202; '><p >Rp.<?php echo money($itemslide0['specialPrice']); ?></p></div>
						<?php } ?>
						<?php if($itemslide0['discount'] == 0){
							echo "";
						} else { ?>

							<span class=" " style="color:white;">  <?php echo $itemslide0['discount']; ?> %</span>

						<?php }
						if($itemslide0['istodayshipping'] == 'Y')
							{
							?>
							<center>
								<img src="<?php echo base_url('images/general/asap.png');?>" style='height:20px; width: auto;'>
						 </center>
							<?php }?>
				</div>
				<?php $n++;  } ?>
			</div>

			<div style='clear:both;'></div>

		</div>
</div>

</div>
</div>


</div>
</body>
</html>
