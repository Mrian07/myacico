<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}
.thumbnail>img, .thumbnail a>img{
height: 100px;
}
.color-wishlist{
	color:#FE4365;
}
.color-wishlist-disabled{
	color:#dddddd;
}
.yu{
  color: red;
font-family: 'Roboto Condensed', sans-serif;
font-size: 20px;

}
.yu1{
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 20px;
  color: green;
}
.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
}
.jumbotron-billboard .img {
    margin-bottom: 0px;
    opacity: 0.5;
    color: #fff;
    background: #000 url("https://myacico.com/media/bannerslider/lel1.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;


  position:absolute;
  top:0;left:0;
  z-index:1;
}
.jumbotron-billboard2 .img {
    margin-bottom: 0px;
    opacity: 0.5;
    color: #fff;
    background: #000 url("https://s1.postimg.org/40i0xfe8sf/banner_atas.png") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;


  position:absolute;
  top:0;left:0;
  z-index:1;
}
h1.po1{
  color: White;
}
.jumbotron {position:relative;padding:50px;}
.jumbotron .container {z-index:2;
 position:relative;
  z-index:2;
}
</style>

<?php
	$sumber = $baseApiUrl.'/product/productall/'.$pro;
  $sumber2 = $baseApiUrl.'/product/productall/'.$pro."?page=1"."&show="."pagecount";


 //$sumber = 'http://myacico.net:8080/myacico-service/api/product/productlist?category='.$pro;
 $konten = file_get_contents($sumber);
 $konten2 = file_get_contents($sumber2);
 $data = json_decode($konten, true);
 $data2 = json_decode($konten2, true);
 $saw1=$this->uri->segment(5);

 $saw=$this->uri->segment(4);
 if($saw==Null)
 {
     $sort_id ="all";
 }else{
     $sort_id = $saw;
 }
 //echo $data[1]["nama_lokasi"];

 echo "<br/>";
?>


    <?php

    if ($pro == 1000003)  {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='my-container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Gaming</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if ($pro == 1000038) {

    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='my-container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop 2 in  1</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if ($pro == 1000015) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='my-container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Apple</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";

  }  else if ($pro == 1000431)  {
    echo "<div class='w3l_banner_nav_right_banner7'>

    </div>";
  } else if ($pro == 1000009) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='my-container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Bisnis</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  }else if($pro == 1000231) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='my-container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Toner Printer</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if($pro == 1000235) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='my-container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Printer Inkjet</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  } else if($pro == 1000236) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='my-container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Printer All In One</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
 } else if($pro == 1000237){
   echo "<div class='jumbotron jumbotron-billboard'>
     <div class='img'></div>
       <div class='my-container'>
           <div class='row'>
               <div class='col-lg-12'>
                   <h1 class='po1'>Printer Laser</h1>
                   <br/>
                   <p>

                   </p>

               </div>
           </div>
       </div>
   </div>";
  } else if ($pro == 1000473) {
    echo "<div class='jumbotron jumbotron-billboard'>
      <div class='img'></div>
        <div class='my-container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h1 class='po1'>Laptop Consumer</h1>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
  }  else {

    echo "<div class='jumbotron jumbotron-billboard2'>
      <div class='img'></div>
        <div class='my-container'>
            <div class='row'>
                <div class='col-lg-12'>
        <br/>
                    <br/>
                    <p>

                    </p>

                </div>
            </div>
        </div>
    </div>";
    }


     ?>

<div class="row my-sort-product">
	<div class="col-sm-9">
	</div>
	
</div>

<div class="my-container">
    <div class="well well-sm">
        <h3><strong>Tidak Ditemukan</strong></h3>
        
    </div>
    <div id="products" class="row list-group">
<?php 
if($notFound)
{    
    echo "<div class='col-sm-9'>".$notFound." </br> Tolong periksa pengejaan kata, gunakan kata-kata yang lebih umum & coba lagi! </div>";
}
?>

    </div>

    </div>
</div>


