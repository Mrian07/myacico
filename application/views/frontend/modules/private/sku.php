<style>
.SearchBar{
  height:42px;
}
</style>
<div class='container' style='padding-top:40px;'>

      <center>
        <div class="input-group" style='width:500px;'>
          <input type="text" id='sku' class="form-control SearchBar" placeholder="Cari item berdasarkan SKU...">
          <span class="input-group-btn">
            <button class="btn btn-defaul my-search-button" type="button" onclick="cari()">
                <span class=" glyphicon glyphicon-search SearchIcon" ></span>
            </button>
          </span>
        </div><!-- /input-group -->
      </center>
      <div id='detailSku' style='margin-top:20px;'><br><br><br><br></div>
</div>
<script>
$("#sku").keydown(function( event ) {
    if ( event.which == 13 ) {
      $("#detailSku").html("<center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center>");

      var sku = $('#sku').val();
      if(sku==''){
        $.alert({
          title: 'Alert!',
          content: 'SKU tidak boleh kosong',
        });
        $("#detailSku").html("");
      }else{
        var url = '<?php echo site_url('Carisku2017qazxsw/listItem'); ?>'
        $.ajax
        ({
        url: url+'/'+sku,
        success:function(html){
              $("#detailSku").html(html);
          }
        });
      }

    }

  });

function cari(){
  $("#detailSku").html("<center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center>");

  var sku = $('#sku').val();
  if(sku==''){
    $.alert({
      title: 'Alert!',
      content: 'SKU tidak boleh kosong',
    });
    $("#detailSku").html("");
  }else{
    var url = '<?php echo site_url('Carisku2017qazxsw/listItem'); ?>'
    $.ajax
    ({
    url: url+'/'+sku,
    success:function(html){
          $("#detailSku").html(html);
      }
    });
  }

}

</script>
