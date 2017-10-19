<br>
Mohon dilakukan pembayaran ke :<br>
<input type="hidden" id="metVal">
<?php foreach($hasil as $data){ ?>
		<div class="panel panel-default" style='background:#edecec;margin-bottom:10px; '>
		<table border='0' cellpadding='5'>
		<tr>
		<td valign='top'>
			<input type="radio" id='code' name="code" value='<?php echo$data['code']; ?>'>
		</td>
		<td><img src='https://storage.googleapis.com/myacico/image/bank/<?php echo$data['code']; ?>.png' border='0'><br>
			<?php echo$data['account_name']; ?><br>
			<?php echo$data['account_number']; ?><br>
			<?php echo$data['bank_name']; ?><br>
			<?php echo$data['code']; ?>
		</td>
		</tr>
		</table>
</div>
<script>
$(document).on("change","input[type=radio][name=code]",function(){
	var metVal = $(this).val();      
	$('#metVal').val(metVal);     	
});
</script>
<?php } ?>
