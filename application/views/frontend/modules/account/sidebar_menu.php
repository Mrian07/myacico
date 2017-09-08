<ul class='my-menu-desktop'>
    <li><?php echo anchor('account', 'Dashboard');?></li>
    <li><?php echo anchor('account/informasiAkun', 'Informasi Akun');?></li>
    <li><?php echo anchor('account/bukuAlamat', 'Buku Alamat');?></li>
    <li><?php echo anchor('account/riwayatStatusPasaran', 'Riwayat & Status Pesanan');?></li>
	<li><?php echo anchor('account/returnManagementAuthority', 'Return Management Authority');?></li>
    <li><?php echo anchor('account/berlanggananNewsletter', 'Berlangganan Newsletter');?></li>
    <li><?php echo anchor('account/Wishlist', 'Wishlist');?></li>
</ul>

<!--
<div class='nav-account'><?php echo anchor('account', 'Dashboard');?></div>
<div class='nav-account'><?php echo anchor('account/informasiAkun', 'Informasi Akun');?></div>
<div class='nav-account'><?php echo anchor('account/bukuAlamat', 'Buku Alamat');?></div>
<div class='nav-account'><?php echo anchor('account/riwayatStatusPasaran', 'Riwayat & Status Pesanan');?></div>
<div class='nav-account'><?php echo anchor('account/returnManagementAuthority', 'Return Management Authority');?></div>
<div class='nav-account'><?php echo anchor('account/berlanggananNewsletter', 'Berlangganan Newsletter');?></div>
<div class='nav-account'><?php echo anchor('account/Wishlist', 'Wishlist');?></div>-->

<div class="dropdown my-menu-mobile">
    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" style="border-radius:0px; width:100%; margin-bottom:10px">Menu Akun
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
		<li><?php echo anchor('account', 'Dashboard');?></li>
		<li><?php echo anchor('account/informasiAkun', 'Informasi Akun');?></li>
		<li><?php echo anchor('account/bukuAlamat', 'Buku Alamat');?></li>
		<li><?php echo anchor('account/riwayatStatusPasaran', 'Riwayat & Status Pesanan');?></li>
		<li><?php echo anchor('account/returnManagementAuthority', 'Return Management Authority');?></li>
		<li><?php echo anchor('account/berlanggananNewsletter', 'Berlangganan Newsletter');?></li>
		<li><?php echo anchor('account/Wishlist', 'Wishlist');?></li>
      <!--<li class="dropdown-header">Dropdown header 1</li>-->
      
      <!--<li class="divider"></li>
      <li class="dropdown-header">Dropdown header 2</li>-->
      
    </ul>
</div>


<script src="<?php echo base_url('assets/js/sidebar_select_menu.js');?>"></script>