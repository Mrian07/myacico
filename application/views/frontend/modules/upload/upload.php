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

			<i class="fa fa-angle-right" aria-hidden="true"></i> UPLOAD IMAGE

			</div>
		</div>
	</div>
</div>
<div class="container">

	
	<div class="row">
		<div class="col-sm-3">
		
		</div>
		<div class="col-sm-9">
			

			<p>Data Anda Sudah Kami periksa dan sudah kami verifikasi, Tetapi Document Anda Salah.</p>
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

                               <button class="btn btn-success">Upload</button>
					  <div class="form-group">

					</div>
				</div>	
			</div>	
		</div>
	</div>
</div>

<script>
$(document).ready( function() {
  $.ajaxSetup({
    error: function(){
      alert('Image Berhasil Di Upload');
    },
    timeout: 10000/*,
    contentType: "application/json; charset=UTF-8"*/
  });
  var data = {};
    $("form").submit(function(e){
    e.preventDefault();
   // var data = $(this).serialize();




        var file =  $("#file").val();
        var transid = $("#transid").val();


    //var fl=document.signup;
  //    var data = $(this).serialize();
  //     return alert(data);die();
  data.file = file;
  data.transid = transid;
  console.log('datanyanih',data);
    // data.name = name;
    // data.phone = phone;
    // data.phone2 = phone2;
    // data.address_name = address_name;
    // data.address1 = address1;
    // data.address2 = address2;
    //     data.address3 = address3;
    // data.address4 = address4;
    // data.postal = postal;
    // data.district_id = district_id;
    // data.isbillto = isbillto;
    // data.isshipto = isshipto;
    // data.ispayfrom = ispayfrom;
    // data.isremitto = isremitto;

    //return alert(data.phone);die();
     var success = function(r){
         $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');
  //         $.alert({
  //     title: 'Alert!',
  //     content: 'Alamat Baru Berhasil di tambahkan',
  //    });
  //      alert(r.message);
      console.log('OK:', r.status);
      $("#file").val(null);
      $("#transid").val(null);
      // $("#phone2").val(null);
      // $("#address_name").val(null);
      // $("#address1").val(null);
      // $("#address2").val(null);
      // $("#address3").val(null);
      // $("#address4").val(null);
      // $("#postal").val(null);
      // $("#district_id").val(null);
      // $("#isbillto").val(null);
      // $("#isshipto").val(null);
      // $("#ispayfrom").val(null);
      // $("#isremitto").val(null);

        window.location.replace(base_url+"/account/informasiAkun");

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
        var token = document.cookie.split('x-auth=')[1].split(';').shift();
    console.log('ini data',token);
    var apiurl = api_base_url +'/OrderCompletion?token='+token;
    var form = $('form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form);
//$.ajax({ type:"POST",  data: formData,  processData: false, contentType: false,  headers:{"token":token}, url: apiurl });
    $.ajax({
    url: apiurl,
    data: formData,
    type: 'POST',

    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS
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
