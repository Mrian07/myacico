<form method="POST" id="contact" name="13" class="form-horizontal wpc_contact" novalidate="novalidate" enctype="multipart/form-data">
<fieldset>
    <div id="legend" class="">
        <legend class="">file demoe 1</legend>
        <div id="alert-message" class="alert hidden"></div>
    </div>

    <div class="control-group">
        <!-- Text input-->
        <label class="control-label" for="input01"> Text input</label>
        <div class="controls">
            <input type="text" placeholder="placeholder" id="transid" class="input-xlarge" value=" <?php echo $konf; ?>" name="name">
            <p class="help-block" style="display:none;">text_input</p>

        </div>
        <div class="control-group">  </div>
        <label class="control-label">File Button</label>

        <!-- File Upload -->
        <div class="controls">
            <input class="input-file" id="file" type="file" name="file">
        </div>
    </div>
    <div class="control-group">

        <!-- Button -->
        <div class="controls">
            <button class="btn btn-success">Button</button>
        </div>
    </div>
</fieldset>
</form>


<script>


$(document).ready(function() {
$.ajaxSetup({
  error: function(){
    alert('KAMPRET');
  },
  timeout: 10000/*,
  contentType: "application/json; charset=UTF-8"*/
});
var data = {};
  $("form").submit(function(e){
  e.preventDefault();
 // var data = $(this).serialize();
  var token = document.cookie.split('x-auth=')[1].split(';').shift();



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
  console.log('ini data',token);
  var apiurl = api_base_url2 +'OrderCompletion?token='+token;
  var form = $('form')[0]; // You need to use standard javascript object here
  var formData = new FormData(form);

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


});



</script>
