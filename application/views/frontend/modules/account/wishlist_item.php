<style>
.disabled {
   pointer-events: none;
   cursor: default;
}
</style>
<p><?php echo $lang_ket_wishlist;?></p>

<div class="row"  style='width: 100%; margin:0 auto;'>
    <div id="no-more-tables">
        <table class="col-md-12 table-bordered table-striped table-condensed cf">
        	<thead class="cf">

        	  <tr>
              <th><?php echo $lang_wishlist_pic;?></th>
              <th><?php echo $lang_wishlist_name;?></th>
              <th><?php echo $lang_wishlist_del;?></th>
        	  </tr>

        	</thead>
        	<tbody>
        		<?php foreach($hasil as $items):	?>

        			<tr>
                <p class="link-nmp box-title" ></p>
        				<td data-title="Image"><?php if($items['imageUrl']){ ?><img src="<?php  echo $items['imageUrl'];?>" height="100"><?php }else{echo"-";} ?></td>
                <td data-title="Nama"><a href="<?php echo base_url('product/detail/'. $items['productID'].'/'. $items['name']);?>"><?php echo $items['name']; ?></a></td>
        				<td data-title="Hapus"><a href='#' onClick="dellWishlist('<?php echo $items['productID']; ?>','<?php echo $items['name']; ?>')" class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></a></td>
        			</tr>
        		<?php endforeach; ?>


        	</tbody>
        </table>
  </div>
</div><br><br>
<script type="text/javascript">
// $(document).ready(function(){
//   var token = document.cookie.split('x-auth=')[1].split(';').shift();
//   console.log('token',token);
// });
function dellWishlist(id,name){
	var token = document.cookie.split('x-auth=')[1].split(';').shift();
  console.log('token',token);
	var apiurl = api_base_url + '/product/deletewishlist?item_id='+id;

	$.confirm({
		title: 'Alert!',
		content: 'Wishlist ('+name+') akan dihapus?',
		autoClose: 'cancel|10000',
		closeIcon: true,
		closeIconClass: 'fa fa-close',
		buttons: {
			confirm: function () {
				//untuk cart yang di header
				$.ajax
				({	type: "GET",
					url: apiurl,
					headers:{ "token":token},
					data: '{"item_id": "' + id+ '"}',
					success:function(data){
            location.reload();
						// $(".wishListItem").html(html);
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
