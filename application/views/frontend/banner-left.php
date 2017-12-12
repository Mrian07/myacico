<!DOCTYPE html>
<html>
<head>
<style>
#banner-left {
    position: fixed;
    left: 0;
    top: 300px;
    transition: 0.3s;
    display: none;
}
#banner-left img {
    width: 140px;
}

@media only screen and (min-width: 1440px) {
    #banner-left {
        display: block;
    }

    #banner-left img {
        width: 140px;
    }
}

@media only screen and (min-width: 1600px) {
    #banner-left {
        display: block;
    }

    #banner-left img {
        width: 210px;
    }
}

@media only screen and (min-width: 2048px) {
    #banner-left {
        display: block;
    }

    #banner-left img {
        width: 400px;
    }
}

@media only screen and (min-width: 2560px) {
    #banner-left {
        display: block;
    }

    #banner-left img {
        width: 440px;
    }
}
</style>
</head>
<body>

<div id="banner-left" class="banner-left">
  <img src="<?php echo base_url("images/general/banner-left.jpg") ?>" alt="">
</div>
</body>
<script>
    // load Branch
    (function(b,r,a,n,c,h,_,s,d,k){if(!b[n]||!b[n]._q){for(;s<_.length;)c(h,_[s++]);d=r.createElement(a);d.async=1;d.src="https://cdn.branch.io/branch-latest.min.js";k=r.getElementsByTagName(a)[0];k.parentNode.insertBefore(d,k);b[n]=h}})(window,document,"script","branch",function(b,r){b[r]=function(){b._q.push([r,arguments])}},{_q:[],_v:1},"addListener applyCode autoAppIndex banner closeBanner closeJourney creditHistory credits data deepview deepviewCta first getCode init link logout redeem referrals removeListener sendSMS setBranchViewData setIdentity track validateCode trackCommerceEvent".split(" "), 0);
    // init Branch
    branch.init('key_live_odrJuygkeo5rkDZF8n6jQkierxiW7A4l');
  </script>
</html>
