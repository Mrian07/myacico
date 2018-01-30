<div class='border-sidebar'>
<?php if($user->role=='B2C'){ ?>
<ul class='my-menu-desktop'>
    <li <?php echo$active_dashboard; ?>><?php echo anchor('account', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 Dashboard');?></li>
    <li <?php echo$active_informasiAkun; ?>><?php echo anchor('account/informasiAkun', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 '.$lang_acc);?></li>
    <li <?php echo$active_bukuAlamat; ?>><?php echo anchor('account/bukuAlamat', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 '.$lang_add);?></li>
    <li <?php echo$active_riwayatStatusPesanan; ?>><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-caret-right" aria-hidden="true"></i> '
 .$lang_history);?></li>

    <li <?php echo$active_wishlist; ?>><?php echo anchor('account/wishlist', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 Wishlist');?></li>
 <li <?php echo $active_avatar; ?>><?php echo anchor('account/avatar', '<i class="fa fa-caret-right" aria-hidden="true"></i>
Avatar');?></li>
</ul>

<?php }elseif($user->role=='B2B'){ ?>

  <ul class='my-menu-desktop'>
      <li <?php echo$active_dashboard; ?>><?php echo anchor('account', '<i class="fa fa-caret-right" aria-hidden="true"></i>
   Dashboard');?></li>
      <li <?php echo$active_informasiAkun; ?>><?php echo anchor('account/informasiAkun', '<i class="fa fa-caret-right" aria-hidden="true"></i>
   '.$lang_acc);?></li>
      <li <?php echo$active_bukuAlamat; ?>><?php echo anchor('account/bukuAlamat', '<i class="fa fa-caret-right" aria-hidden="true"></i>
   '.$lang_add);?></li>
      <li <?php echo$active_riwayatStatusPesanan; ?>><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-caret-right" aria-hidden="true"></i> '
   .$lang_history);?></li>

      <li <?php echo$active_wishlist; ?>><?php echo anchor('account/wishlist', '<i class="fa fa-caret-right" aria-hidden="true"></i>
   Wishlist');?></li>
   <li <?php echo $active_avatar; ?>><?php echo anchor('account/avatar', '<i class="fa fa-caret-right" aria-hidden="true"></i>
  Avatar');?></li>
  </ul>


<!-- <ul class='my-menu-desktop'>
    <li <?php echo$active_dashboard; ?>><?php echo anchor('account', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 Dashboard');?></li>
    <li <?php echo$active_informasiAkun; ?>><?php echo anchor('account/informasiAkun', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 Informasi Akun & Billing');?></li>
    <li <?php echo$active_bukuAlamat; ?>><?php echo anchor('account/bukuAlamat', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 Buku Alamat');?></li>
    <li <?php echo$active_riwayatStatusPesanan; ?>><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 Riwayat & Status Pesanan');?></li> -->
	<!-- <li <?php echo$active_returnManagementAuthority; ?>><?php echo anchor('account/returnManagementAuthority', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 Return Management Authority');?></li> -->
    <!-- <li <?php echo$active_berlanggananNewsletter; ?>><?php echo anchor('account/berlanggananNewsletter', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 Berlangganan Newsletter');?></li>
    <li <?php echo$active_wishlist; ?>><?php echo anchor('account/wishlist', '<i class="fa fa-caret-right" aria-hidden="true"></i>
 Wishlist');?></li>
</ul> -->

<?php } ?>
</div>
<!-- <script src="<?php echo base_url('assets/js/sidebar_select_menu.js');?>"></script> -->
