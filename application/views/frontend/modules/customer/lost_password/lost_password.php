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



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

function test(){
	$.alert({
		title: 'Alert!',
		content: 'Email tidak boleh kosong!',
	});  
}

$('form').submit(function(e){
	  
	test();
	  
	var email = $("#email").val();
	
	if(email==''){

		
	}
	  
    e.preventDefault();

    var apiurl = baseApiUrl + '/login';
    var data = $(this).serialize();

    // success handling
    var success = function(r){
      console.log('OK:', r);
      alert(r.message);
    };

    $.post( apiurl, data, success, "json" );
    //$.ajax({ type:"GET", dataType: "json", url: apiurl, success: success, error: error });

  });



$(document).ready(function() {
	
  	$.alert({
			title: 'Alert!',
			content: 'Email tidak boleh kosong!',
		});  

});
</script>
