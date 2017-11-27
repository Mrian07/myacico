
<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> RIWAYAT PESANAN
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
			<p>Dibawah ini adalah daftar buku alamat penerima pesanan. Anda bisa menambahkan alamat baru atau mengubah alamat sebelumnya dengan alamat yang lain.</p>
			Sort By:

			<div class="row">
			    <div class='col-sm-5'>
			        <div class="form-group">
			            <div class="input-group date form_date" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
			                <input type='text' class="form-control" />
			                <input type="text" id="dtp_input2" name="star_date"/>
			                <span class="input-group-addon">
			                    <span class="glyphicon glyphicon-calendar"></span>
			                </span>
			            </div>
			        </div>
			    </div>
					<div class='col-sm-5'>
			        <div class="form-group">
			            <div class="input-group date form_date" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input3" data-link-format="yyyy-mm-dd">
			                <input type='text' class="form-control" />
			                <input type="text" id="dtp_input3" name="end_date"/>
			                <span class="input-group-addon">
			                    <span class="glyphicon glyphicon-calendar"></span>
			                </span>
			            </div>
			        </div>
			    </div>
					<div class='col-sm-2'>
							<button type="button" class="btn btn-default">CARI</button>
					</div>
			</div>

			<div class='listRiwayatStatusPesanan'><center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center></div>

		</div>
	</div>
</div>

<script>
$(document).ready(function() {

	$.ajax
	({
	url: "<?php echo site_url('account/listRiwayatStatusPesanan'); ?>",
	success:function(html){
			$(".listRiwayatStatusPesanan").html(html);
		}
	});

});
</script>
