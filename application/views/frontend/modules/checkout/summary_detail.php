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
      <div class="other-info">Harga Barang</div>
      <div class="other-cont">Rp.<?php echo money($items['price']) ?></div>
    </td>
    <td class="ts" colspan="2">
      <div class="other-info">Catatan</div>
      <div class="other-cont">-</div>
    </td>
    <tr>
      <td class="td">
        <div class="other-info">Alamat Tujuan</div>
        <div class="prod-cont" align="left">
          <b><?php echo $name; ?></b><br>
            <?php echo $alamat_shipping; ?>
        </div>
      </td>
      <td class="td">
        <div class="other-info">Asuransi</div>
        <div class="other-cont">-</div>
      </td>
      <td class="td">
        <div class="other-info">Total Barang</div>
        <div class="other-cont"><?php echo $items['qty']; ?></div>
      </td>
      <td class="ta">
        <div class="other-info">Subtotal</div>
        <div class="other-cont">Rp.<?php echo money($items['subtotal']); ?></div>
      </td>
      <td class="ta">
        <div class="other-info">Biaya Asuransi</div>
        <div class="other-cont">-</div>
      </td>
      <!-- <td class="tc">
        <div class="other-info2">Ongkos Kirim</div>
        <div class="other-cont2">Rp.<?php //echo money($this->session->userdata('ongkos_kurir')); ?></div>
      </td> -->
    <tr>
      <td colspan="6" class="tc">
        <div class="other-info3"><a href='#' onclick="delItemCart('<?php echo $items['productId'];?>','<?php echo $items['imageurl'];?>','<?php echo $items['name'];?>','<?php echo$items['itemCartId'];?>')"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a></div>
        <div class="other-info4">Total per Tagihan <span class="red">Rp.<?php echo money($items['subtotal']); ?></span></div>
      </td>
  </table>
  </div>
<?php

    $allsubtotal += $items['subtotal'];
  }

  $grandTotal = $allsubtotal+$this->session->userdata('ongkos_kurir');
  ?>
  <div class="totalfee">
    <div class="totalsub">

    </div>
    <div class="totalsub">
      <p>Total Asuransi</p>
      <p class="red">-</p>
    </div>
    <div class="totalsub">
      <p>Total Barang</p>
      <p class="red">Rp.<?php echo money($allsubtotal); ?></p>
    </div>
    <div class="totalsub">
      <p>Total Ongkos Pengiriman</p>
      <p class="red">Rp.<?php if($this->session->userdata('ongkos_kurir')){echo money($this->session->userdata('ongkos_kurir'));}else{echo"0";}?></p>
    </div>
    <div class="totalsub2">
      <p>Grand Total</p>
      <p class="red">Rp.<?php echo money($grandTotal); ?></p>
    </div>
  </div>
<input type='hidden' id='grandtotal' value='<?php echo $grandTotal; ?>'>
