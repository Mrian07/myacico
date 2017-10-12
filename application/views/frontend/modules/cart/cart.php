<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
	font-size:13px;
	padding:15px;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}

	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}

	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}



	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}

}
</style>
<style>
<!--
.progress {
    position: relative;
	height: 25px;
}
.progress > .progress-type {
	position: absolute;
	left: 0px;
	font-weight: 800;
	padding: 3px 30px 2px 10px;
	color: rgb(255, 255, 255);
	background-color: rgba(25, 25, 25, 0.2);
}
.progress > .progress-completed {
	position: absolute;
	right: 0px;
	font-weight: 800;
	padding: 3px 10px 2px;
}-->
</style>
<div class='my-bg-title'>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> KERANJANG BELANJA ANDA 

		  </div>
		</div>
	</div>
</div>
<div class="container" ng-controller="cartCnt">


    <!--div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
        <span class="sr-only">35% Complete (success)</span>
      </div>
      <span class="progress-completed"> 35%</span>
    </div-->
	<div class="col-md-12 listCart">

	</div>
	

</div>
<script>
$(document).ready(function() {
	
	var cookie = document.cookie.split('x-auth=');
	if(cookie.length > 1){
		
		$.ajax
		({
		url: "<?php echo site_url('cart/listCartToken'); ?>",
		success:function(html){
				$(".listCart").html(html);
			}
		});
		

	}else{
		
		$.ajax
		({
		url: "<?php echo site_url('cart/listCart'); ?>",
		success:function(html){
				$(".listCart").html(html);
			}
		});
	
	}
	
	
	
});
</script>