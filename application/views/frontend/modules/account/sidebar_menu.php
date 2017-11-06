<div class='border-sidebar'>
<?php if($user->role=='B2C'){ ?>
<ul class='my-menu-desktop'>
    <li <?php echo$active_dashboard; ?>><?php echo anchor('account', 'Dashboard');?></li>
    <li <?php echo$active_informasiAkun; ?>><?php echo anchor('account/informasiAkun', 'Informasi Akun & Billing');?></li>
    <li <?php echo$active_bukuAlamat; ?>><?php echo anchor('account/bukuAlamat', 'Buku Alamat');?></li>
    <li <?php echo$active_riwayatStatusPesanan; ?>><?php echo anchor('account/riwayatStatusPesanan', 'Riwayat & Status Pesanan');?></li>

    <li <?php echo$active_wishlist; ?>><?php echo anchor('account/wishlist', 'Wishlist');?></li>
</ul>

<!--
<div class='nav-account'><?php echo anchor('account', 'Dashboard');?></div>
<div class='nav-account'><?php echo anchor('account/informasiAkun', 'Informasi Akun');?></div>
<div class='nav-account'><?php echo anchor('account/bukuAlamat', 'Buku Alamat');?></div>
<div class='nav-account'><?php echo anchor('account/riwayatStatusPasaran', 'Riwayat & Status Pesanan');?></div>
<div class='nav-account'><?php echo anchor('account/returnManagementAuthority', 'Return Management Authority');?></div>
<div class='nav-account'><?php echo anchor('account/berlanggananNewsletter', 'Berlangganan Newsletter');?></div>
<div class='nav-account'><?php echo anchor('account/Wishlist', 'Wishlist');?></div>-->

<?php }elseif($user->role=='B2B'){ ?>

<ul class='my-menu-desktop'>
    <li <?php echo$active_dashboard; ?>><?php echo anchor('account', 'Dashboard');?></li>
    <li <?php echo$active_informasiAkun; ?>><?php echo anchor('account/informasiAkun', 'Informasi Akun & Billing');?></li>
    <li <?php echo$active_bukuAlamat; ?>><?php echo anchor('account/bukuAlamat', 'Buku Alamat');?></li>
    <li <?php echo$active_riwayatStatusPesanan; ?>><?php echo anchor('account/riwayatStatusPesanan', 'Riwayat & Status Pesanan');?></li>
	<!-- <li <?php echo$active_returnManagementAuthority; ?>><?php echo anchor('account/returnManagementAuthority', 'Return Management Authority');?></li> -->
    <li <?php echo$active_berlanggananNewsletter; ?>><?php echo anchor('account/berlanggananNewsletter', 'Berlangganan Newsletter');?></li>
    <li <?php echo$active_wishlist; ?>><?php echo anchor('account/wishlist', 'Wishlist');?></li>
</ul>

<?php } ?>
</div>
<script src="<?php echo base_url('assets/js/sidebar_select_menu.js');?>"></script>
