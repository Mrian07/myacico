<?php $allsubtotal=0; foreach($hasil as $items){?>
<div class="cart-list-left">
  <table class="table">
    <td class="td" colspan="3">
      <div class="img-cont">
        <!-- <img class="img-cont" src="https://storage.googleapis.com/myacicoproductimg/APPLSMAR00002007354.jpg"> -->
        <img class="img-cont" src="<?php echo$items['imageurl']?>">
      </div>
      <div class="prod-info">
        <span class="prodname"><?php echo $items['name']; ?></span><br>
        <!-- <span class="quantity">1 Barang</span><br> -->
        <span class="sku"> SKU : DDKFK39393878738483473</span>
      </div>

    </td>
    <td class="td">
      <div class="other-info"><?php echo $lang_hargaDi; ?></div>
      <div class="other-cont">Rp.<?php echo money($items['price']) ?></div>
    </td>
    <td class="ts" colspan="2">
      <div class="other-info"><?php echo $lang_catatan; ?></div>
      <div class="other-cont">-</div>
    </td>
    <tr>
      <td class="td">
        <div class="other-info"><?php echo $lang_alamatTujuan; ?></div>
        <div class="prod-cont" align="left">
          <b><?php echo $name; ?></b><br>
            <?php echo $alamat_shipping; ?>
        </div>
      </td>
      <td class="td">
        <div class="other-info"><?php echo $lang_asuransi; ?></div>
        <div class="other-cont">-</div>
      </td>
      <td class="td">
        <div class="other-info"><?php echo $lang_ttaol; ?></div>
        <div class="other-cont"><?php echo $items['qty']; ?></div>
      </td>
      <td class="ta">
        <div class="other-info">Subtotal</div>
        <div class="other-cont">Rp.<?php echo money($items['subtotal']); ?></div>
      </td>
      <td class="ta">
        <div class="other-info"><?php echo $lang_asuransi; ?></div>
        <div class="other-cont">-</div>
      </td>
      <!-- <td class="tc">
        <div class="other-info2">Ongkos Kirim</div>
        <div class="other-cont2">Rp.<?php //echo money($this->session->userdata('ongkos_kurir')); ?></div>
      </td> -->
    <tr>
      <td colspan="6" class="tc">
        <div class="other-info3"><a href='#' onclick="delItemCart('<?php echo $items['productId'];?>','<?php echo $items['imageurl'];?>','<?php echo $items['name'];?>','<?php echo$items['itemCartId'];?>')">
          <i class="fa fa-trash-o" aria-hidden="true"></i> <?php echo$lang_btn_delete; ?></a></div>
        <div class="other-info4"><?php echo $lang_tagihan; ?> : <span class="red">Rp.<?php echo money($items['subtotal']); ?></span></div>
      </td>
  </table>
  </div>
<?php

    $allsubtotal += $items['subtotal'];
  }

  $getGrandTotal = $allsubtotal+$this->session->userdata('ongkos_kurir');
  if($this->session->userdata('discVoucher')){ $grandTotal = $this->session->userdata('discVoucher')+$getGrandTotal; }else{$grandTotal =$getGrandTotal;}

  ?>
  <div class="totalfee">
    <div class="totalsub">
      <p><?php echo $lang_asuransi; ?></p>
      <p class="red">-</p>
    </div>
    <div class="totalsub">
      <p>Total</p>
      <p class="red">Rp.<?php echo money($allsubtotal); ?></p>
    </div>
    <div class="totalsub">
      <p><?php echo $lang_totalShipping; ?></p>
      <p class="red">Rp.<?php if($this->session->userdata('ongkos_kurir')){echo money($this->session->userdata('ongkos_kurir'));}else{echo"0";}?></p>
    </div>
    <div class="totalsub">
      <p>Voucher</p>
      <p class="red" id='voucher'><?php if($this->session->userdata('discVoucher')){echo'Rp.'. money($this->session->userdata('discVoucher')); }else{echo"-"; }?></p>
    </div>
    <div class="totalsub2">
      <p>Grand Total</p>
      <p class="red">Rp.<?php echo money($grandTotal); ?></p>

    </div>
  </div>




<!-- <input type='hidden' id='valVoucher' value='<?php //echo $this->session->userdata('voucher'); ?>'> -->
<!-- <input type='text' id='discVoucher' value=''>
<input type='text' id='codeVoucher' value=''>
<input type='text' id='isValidVoucher' value=''> -->
<input type='hidden' id='grandtotal' value='<?php echo  $grandTotal; ?>'>


<!-- <script>
$(document).ready(function() {

  var discVoucher = $('#discVoucher').val();

  var grandTotal = '<?php //echo  $grandTotal; ?>';

alert(grandTotal);

  var bigGrandTotal = discVoucher+grandTotal;
  $('#grandtotal').val(bigGrandTotal);
  $('#vGrandtotal').val(bigGrandTotal);
  // var grandTotal = '<?php //echo  $grandTotal; ?>';
  // var grandTotal = '<?php //echo  $grandTotal; ?>';
});
</script> -->
