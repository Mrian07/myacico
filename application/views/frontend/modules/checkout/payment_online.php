<html>
<head>
  <!-- <script type="text/javascript"
  src="https://app.stg.midtrans.com/snap/snap.js"
  data-client-key="VT-client-OzPyDJnNaJ2ou2zB"></script> -->
  <script type="text/javascript"  src="https://app.midtrans.com/snap/snap.js" data-client-key="VT-client-pB1L01rg-5vSIPCA"></script>
 <style type="text/css">
    .mids{
      text-align: center;
      font-family: arial;
      font-size: 24px;
      padding-top: 20px;
    }

  </style>
</head>
<script type="text/javascript">

var url_string = window.location.href;
var url = new URL(url_string);
//var c = url.searchParams.get("c");
var c = '<?php echo$token; ?>';
</script>
<body onload="pay(c)">
  <div class="mids" id="mids"></div>
  <script type="text/javascript">
    function pay(){
        console.log(c);
        var code = c;
        snap.pay(code, {
            onSuccess: function(result){
        window.location.replace("<?php //echo site_url('checkout/finishByOnline/'.$id); 
        echo site_url('checkout/paymentsuccess'); ?>");
				//window.location.replace("<?php //echo site_url('checkout/finish/'); ?>"+hasil.idTransaksi);

              document.getElementById("mids").innerHTML = "Pembayaran Anda Berhasil, Terima Kasih"
              alert(result.status_message);},
            onPending: function(result){
        window.location.replace("<?php //echo site_url('checkout/finishByOnlineFailed/'.$id); 
        echo site_url('checkout/paymentfailure');?>");
              document.getElementById("mids").innerHTML = "Pending"
              alert(result.status_message);},
            onError: function(result){
        window.location.replace("<?php //echo site_url('checkout/finishByOnlineFailed/'.$id); 
        echo site_url('checkout/paymentfailure'); ?>");
              var fromMidtrans = result
              document.getElementById("mids").innerHTML = "Error"
             // alert(result.status_message);
            },
            onClose: function(){
        window.location.replace("<?php //echo site_url('checkout/finishByOnlineFailed/'.$id); 
        echo site_url('checkout/paymentfailure');?>");
              //document.getElementById("mids").innerHTML = JSON.stringify(result)
             // document.getElementById("mids").innerHTML ='Anda membatalkan pembayaran, Anda bisa melanjutkan pembayaran dengan mengklik invoice di Riwayat & Status Pesanan'
            }
        })
    }
  </script>

</body>
</html>
