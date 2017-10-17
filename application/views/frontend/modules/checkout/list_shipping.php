<input type="text" id="grandtotal">
<input type="text" id="courier">
<input type="text" id="courier_amount">
<?php foreach($hasil as $data){ ?>
		<div class="panel panel-default" style='background:#edecec; margin-bottom:10px;' id=''>
		<table border='0' cellpadding='5'>
		<tr>
		<td valign='top'>
			<input type="radio" id="shipperId" name="shipperId" value='<?php echo$data['shipperId']; ?>'>
		</td>
		<td>
			Penyedia Jasa : <?php echo$data['shipperName']; ?><br>
			Estimasi : +/- <?php echo$data['estimationDay']; ?> Hari kerja<br>
			Biaya Kirim: Rp.<?php echo money($data['amount']); ?>
		</td>
		</tr>
		</table>
</div>
<?php } ?>

<script>
$(document).on("change","input[type=radio][name=shipperId]",function(){

	var idkel = <?php echo $id_kelurahan;?>;
	var total_weight = $('#weightTotalOrder').val();
	var shipperId = $(this).val();
	var dataString = 'idkel='+idkel+'&total_weight'+total_weight+'&shipperId='+shipperId;
	var amount = 0;
	$.ajax
	({
	type: "POST",		
	dataType:'json',
	url: "<?php echo site_url('checkout/getDataShipping'); ?>",
	data: dataString,
	cache : false,
	success:function(data){
			
			var totalOngkir = data.amount*total_weight;
			$('#courier_amount').val(totalOngkir);
			$('#courier').val(data.shipperName);
			var grandtotal = $('#SubtotalOrder').val()+totalOngkir;
			$('#grandtotal').val(grandtotal);
		}
	});
	
});
</script>