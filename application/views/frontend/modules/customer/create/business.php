<div class="container">
  <div class="row">
    <div class="col-sm-12 my-border-title">
    <h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> DAFTAR AKUN BUSINESS</h3>
    </div>
  </div> 
  
  <div class="row">
    <div class="col-sm-3">
    
    </div>
    <div class="col-sm-6">
      <form name="signup" method="post">
        <div class="form-group">
          <label>Nama Depan</label>
          <input type="text" name="fname" class="form-control" placeholder="" required="" />
        </div>
        <div class="form-group">
          <label>Nama Belakang</label>
          <input type="text" name="lname" class="form-control" placeholder="" required="" />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="" required="" />
        </div>
        <div class="form-group">
          <label>Informasi Perusahaan</label>
          <input type="text" name="cname" class="form-control" placeholder="" required="" />
        </div>
        <div class="form-group">
          <label>Type Perusahaan</label>
          <select name="bname" class="form-control" placeholder="" required="" ></select>
        </div>
        <div class="form-group">
          <label>Telephone</label>
          <input type="text" name="telp" class="form-control" placeholder="" required="" />
        </div>
        <div class="form-group">
          <label>NPWP</label>
          <input type="text" name="npwp" class="form-control" placeholder="" />
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat1" class="form-control" placeholder="" required="" />
          <input type="text" name="alamat2" class="form-control" placeholder="" />
        </div>
        <div class="form-group">
          <label>Negara</label>
          <select name="country" class="form-control" placeholder="" required="" ></select>
        </div>
        <div class="form-group">
          <label>Provinsi</label>
          <select name="province" class="form-control" placeholder="" required="" ></select>
        </div>
        <div class="form-group">
          <label>Kota</label>
          <input type="text" name="city" class="form-control" placeholder="" required="" />
        </div>
        <div class="form-group">
          <label>Kecamatan</label>
          <input type="text" name="kecamatan" class="form-control" placeholder="" required="" />
        </div>
        <div class="form-group">
          <label>Kodepos</label>
          <input type="text" name="zip" class="form-control" placeholder="" required="" />
        </div>
        <div class="form-group">
          <label>Kata Sandi</label>
          <input type="password" name="password" class="form-control" placeholder="" required="" />
        </div>
        <div class="form-group">
          <label>Konfirmasi Kata Sandi</label>
          <input type="password" id="password2" class="form-control" placeholder="" required="" />
        </div>
        <div>
          <input type="submit" class="btn btn-default" value="Kirim">
        </div>

        <div class="clearfix"></div>

        <div class="separator">
          <p class="change_link">Already a member ?
            <a href="#signin" class="to_register"> Log in </a>
          </p>

          <div class="clearfix"></div>
          <br />

        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
var baseApiUrl = '<?php echo $baseApiUrl; ?>';

$(document).ready(function() {
  $("form").submit(function(e){

    e.preventDefault();
    var apiurl = baseApiUrl + '/aduser/add';
    var fl=document.signup;
    var data = $(this).serialize();

    // success handling
    var success = function(r){
      alert(r.message);
      console.log('OK:', r.status);
    };

    var cus_url = $('#apiurl').val();

    if(cus_url != '')apiurl = cus_url;

    // do validation
    if(fl.password.value!=$('#password2').val())alert('password not match!!!');

    else $.post( apiurl, data, success, "json" );

  });
});
</script>
