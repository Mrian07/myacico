<div class="container">
	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Terimakasih sudah subscribe . Email</h3>
		</div>
		<p></p>
	  </div>
	</div>

	<div class="row">
		<div class="col-sm-3">

		</div>
	  <div class="col-sm-6">
		<div class='border-create'>
		 <form name="signup" method="post">
		  <div class="form-group">
        <center>
			<label>Terimakasih Sudah subscribe</label>
    </center>
			<h3 align="center"> .Email </h3>
		  </div>
		  <!-- <input type="submit" id="submit" class="btn btn-primary" value="Kirim"> -->

		</form>
		</div>
	  </div>
	  <div class="col-sm-3">

		</div>
	</div>
</div>


<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';
window.location.href = "http://localhost/myacicoweb/myacicoweb/home/";return false


$(document).ready(function() {

	$('form').submit(function(e){

		var email = $("#email").val();

		if(email==''){
			$.alert({
				title: 'Alert!',
				content: 'Email tidak boleh kosong!',
			});
		}
//a
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

});
</script>
