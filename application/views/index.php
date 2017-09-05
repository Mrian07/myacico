<!DOCTYPE html>
<?php include("koneksi.php"); 
include("Kontrol.php"); 
$kontrol = new Kontrol();
$url = $kontrol->urlWeb();
?>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Strat Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo $url."/assets/css/bootstrap.min.css"; ?>" />
		<script type="text/javascript" src="<?php echo $url."/assets/js/jquery.min.js";?>"></script>
		<script type="text/javascript" src="<?php echo $url."/assets/js/bootstrap.min.js";?>"></script>
		<!-- End Bootstrap -->
	
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo $url."/assets/css/animate.css";?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo $url."/assets/css/style_login.css";?>" />
        <title>Myacico.com - MyAdmin</title>
    </head>

<body>
<div class="jumbotron text-center" style='background-color:#ffffff'>
	<img src='<?php echo$url; ?>/images/logo.gif' border='0'> 
  <h1>Form Login My Admin</h1>
  <p>Masukan username dan password Anda.</p> 
</div>
<div class="container">
	
    <!-- pesan start -->
	
	<div class="row">
		<div class="col-sm-4">
		<!--kosong-->
		</div>
		<div class="col-sm-4">

			<div class='title_login animated bounce'>
			<h4>LOGIN ADMIN</h4>
			</div>
			<form method='POST' id='login'>
			<div class='form_login animated bounce'>
				<p>				
				<div class="form-group">
				  <label for="username">Username:</label>
					<div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-user"></i>
						<input type="text" class="form-control" id="username" placeholder="Enter Username" name='username' value="">
					</div>
				</div>
				
				</p>

				<p>
				
				<div class="form-group">
				  <label for="pwd">Password:</label>
					<div class="inner-addon left-addon">
						<i class="glyphicon glyphicon-lock"></i>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name='password' value="">
					</div>
				</div>
				
			</div>

			<p><input type="submit" name="submit" class="btn btn-default" id='btnLogin' value="Login"/></p>
			</form>
		</div>	
		<div class="col-sm-4" style="text-align: center">
		<!--kosong-->
		</div>
	</div>
		
</div>
<div class="footer">
	 Hak cipta &copy; oleh MyACICO.com
</div>

<script type='text/javascript'>
$(document).ready(function(){

	$('#login').submit(function(eve){
	eve.preventDefault();
	
	alert('1111');

	$.ajax({
	url: '<?php echo$url; ?>/proses_login.php',
	type: 'POST',
	dataType: 'html',
	data: $(this).serialize(),

	beforeSend: function(){
		$('#btnLogin').val('Terhubung...').fadeIn('slow');
	},

	success: function(html){
	$('#waiting').fadeOut('slow');
	$('#result').text(html).fadeIn('slow').fadeOut('slow').fadeIn('slow');
	}
	});

	}); 
});
</script>


</body>
</html>