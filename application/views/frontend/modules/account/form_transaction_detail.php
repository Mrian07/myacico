<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> Detail Pesanan

		  </div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali');?></p>

			<div class="panel panel-default">
				<div class="panel-body">
						<table class="table table-striped"><thead><tr><th>Nama Barang</th><th>Invoice Number</th><th>Order Number</th><th>Payment Method</th><th>Image</th><th>Jumlah Harga</th></tr></thead>
							<tbody><tr><td><?php echo $hasil['items'][0]['name']; ?></td><td><?php echo $hasil['invoiceNumber']; ?></td><td><?php echo $hasil['orderNumber']; ?></td><td>
								<?php echo $hasil['paymentMethod']; ?></td><td><img class="group list-group-image" src="<?php echo $hasil['items'][0]['imageurl']; ?>" alt="..." style:border="0" height="100"></td><td>Rp.<?php echo money($hasil['grandTotal']); ?>
								</td></tr></tbody></table>
				</div>
			</div>

		</div>

	</div>
</div>
