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


<div class="container">
	<div class='my-bg-title'>
			<i class="fa fa-angle-right" aria-hidden="true"></i> UPLOAD IMAGE
	</div>
</div>
<div class="container">
<input type="hidden" id = "idtrans" name="idtrans"  value="<?php echo $this->data['konf'];?>" />
<input type="hidden" id = "ck" name="ck"  value="" />
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
      <p><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-angle-double-left" aria-hidden="true"></i> Kembali', array('class'=>'btn-back'));?></p>
                        <div class="buktiTrans"></div>
			<p>Silakan upload bukti transfer pembayaran Anda pada form dibawah ini.</p>
			<form method="POST" id="contact" name="13" class="form-horizontal wpc_contact" novalidate="novalidate" enctype="multipart/form-data">

			<div class="panel panel-default">
				<div class="panel-heading">
					 <label>Upload Image</label>
				</div>
				<div class="panel-body">

					<div class="input-group">

						<form method="POST" id="contact" name="13" class="form-horizontal wpc_contact" novalidate="novalidate" enctype="multipart/form-data">
						<span class="input-group-btn">
						<input type="hidden" id="transid" class="input-xlarge" value="<?php echo $konf; ?>" name="transid">
						<span class="btn btn-info btn-file">
						Browse…<input class="input-file" id="file" type="file" name="file" onchange="show(this)" style='height:10px'>
						</span>
						</span>
						<input type="text" class="form-control" readonly>
					</div><br>

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
function show(input) {
        debugger;
        var validExtensions = ['jpg','png','jpeg']; //array of valid extensions
        var fileName = input.files[0].name;
        var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
        if ($.inArray(fileNameExt, validExtensions) == -1) {
            input.type = ''
            input.type = 'file'
            $('#user_img').attr('src',"");
            alert("Only these file types are accepted : "+validExtensions.join(', '));
        }
        else
        {
        if (input.files && input.files[0]) {
            var filerdr = new FileReader();
            filerdr.onload = function (e) {
                $('#user_img').attr('src', e.target.result);
            }
            filerdr.readAsDataURL(input.files[0]);
        }
        }
    }
$(document).ready( function() {
  $.ajaxSetup({
    error: function(){
      alert('Image Berhasil Di Upload');
    },

    timeout: 10000/*, account/confirm/
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

     var success = function(r){
         $('#spinner_img').hide();
  $('#submit_btn').val('Kirim').removeClass('disabled');

      console.log('OK:', r.status);
      // alert(r.message);
//      $("#file").val(null);
//      $("#transid").val(null);
if(r.status ==1){
    $.alert({title:'Alert', content: ' <?php echo $lang_msg_upload?>'});
}
else{
    $.alert({title:'Alert', content:  r.message});
}
        window.location.replace(base_url+"account/confirm/"+$("#transid").val());

    };
    $('#spinner_img').show();
    $('#submit_btn').val('loading...').addClass('disabled');
        var token = document.cookie.split('x-auth=')[1].split(';').shift();
    console.log('ini data',token);
    var apiurl = api_base_url +'/order/completion';
    var form = $('form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form);
//$.ajax({ type:"POST",  data: formData,  processData: false, contentType: false,  headers:{"token":token}, url: apiurl });
    $.ajax({
    headers:{"token":token},
    url: apiurl,
    data: formData,
    type: 'POST',
    success:success,
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS
    // ... Other options like success and etc
  });

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
 var transid=$("#transid").val();
    var token = document.cookie.split('x-auth=')[1].split(';').shift();
    var apiGet = api_base_url +"/transaction/file/"+transid+"?key="+token;
    var apiGet2 = api_base_url +"/transaction/file/"+transid;
var stat="<?php echo $lang_label_upload;?>";

  $.ajax({
    type:"GET",
    headers:{"token":token},
//    dataType: "image/png",
   // contentType: "image/png",
    //beforeSend: getAdd(),
    success: function(r,s,j){
       console.log('data:',j['status']);
       var response = j['status'];
       if(response === 200)
       {
        $(".buktiTrans").append("<div>"+stat+"</br></div><a href='"+apiGet+"' target='_blank'><img class='group list-group-image' src='"+apiGet+"' alt='...' style:border='0' height='100'></a>");
       }
       else{
           $(".buktiTrans").append("");
       }
//
        },
       error: function(error, data) {
      console.log('asd',data);
//      console.log('error');
    },
    url: apiGet});

</script>
