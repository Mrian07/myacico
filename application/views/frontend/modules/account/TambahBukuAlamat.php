<style>
.form-buttons p.back-link { float:left;
  width:225px;
  padding:2px 15px 0 0;
  text-align:right;
  color:red;
  font-size: 16px;
  color: #c40202;
  text-decoration: none;
}
.my-account .buttons-set p.back-link a
{

}
</style>


<div class="container">

	<div class="row">
	  <div class="col-sm-12">
		<div class="my-border-title">
			<h3 class='my-title-page'><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Tambah Buku Alamat Baru</h3>
		</div>

	  </div>
	</div>

  <form name="signup" method="post">
    <div class="form-group">
      <label>Nama Lengkap*</label>
      <input type="text" name="laname" class="form-control mandatory" />
    </div>
    <div class="form-group">
      <label>Alamat*</label>
      <input type="text" name="laname" class="form-control mandatory" /><br/>
        <input type="text" name="laname" class="form-control mandatory" />
    </div>
    <div class="form-group">
      <label for="sel1">Kota*</label>
      <select class="form-control" id="sel1">
        <option>DKI Jakarta</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">

      <label for="sel2">Provinsi*</label>
      <select class="form-control" id="sel2">
        <option>DKI Jakarta</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">

      <label for="sel3">Kecamatan*</label>
      <select class="form-control" id="sel3">
        <option>Jakarta</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">
      <label>Kode Post*</label>
      <input type="text" name="laname" class="form-control mandatory" />
    </div>
    <hr>
    <p class="back-link">
      <a href="<?php echo site_url('account/bukuAlamat') ?>"><small>« </small> Kembali ke Alamat Buku</a>
  &nbsp &nbsp &nbsp &nbsp
  &nbsp &nbsp &nbsp <button type="submit" class="btn btn-info">Simpan Alamat</button>
    </p>

  </form>
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

    // do validation
    var form_ok = true;
    $('.mandatory').each(function(){
      if($(this).val()==''){
        $.alert({title:'Alert', content: $(this).prev().text().slice(0,-1)+ ' is required!'});
        // onContentReady: function(){$(this).focus();}
        form_ok =false;
        return false;
      }
    });
    if(form_ok==false) return false;
    if(fl.password.value!=$('#password2').val())alert('password not match!!!');

    else $.post( apiurl, data, success, "json" );

  });
});
</script>
