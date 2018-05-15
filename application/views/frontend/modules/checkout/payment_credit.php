<html>
<head>
  <!-- <title id="mids"></title> -->
  <meta name="viewport" content="initial-scale=1, width=device-width, height=device-height, viewport-fit=cover">

  <!-- dev -->
  <!-- <script type="text/javascript"
  src="https://app.sandbox.midtrans.com/snap/snap.js"
  data-client-key="VT-client-Zg0dPXNpghjr1e6S"></script> -->

  <!-- prod -->
  <script type="text/javascript" src="<?php echo $urlCard; ?>" data-client-key="<?php echo $keyCard; ?>"></script>
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
        // console.log(c);
        var code = c;
        snap.pay(code, {
            onSuccess: function(result){
            window.location.replace("<?php //echo site_url('checkout/finishByCreditCard/'.$id);
            //echo site_url('checkout/paymentsuccess');
            echo site_url('checkout/paymentCekResult'); ?>");
            //window.location.replace("<?php //echo site_url('checkout/finish/'); ?>"+hasil.idTransaksi);

            document.getElementById("mids").innerHTML = "Pembayaran Anda Berhasil, Terima Kasih"
            alert(result.status_message);},
            onPending: function(result){
            window.location.replace("<?php //echo site_url('checkout/finishByCreditCard/'.$id);
            //echo site_url('checkout/paymentfailure'); 
            echo site_url('checkout/paymentCekResult');
            ?>");
            document.getElementById("mids").innerHTML = "Pending"
            alert(result.status_message);},
            onError: function(result){
            window.location.replace("<?php //echo site_url('checkout/finishByCreditCard/'.$id); 
            //echo site_url('checkout/paymentfailure');
            echo site_url('checkout/paymentCekResult');
            ?>");
            var fromMidtrans = result
            document.getElementById("mids").innerHTML = "Error"
            },
            onClose: function(){
              window.location.replace("<?php //echo site_url('checkout/finishByCreditCard/'.$id);
              //echo site_url('checkout/paymentfailure');
              echo site_url('checkout/paymentCekResult');
              ?>");
            }
        })
    }
  </script>

</body>
</html>
