
<p>Dibawah ini adalah daftar buku alamat penerima pesanan. Anda bisa menambahkan alamat baru atau mengubah alamat sebelumnya dengan alamat yang lain.</p>
<div class="panel panel-default">
<table class="table">
	<thead>

	  <tr>
		<th>Penerima</th>
		<th>Alamat</th>
		<th>Phone</th>
		<th>Ubah</th>
		<th>Hapus</th>
	  </tr>

	</thead>
	<tbody>
		<?php
		$i=0;
		foreach($hasil as $items):
		if($items['address2']==null || $items['address2']=='')
		{
		  $add2='';
		}
		else{
		  $add2=$items['address2'];
		}
		?>

			<tr>
				<td><?php echo $items['name']; ?></td>
				<td><?php echo $items['address_name'].", ".$items['address1']." ".$add2." ".$items['city_name']." ".$items['postal']; ?></td>
				<td><?php echo $items['phone'].", ".$items['phone2']; ?></td>
				<td><?php echo anchor('account/editBukuAlamat/'.$items['id'], '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class'=>'btn btn-info'));?></td>
				<td><a href='#' onClick="dellBukuAlamat('<?php echo $items['id']; ?>','<?php echo $items['address1']; ?>')" class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></a></td>
			</tr>
		<?php if ($i++ == 9) break;
                endforeach; ?>


	</tbody>
</table>
</div>
<script type="text/javascript">

function dellBukuAlamat(id,address1){
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
	var apiurl = api_base_url + '/aduser/deleteaddress';

	$.confirm({
		title: 'Alert!',
		content: 'Alamat ('+address1+') akan dihapus?',
		autoClose: 'cancel|10000',
		closeIcon: true,
		closeIconClass: 'fa fa-close',
		buttons: {
			confirm: function () {
				//untuk cart yang di header
				$.ajax
				({

					type: "POST",
					contentType: "application/json",
				//	method: "POST",
					url: apiurl,
					headers:{ "token":token},
					data: '{"id": "' + id+ '"}',
					success:function(data){
						// $(".listBukuAlamat").html(html);
						location.reload();
					}
				});

			},
			cancel: function () {
				//$.alert('Canceled!');
			}
		}

	});

}
</script>
