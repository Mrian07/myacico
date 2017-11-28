
<div class="container">
	<div class='my-bg-title'>
		<i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $lang_riw; ?>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php $this->load->view('frontend/modules/account/sidebar_menu'); ?>
		</div>
		<div class="col-sm-9">
		
			Sort By:

			<div class="row">
			    <div class='col-sm-5'>
			        <div class="form-group">
			            <div class="input-group date form_date" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
			                <input type='text' class="form-control" />
                                        <input type="hidden" id="dtp_input2" name="star_date"/>
			                <span class="input-group-addon">
			                    <span class="glyphicon glyphicon-calendar"></span>
			                </span>
			            </div>
			        </div>
			    </div>
					<div class='col-sm-5'>
			        <div class="form-group">
			            <div class="input-group date form_date" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input3" data-link-format="yyyy-mm-dd">
			                <input type='text' class="form-control" />
			                <input type="hidden" id="dtp_input3" name="end_date"/>
			                <span class="input-group-addon">
			                    <span class="glyphicon glyphicon-calendar"></span>
			                </span>
			            </div>
			        </div>
			    </div>
					<div class='col-sm-2'>
							<button type="button" class="btn btn-default">CARI</button>
					</div>
			</div>

			<div class='listRiwayatStatusPesanan'><center><img src='<?php echo base_url('images/general/loading.gif');?>' border='0'></center></div>
<div class='my-paging'>
    <?php
    //die(print_r($page));
    if($page>1){
      $previous=$page-1;
      $first =  site_url('account/listRiwayatStatusPesanan/page=1');
      $prev =  site_url('account/listRiwayatStatusPesanan/page='.$previous);
      echo "<a href=$first class='my-paging-btn'><< First</a> ";
      echo "<a href=$prev class='my-paging-btn'>< Previous</a> ";
    }else{
      echo"<< First < Previous ";
    }

    //angka awal
    $angka = ($page > 3 ? "...":"");
    for($i=$page-1;$i<$page;$i++){
      if($i<1)
        continue;
        $hal =  site_url('account/listRiwayatStatusPesanan/page='.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";

    }

    //angka tengah
    $angka.="<span class='my-paging-list-on'>$page</span>";
    for($i=$page+1;$i<($page+3);$i++){
      if($i>$jpage)
        break;
        $hal =  site_url('account/listRiwayatStatusPesanan/page='.$i);
        $angka .="<a href=$hal class='my-paging-list'>$i</a>";
    }

    //angka akhir
    $hal =  site_url('account/listRiwayatStatusPesanan/page='.$jpage);
    $angka .=($page+2<$jpage ? "...<a href=$hal class='my-paging-list'>$jpage</a>":"");

    //cetak semua angka
    echo "$angka";

    //next
    if($page<$jpage){
      $next = $page+1;
      $next =  site_url('account/listRiwayatStatusPesanan/page='.$next);
      $last =  site_url('account/listRiwayatStatusPesanan/page='.$jpage);
      echo " <a href=$next class='my-paging-btn'>Next >></a>";
      echo " <a href=$last class='my-paging-btn'>Last ></a>";
    }else{
      echo"Next >  Last >>";
    }



  ?>
  </div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {

	$.ajax
	({
	url: "<?php echo site_url('account/listRiwayatStatusPesanan'); ?>",
	success:function(html){
			$(".listRiwayatStatusPesanan").html(html);
		}
	});

});
</script>
