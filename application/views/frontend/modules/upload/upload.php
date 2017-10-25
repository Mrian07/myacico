<?php
    $voc = $_GET['company'];
    $voc = str_replace("_"," ",$voc);
?>
<style>

  .btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  outline: none;
  background: white;
  cursor: inherit;
  display: block;
}

#img-upload{
  width: 100%;
}

  </style>

<div class='my-bg-title'>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

			<i class="fa fa-angle-right" aria-hidden="true"></i> UPLOAD : <?php echo $voc;?>
<input type="hidden" id="surel" name="surel" value="<?php echo $_SERVER['QUERY_STRING'];?>" />
			</div>
		</div>
	</div>
</div>
<div class="container">


	<div class="row">
		<div class="col-sm-3">

		</div>
		<div class="col-sm-6">


			<p>Data Anda Sudah Kami periksa dan sudah kami verifikasi, Tetapi Document Anda Salah2.</p>

			<form method="POST" id="contact" name="13" class="form-horizontal wpc_contact" novalidate="novalidate" enctype="multipart/form-data">

			<div class="panel panel-default">
				<div class="panel-heading">
					 <label>Upload Image</label>
				</div>
				<div class="panel-body">
				<div class="input-group">
						<form method="POST" id="contact" name="13" class="form-horizontal wpc_contact" novalidate="novalidate" enctype="multipart/form-data">

						<span class="input-group-btn">

						<span class="btn btn-default btn-file">
						Browse…<input class="input-file" id="file" type="file" name="file">
						</span>
						</span>
						<input type="text" class="form-control" readonly>
					</div>

					<img id='img-upload'/>
</br>
                               <button class="btn btn-success">Upload</button>
					  <div class="form-group">

					</div>
				</div>
			</div>
		</div>
    <div class="col-sm-3">

		</div>
            <div class="col-sm-3">

	  </div>
	</div>
</div>

<script>
$(document).ready( function() {
     var url =$('#surel').val();
    var res = url.split("key=");
    //var urlStrings = window.location.hash.substring(2).split("company=");
    var voc = <?php echo $_GET['company='];?>
    //$('#voc').val(voc);
  $.ajaxSetup({
    error: function(){
      alert('Image Berhasil Di Upload');
    },
    timeout: 10000/*,
    contentType: "application/json; charset=UTF-8"*/
  });
  var data = {};
    $("form").submit(function(e){
    var file =  $("#file").val();
//        parsing key=


  console.log('datanyanih: ',data);
  var error = function(r){
         $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');

        alert(r.message);

    };
     var success = function(r){
         $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');

      console.log('OK:', r.status);
      $("#file").val(null);
      //$("#transid").val(null);
      window.location.replace(base_url+"/upload/upload_success");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
        var token = document.cookie.split('x-auth=')[1].split(';').shift();
   data.file = file;
    data.key = res[1];
    var baseApiUrl = '<?php echo $baseApiUrl2; ?>';
    var apiurl = baseApiUrl +'/create/b2b/reuploadtaxid';
    var form = $('form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form);
//$.ajax({ type:"POST",  data: formData,  processData: false, contentType: false,  headers:{"token":token}, url: apiurl });
    $.ajax({
    url: apiurl,
    data: formData,
    type: 'POST',
    dataType: "json",
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS
    success: success,
    error: error,
    // ... Other options like success and etc
  });
    // $.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify({
    //
    //   "file":file,
    //   "transid":transid
    // }) , url: apiurl });

    //$.ajax({ type:"POST", contentType: "application/json", data:JSON.stringify(data), dataType: "json", url: apiurl, success: success, error: error, timeout: 30000 });

    // success handling



    // do validation



  });

$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {

		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;

		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }

		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('.img-upload').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		});
	});

</script>
