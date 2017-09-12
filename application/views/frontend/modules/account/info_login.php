<div class="container">
	<div class="info-login">
		<div class="row">
		  <div class="col-sm-9">Selamat datang <?php echo$this->session->userdata('cust_name'); ?>,</div>
		  <div class="col-sm-3" style='text-align: right'><?php //echo anchor('account/logout/', '<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', array('onclick' => "return confirm('Anda yakin akan logout?')"));?>
		  <button id='logout' class="btn btn-warning btn-sm"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
		  <?php // echo anchor('', '<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', array('id' => "flag"));?>
		  </div>
		</div> 
	</div>
</div>

<script type="text/javascript">

$("#logout").click(function(){
	
	$.confirm({
		title: 'Confirm!',
		content: 'Simple confirm!',
		buttons: {
			confirm: function () {
				//$.alert('Confirmed!');
				$(location).attr('href', '<?php echo base_url("account/logout");?>')
			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}
	});

});
</script>