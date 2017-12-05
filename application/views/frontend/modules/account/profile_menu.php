<?php if(isset($user)){ ?>
  <div class='side-profile-border-button'>
    <div class='my-btn-logout logout'>Log out</div>
  </div>
 <?php }else{ ?>
   <div class='side-profile-border-button'>
     <div class='my-btn-logout' onclick="location.href='<?php echo base_url('customer/signIn'); ?>';">Log in</div>
     <div class="row" style='margin-top:10px;font-size:10px;'>
      <div class="col-xs-6" style='text-align:right; border-right:1px solid #dddddd;'><?php echo anchor('customer/signIn','Daftar', array('class'=>'btn-nav-red')); ?></div>
      <div class="col-xs-6" style='text-align:left'><?php echo anchor('customer/lostPassword','Lupa Password', array('class'=>'btn-nav-red')); ?></div>
    </div>

   </div>

<?php } ?>
<center><b>List Menu</b></center>
<?php echo anchor('account', 'Dashboard');?><br>
<?php echo anchor('account/informasiAkun', $lang_acc);?><br>
<?php echo anchor('account/bukuAlamat',$lang_add);?><br>
<?php echo anchor('account/riwayatStatusPesanan',$lang_history);?><br>
<?php echo anchor('account/wishlist', 'Wishlist');?><br>
<?php echo anchor('account/avatar', 'Avatar');?>
