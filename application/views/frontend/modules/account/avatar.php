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
    <i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $lang_avatar_tittle;?>
</div>
</div>
<div class="container">

<input type="hidden" id = "ck" name="ck"  value="" />
<div class="row">
  <div class="col-sm-3">
    <?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
  </div>
  <div class="col-sm-9">
    <p><?php echo anchor('account/riwayatStatusPesanan', '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'.$lang_avatar_button, array('class'=>'btn-back'));?></p>
                      <div class="buktiTrans"></div>
    <p><?php echo $lang_avatar_tittle2;?></p>
    <form method="POST" id="contact" name="13" class="form-horizontal wpc_contact" novalidate="novalidate" enctype="multipart/form-data">

    <div class="panel panel-default">
      <div class="panel-heading">
         <label><?php echo $lang_avatar_tittle3;?></label>
      </div>
      <div class="panel-body">

        <div class="input-group">

          <form method="POST" id="contact" name="13" class="form-horizontal wpc_contact" novalidate="novalidate" enctype="multipart/form-data">
          <span class="input-group-btn">

          <span class="btn btn-info btn-file">
          <?php echo $lang_avatar_browse;?><input class="input-file" id="file" onchange="show(this)" type="file" name="file" style='height:10px'>
          </span>
          </span>
          <input type="text" class="form-control" readonly>
        </div><br>

        <img id='img-upload'/>

                             <button class="btn btn-success"> <?php echo $lang_avatar_button;?></button>
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
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#img-upload').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#file").change(function() {
  readURL(this);
});
$(document).ready( function() {
  var token1 = document.cookie.split('x-auth=')[1].split(';').shift();

  var apiurl = api_base_url +'/aduser/upload/avatar';

// $.ajaxSetup({
//   error: function(){
//     alert('Image Berhasil Di Upload');
//   },
//
//   timeout: 10000/*, account/confirm/
//   contentType: "application/json; charset=UTF-8"*/
// });

var data = {};
  $("form").submit(function(e){
  e.preventDefault();
 // var data = $(this).serialize();




      var file =  $("#file").val();



  //var fl=document.signup;
//    var data = $(this).serialize();
//     return alert(data);die();
data.file = file;
//     var success = function(r){
//       console.log('OK:', r);
//       alert(r.message);
//     };
//

   var success = function(r){
           console.log('OK:', r);
           alert(r.message);
     //     };
//      $("#file").val(null);
//      $("#transid").val(null);



  };
  $('#spinner_img').show();
  $('#submit_btn').val('loading...').addClass('disabled');
      var token1 = document.cookie.split('x-auth=')[1].split(';').shift();
  console.log('ini data',token1);
  var apiurl = api_base_url +'/aduser/upload/avatar';
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

});




</script>
