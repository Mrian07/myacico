
<div class="container my-container-white">
	<div class="row">
		<div class="col-sm-12">
			<center><br><br>
				<p><?php echo $lang_info_confirm_order_is_done; ?></p>
				<button type="button" class="btn btn-lg btn-success" onclick="confirm()"><?php echo $lang_btn_confirm_order_is_done; ?></button></center>
	</div>
</div>
</div>

<script type="text/javascript">

function confirm(){
	var key = '<?php echo $key; ?>';
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var api = api_base_url +'/order/confirmationorderisdone/?orderId='+key;

	$.ajax({
			type:"POST",
			headers:{"token":token},
			dataType: "json",
			url: api,
			success: function(data){
						if(data.status == 1 ) {
							window.location.replace(base_url+"account/confirmationOrderIsDoneSuccess/");
						}else{
							//rumah.append('<tr><td><?php echo $lang_news2; ?></td></tr>');
							$.dialog({
						    title: 'Alert!',
						    content: data.message,
						    autoClose: 'close|3000',
						    buttons: {
						      close: function () {
						        //$.alert('action is canceled');
						      }
						    },
						    closeIcon: true,
						    closeIconClass: 'fa fa-close'
						  });
						}
					}

		});

}

</script>
