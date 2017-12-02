<style>
.box-ship{
  border: 1px solid #dddddd;
  padding:20px;
  margin:10px 0px;
  color: #4a4847;
}


#box-adrs{
  background: #e9e8e7;
  height:120px;
}

.sub-box{
  background:#f2f2f1;
  color:#746d68;
  padding:5px;
  height:120px;
  font-size: 15px;
  text-decoration: none;
}



.link-box:hover {
  text-decoration: none;
}

.sub-box-ship{
  background:#f2f2f1;
  color:#746d68;
  padding:5px;
  height:120px;
  font-size: 15px;
  text-decoration: none;
}
.sub-box-ship:hover{
  background:#e9e8e7;
  text-decoration: none;
  color:#111111;
  font-weight: bold;
  cursor:pointer;
  text-decoration: none;
}

.link-ship{
  color: #4a4847;
}

.link-ship:hover{
  color: #e1dfdf;
  /*text-decoration: none;*/
}

</style>
<div class="container">
<br><p align='center'><img src="<?php echo base_url('images/general/step1.jpg'); ?>" border="0"></p>
    <div style='border-top:2px solid #e4322b; padding-top:10px; font-size:20px; width:1200px;margin-bottom:40px;'>
      <?php echo anchor('checkout/cart','KERANJANG BELANJA', array('class'=>'link-ship')); ?>/ BUKU ALAMAT</div>
    <div class='box-ship'>
        <div class='row'>
          <div class="col-xs-6"><b>Data Pengirim</b><br>
            <?php
            if(isset($alamat_billing)){
              echo"<div class='sub-box'>". $alamat_billing."</div>";
            }else{?>
              <a href='<?php echo base_url('checkout/billing');?>'><div class='sub-box-ship'><center><br><br><br>Tambah Data Billing</center></div></a>
            <?php }?>
          </div>
          <div class="col-xs-6"><b>Data Penerima</b><br>
            <?php
            $get_shipping = get_cookie('shipping_address_id');
            if($get_shipping)
            {?>
              <a href='<?php echo base_url('checkout/shipping');?>' class='link-box'><div class='sub-box-ship'><?php echo $alamat_shipping; ?></div></a>
              <?php
            }elseif($alamat_shipping){?>
              <a href='<?php echo base_url('checkout/shipping');?>'><div class='sub-box-ship'><?php echo $alamat_shipping; ?></div></a>
              <?php
            }else{ ?>
              <div class='sub-box-ship'><center><br>Sebelum menambah data penerima silakan masukan data billing terlebih dulu.</center></div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
