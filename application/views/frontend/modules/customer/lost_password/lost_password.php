<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> LUPA PASSWORD</h3>
		</div>
		<p>Masukkan alamat email Anda di bawah ini. Anda akan menerima link untuk mereset password Anda.</p>
	  </div>
	</div> 
	
	<div class="row">
		<div class="col-sm-3">
		
		</div>
	  <div class="col-sm-6">
		<div class='border-create'>
		 <form name="signup" method="post">
		  <div class="form-group">
			<label>Email:</label>
			<input type="email" id="email" name="email" class="form-control"/>
		  </div>
		  <input type="submit" class="btn btn-primary" value="Kirim">

		</form> 
		</div>
	  </div>
	  <div class="col-sm-3">
		
		</div>
	</div>  
</div> 

<button class="example1 btn btn-primary">example alert</button>
<script type="text/javascript">

$.alert({
			title: 'Alert!',
			content: 'Simple alert!',
		});

	$('.example1').on('click', function () {
		$.alert({
			title: 'Alert!',
			content: 'Simple alert!',
		});
	});
</script>
