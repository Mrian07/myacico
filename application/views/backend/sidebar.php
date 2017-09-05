<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
		<!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
				<img src='<?php echo base_url('images/empty_photo.png');?>' border='0'/>
            </div>
            <div class="pull-left info">
                <p>Admin</p>
				<a href='#'><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview <?php echo"$active_dashboard";?>">
				<?php echo anchor('backend','<i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard');?>
            </li>
			<li class="treeview <?php echo"$active_kupon";?>">
				<?php echo anchor('backend/kupon','<i class="fa fa-credit-card" aria-hidden="true"></i> Kupon');?>
            </li>
			<li class="treeview <?php echo"$active_customer";?>">
				<?php echo anchor('backend/customer','<i class="fa fa-user" aria-hidden="true"></i> Customer');?>
            </li>
			<li class="treeview <?php echo"$active_quotation";?>">
				<?php echo anchor('backend/quotation','<i class="fa fa-file-excel-o" aria-hidden="true"></i> Quotation');?>
            </li>
        </ul>
    </section>
	<!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">