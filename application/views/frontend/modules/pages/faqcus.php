<style>
/* =====[ GOOGLE FONT "LATO" ]============================================================================== */
@import url(http://fonts.googleapis.com/css?family=Lato:400,100,900);

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

/* =====[ BODY ]============================================================================== */



h1 {
font-family:Lato, sans-serif;
font-weight:100;
font-size:50px;
text-transform:uppercase;
text-align:center;
color:#444;
padding:30px;
}

.content_wrap {
width:100%;
margin:0 auto;
padding:0;
}

/* =====[ COLORS ]============================================================================== */

.color-1-bg {
background:#6baba1!important;
}

.color-1-font,.color1-price {
color:#6baba1!important;
}

.color-2-bg {
background:#e0a32e!important;
}

.color-2-font,.color-2-price {
color:#e0a32e!important;
}

.color-3-bg {
background:#e7603b!important;
}

.color-3-font,.color-3-price {
color:#e7603b!important;
}

.color-4-bg {
background:#9ca780!important;
}

.color-4-font,.color-4-price {
color:#9ca780!important;
}

.front,.back {
font-family:Lato, sans-serif;
float:left;
width:220px;
height:220px;
background:#FFF;
-webkit-border-radius:100%;
-moz-border-radius:100%;
border-radius:100%;
-webkit-box-shadow:0 0 10px 0 #dbdbdb;
box-shadow:0 0 10px 0 #dbdbdb;
-webkit-transition:all .3s ease-in-out;
-moz-transition:all .3s ease-in-out;
-o-transition:all .3s ease-in-out;
-ms-transition:all .3s ease-in-out;
transition:all .3s ease-in-out;
}


.content_accordion{
        margin: 20px;
    }
/* =====[ MAIN LIST ]============================================================================== */

.box {
list-style:none;
display:block;
text-align:center;
width:100%;
margin:20px 0 0;
padding:0;
}

.box i {
padding-right:5px;
}

.box > li {
width:220px;
height:220px;
display:inline-block;
margin:8px;
}

/* =====[ FRONT ELEMENTS ]============================================================================== */

.front > div {
text-align:center;
color:#60bad7;
}

.title {
font-size:25px;
text-transform:uppercase;
text-align:center;
padding:25px 0px 17px;
font-size: 40px;
}

.price span {
font-weight:900;
vertical-align:top;
margin-top:-15px;
display:inline-block;
}

.price .total {
font-size:30px;
}

.currency,.end {
font-size:40px;
}

.description {
text-align:center;
}

.front .description {
color:#9b9b9b!important;
font-size:14px;
padding:4px 45px 0;
}

/* =====[ BACK ELEMENTS ]============================================================================== */

.back .title {
color:#FFF;
}

.back .description ul {
width:55%;
margin:auto;
}

.back .description ul li {
color:#FFF!important;
text-align:left;
list-style:none;
line-height:1.4;
}

.popular {
font-size:30px;
color:#60bad7;
position:absolute;
left:0;
top:0;
opacity:0;
}

/* =====[ CIRCLE ANIMATIONS ]============================================================================== */

.circle {
border-radius:150px;
-moz-border-radius: 150px;
-webkit-border-radius: 150px;
position:relative;
-webkit-transition:all 1.8s ease-in-out;
-moz-transition:all 1.8s ease-in-out;
-o-transition:all 1.8s ease-in-out;
-ms-transition:all 1.8s ease-in-out;
transition:all 1.8s ease-in-out;
position: absolute;
}

.info {
position:absolute;
border-radius:150px;
-moz-border-radius: 150px;
-webkit-border-radius: 150px;
opacity:0;
-moz-transform:scale(0) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-webkit-transform:scale(0) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-o-transform:scale(0) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-ms-transform:scale(0) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
transform:scale(0) rotate(0deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-webkit-backface-visibility:hidden;
}

.circle:hover .front {
-moz-transform:scale(1.15);
-webkit-transform:scale(1.15);
-o-transform:scale(1.15);
-ms-transform:scale(1.15);
transform:scale(1.15);
opacity:1;
}

.circle:hover .info {
-moz-transform:scale(1) rotate(360deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-webkit-transform:scale(1) rotate(360deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-o-transform:scale(1) rotate(360deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
-ms-transform:scale(1) rotate(360deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
transform:scale(1) rotate(360deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg);
opacity:1;
}

.circle:hover .front-popular {
border-radius:10% 50% 50% 50%!important;
}

.circle:hover .popular {
opacity:1;
animation:popularAnim 2s 2;
-webkit-animation:popularAnim 2s 2;
}

@keyframes popularAnim
{
from {opacity:0; left:40px;}
to {opacity:1; left:0;}
}

@-webkit-keyframes popularAnim /* Safari and Chrome */
{
from {opacity:0; left:40px;}
to {opacity:1; left:0;}
}

@-moz-keyframes popularAnim {
from {opacity:0; left:40px;}
to {opacity:1; left:0;}
}

@-ms-keyframes popularAnim {
from {opacity:0; left:40px;}
to {opacity:1; left:0;}
}

.box > li{
*float:left;
}

.circle .back{
*display:none;
}

.circle .back{
z-index:0;
}
.circle .front{
position:relative;
z-index:1;
}
.circle:hover .back{
z-index:1;
}
.circle:hover .front{
position:relative;
z-index:0;
}

.circle:hover .back{
*display:inline;
}
.circle:hover .front{
*display:none;
}
p{
  font-size: 18px;
}
.test3{
  color: red;
}
</style>

<section class="content_wrap">
  <div class="container">
    <div class="jumbotron">
      <h1>Pengiriman Barang</h1>
    <center>  <p>Pengiriman Barang Di myAcico.co.id.</p> </center>
    </div>


  <!-- BEGIN LIST -->
  <ul class="box">
  <!-- BEGIN LIST ELEMENT -->
    <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-1-font glyphicon glyphicon-star"></div>
          <div class="price color-1-font"><span class="total">Kebijakan</span></div>
          <div class="description"></div>
        </div><!-- end div .front -->
        <div class="popular color-1-font glyphicon glyphicon-star"></div>

      </div><!-- end div .circle -->
    </li>
  <!-- END LIST ELEMENT -->
  <!-- BEGIN LIST ELEMENT -->
    <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-2-font glyphicon glyphicon-user"></div>
          <div class="price color-2-font"><span class="total">Pengembalian</span></div>
          <!-- <div class="description">Collaborate online</div> -->
        </div><!-- end div .front -->
        <div class="popular color-2-font glyphicon glyphicon-user"></div>

      </div><!-- end div .circle -->
    </li>
  <!-- END LIST ELEMENT -->
  <!-- BEGIN LIST ELEMENT -->
    <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-3-font glyphicon glyphicon-gift"></div>
          <div class="price color-3-font"><span class="total">Barang</span></div>
          <!-- <div class="description">Use Agile methods</div> -->
        </div><!-- end div .front -->
        <div class="popular color-3-font glyphicon glyphicon-tag"></div>

      </div><!-- end div .circle -->
    </li>
  <!-- END LIST ELEMENT -->
  <!-- BEGIN LIST ELEMENT -->
    <li>
      <div class="circle">
        <div class="front front-popular">
          <div class="title color-4-font glyphicon glyphicon-heart-empty"></div>
          <div class="price color-4-font"><span class="total">myAcico</span></div>
          <!-- <div class="description">Work on projects</div> -->
        </div><!-- end div .front -->
        <div class="popular color-4-font glyphicon glyphicon-time"></div>



      </div><!-- end div .circle -->
        </div>    </li>
  <!-- END LIST ELEMENT -->
  </ul>
  <center>
    <div class="container">
     			 <div class="row">
                     <div class="col-lg-12">

                         <!--ul class="nav nav-tabs">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">SVN</a></li>
                            <li><a href="#">iOS</a></li>
                            <li><a href="#">VB.Net</a></li>
                            <li><a href="#">Java</a></li>
                            <li><a href="#">PHP</a></li>
                         </ul-->
                         <ul id="myTab" class="nav nav-tabs">
                            <li class="active">
                               <a href="#home" data-toggle="tab">
                                  Estimasi Proses Penukaran Dan Pengembalian Dana
                               </a>
                            </li>
                            <li><a href="#a" data-toggle="tab">Kebijakan Pengembalian Produk</a></li>
                            <!--li class="dropdown">
                               <a href="#" id="myTabDrop1" class="dropdown-toggle"
                                  data-toggle="dropdown">Java
                                  <b class="caret"></b>
                               </a>
                               <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                                  <li><a href="#jmeter" tabindex="-1" data-toggle="tab">jmeter</a></li>
                                  <li><a href="#ejb" tabindex="-1" data-toggle="tab">ejb</a></li>
                               </ul>
                            </li-->

                         </ul>
                         <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                               <div class="content_accordion">
                              <img src="https://s1.postimg.org/61yoh08lzj/button12.png">
                              <p> Contoh stiker pengembalian barang  ke tim gudang yang harus kamu tempelkan di kardus<br/>
                                kemasan luar agar terlihat oleh pihak jasa ekspedisi</p>
                                <img src="https://s1.postimg.org/15fqfhyf7z/image.png">
                                <p class="test3"> PERHATIAN : Pengembalian barang tidak akan diproses, jika kamu<br/>
                                  tidak mengisi FORM pengembalian barang di www.myacico.co.id
                                 </p>
                              </div>
 <!--accordion end-->
                            </div>
                            <div class="tab-pane fade" id="a">
                              <div class="content_accordion">
                                     <h2> Kebijakan Pengembalian Produk </h2>
                                     <h6> Produk yang kamu beli kurang memiliki kendala ? tenang saja myAcico.co.id menyediakan <br/>
                                       gratis 30 hari pengembalian sejak barang diterima kamu dapat memilih 1 dari 3 pilihan <br/>
                                       pengembalian dibawah ini
                                     </h6>
                                     <p> 1. Produk pesanan yang diterima rusak </p>
                                        <p> 2. Produk pesanan yang diterima berbeda dengan yang ada pada website </p>
                                           <p> 3. Produk pesanan yang diterima berbeda warna / type </p>
                                              <p> 4.Produk pesanan yang diterima tidak lengkap </p>
                              </div>
 <!--accordion end-->
                            </div>
                            <div class="tab-pane fade" id="b">
                               <div class="content_accordion">
                                     <div class="panel-group" id="gb">
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gb" href="#ps">1. Political Science </a>
                                                 </h4>
                                             </div>
                                             <div id="ps" class="panel-collapse collapse in">
                                                 <div class="panel-body">
                                                     <p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gb" href="#agr">2. Agriculture</a>
                                                 </h4>
                                             </div>
                                             <div id="agr" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.

 The candidates should be capable of:

 Using English correctly and efficiently as a vehicle of communication.
 Reading, comprehending and analyzing advanced texts.
 Grammar and Vocabulary
 The candidate's ability to handle the structure of English will be tested by framing items based upon grammatical categories that usually create problems for foreign students.
 There shall be no prescribed course for this purpose.
 Reading Comprehension and Analysis
 Two unseen passages shall be given with a fixed reading time and multiple choice questions would be placed at the end to be answered. The passage for comprehension shall be fairly technical. The passages would be selected from writings on economic, social, cultural subjects and international affairs.

 Precise Writing
 The candidates will be required to present an acceptable precis of a given passage. The unseen passage will be selected from current, economic, social, cultural and international affairs.
  <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gb" href="#for">3. Forestry </a>
                                                 </h4>
                                             </div>
                                             <div id="for" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gb" href="#soc">4.Sociology</a>
                                                 </h4>
                                             </div>
                                             <div id="soc" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gb" href="#jou">5.Journalism</a>
                                                 </h4>
                                             </div>
                                             <div id="jou" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                              </div>
 <!--accordion end-->
                            </div>
                            <div class="tab-pane fade" id="c">
                                         <div class="content_accordion">
                                     <div class="panel-group" id="gc">
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gc" href="#pm">1. Pure Mathematics </a>
                                                 </h4>
                                             </div>
                                             <div id="pm" class="panel-collapse collapse in">
                                                 <div class="panel-body">
                                                     <p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gc" href="#am">2. Applied Mathematics</a>
                                                 </h4>
                                             </div>
                                             <div id="am" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.
  <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gc" href="#cs">3. Computer Science </a>
                                                 </h4>
                                             </div>
                                             <div id="cs" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gc" href="#stat">4.Statistics</a>
                                                 </h4>
                                             </div>
                                             <div id="stat" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                              </div>
 <!--accordion end-->
                            </div>
                             <div class="tab-pane fade" id="d">
                                         <div class="content_accordion">
                                     <div class="panel-group" id="gd">
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gd" href="#ps">1. Physics </a>
                                                 </h4>
                                             </div>
                                             <div id="phy" class="panel-collapse collapse in">
                                                 <div class="panel-body">
                                                     <p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gd" href="#geo">2. Geology</a>
                                                 </h4>
                                             </div>
                                             <div id="geo" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.

 The candidates should be capable of:

 Using English correctly and efficiently as a vehicle of communication.
 Reading, comprehending and analyzing advanced texts.
 Grammar and Vocabulary
 The candidate's ability to handle the structure of English will be tested by framing items based upon grammatical categories that usually create problems for foreign students.
 There shall be no prescribed course for this purpose.
 Reading Comprehension and Analysis
 Two unseen passages shall be given with a fixed reading time and multiple choice questions would be placed at the end to be answered. The passage for comprehension shall be fairly technical. The passages would be selected from writings on economic, social, cultural subjects and international affairs.

 Precise Writing
 The candidates will be required to present an acceptable precis of a given passage. The unseen passage will be selected from current, economic, social, cultural and international affairs.
  <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gd" href="#geog">3. Geography </a>
                                                 </h4>
                                             </div>
                                             <div id="geog" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gd" href="#chem">4.Chemistry</a>
                                                 </h4>
                                             </div>
                                             <div id="chem" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gd" href="#bot">5. Botany</a>
                                                 </h4>
                                             </div>
                                             <div id="bot" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                              </div>
 <!--accordion end-->
                            </div>
                             <div class="tab-pane fade" id="e">
                                         <div class="content_accordion">
                                     <div class="panel-group" id="ge">
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#ge" href="#ihc">1. Islamic History & Culture </a>
                                                 </h4>
                                             </div>
                                             <div id="ihc" class="panel-collapse collapse in">
                                                 <div class="panel-body">
                                                     <p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#ge" href="#iph">2. Indo Pak History</a>
                                                 </h4>
                                             </div>
                                             <div id="iph" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.

 The candidates should be capable of:

 Using English correctly and efficiently as a vehicle of communication.
 Reading, comprehending and analyzing advanced texts.
 Grammar and Vocabulary
 The candidate's ability to handle the structure of English will be tested by framing items based upon grammatical categories that usually create problems for foreign students.
 There shall be no prescribed course for this purpose.
 Reading Comprehension and Analysis
 Two unseen passages shall be given with a fixed reading time and multiple choice questions would be placed at the end to be answered. The passage for comprehension shall be fairly technical. The passages would be selected from writings on economic, social, cultural subjects and international affairs.

 Precise Writing
 The candidates will be required to present an acceptable precis of a given passage. The unseen passage will be selected from current, economic, social, cultural and international affairs.
  <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#ge" href="#bh">3. British history </a>
                                                 </h4>
                                             </div>
                                             <div id="bh" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#ge" href="#ah">4. History of United States of America</a>
                                                 </h4>
                                             </div>
                                             <div id="ah" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#ge" href="#eh">5. European History</a>
                                                 </h4>
                                             </div>
                                             <div id="eh" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                              </div>
 <!--accordion end-->
                            </div>
                             <div class="tab-pane fade" id="f">
                                         <div class="content_accordion">
                                     <div class="panel-group" id="gf">
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gf" href="#law">1. Law </a>
                                                 </h4>
                                             </div>
                                             <div id="law" class="panel-collapse collapse in">
                                                 <div class="panel-body">
                                                     <p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gf" href="#ilaw">2. International Law</a>
                                                 </h4>
                                             </div>
                                             <div id="ilaw" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.

 The candidates should be capable of:

 Using English correctly and efficiently as a vehicle of communication.
 Reading, comprehending and analyzing advanced texts.
 Grammar and Vocabulary
 The candidate's ability to handle the structure of English will be tested by framing items based upon grammatical categories that usually create problems for foreign students.
 There shall be no prescribed course for this purpose.
 Reading Comprehension and Analysis
 Two unseen passages shall be given with a fixed reading time and multiple choice questions would be placed at the end to be answered. The passage for comprehension shall be fairly technical. The passages would be selected from writings on economic, social, cultural subjects and international affairs.

 Precise Writing
 The candidates will be required to present an acceptable precis of a given passage. The unseen passage will be selected from current, economic, social, cultural and international affairs.
  <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gf" href="#claw">3. Constitutional Law </a>
                                                 </h4>
                                             </div>
                                             <div id="claw" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gf" href="#mlaw">4. Mercantile Law</a>
                                                 </h4>
                                             </div>
                                             <div id="mlaw" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gf" href="#mlj">5. Muslim Law and Jurisprudence</a>
                                                 </h4>
                                             </div>
                                             <div id="mlj" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                              </div>
 <!--accordion end-->
                            </div>
                             <div class="tab-pane fade" id="g">
                                        <div class="content_accordion">
                                     <div class="panel-group" id="gg">
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gg" href="#psy">1. Psychology </a>
                                                 </h4>
                                             </div>
                                             <div id="psy" class="panel-collapse collapse in">
                                                 <div class="panel-body">
                                                     <p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gg" href="#phi">2. Philosophy</a>
                                                 </h4>
                                             </div>
                                             <div id="phi" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.

 The candidates should be capable of:

 Using English correctly and efficiently as a vehicle of communication.
 Reading, comprehending and analyzing advanced texts.
 Grammar and Vocabulary
 The candidate's ability to handle the structure of English will be tested by framing items based upon grammatical categories that usually create problems for foreign students.
 There shall be no prescribed course for this purpose.
 Reading Comprehension and Analysis
 Two unseen passages shall be given with a fixed reading time and multiple choice questions would be placed at the end to be answered. The passage for comprehension shall be fairly technical. The passages would be selected from writings on economic, social, cultural subjects and international affairs.

 Precise Writing
 The candidates will be required to present an acceptable precis of a given passage. The unseen passage will be selected from current, economic, social, cultural and international affairs.
  <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                              </div>
 <!--accordion end-->
                            </div>
                             <div class="tab-pane fade" id="h">
                                         <div class="content_accordion">
                                     <div class="panel-group" id="gh">
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gh" href="#sind">1. Sindhi </a>
                                                 </h4>
                                             </div>
                                             <div id="sind" class="panel-collapse collapse in">
                                                 <div class="panel-body">
                                                     <p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gh" href="#bal">2. Balochi</a>
                                                 </h4>
                                             </div>
                                             <div id="bal" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.

 The candidates should be capable of:

 Using English correctly and efficiently as a vehicle of communication.
 Reading, comprehending and analyzing advanced texts.
 Grammar and Vocabulary
 The candidate's ability to handle the structure of English will be tested by framing items based upon grammatical categories that usually create problems for foreign students.
 There shall be no prescribed course for this purpose.
 Reading Comprehension and Analysis
 Two unseen passages shall be given with a fixed reading time and multiple choice questions would be placed at the end to be answered. The passage for comprehension shall be fairly technical. The passages would be selected from writings on economic, social, cultural subjects and international affairs.

 Precise Writing
 The candidates will be required to present an acceptable precis of a given passage. The unseen passage will be selected from current, economic, social, cultural and international affairs.
  <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gh" href="#kpk">3. Pushto </a>
                                                 </h4>
                                             </div>
                                             <div id="kpk" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gh" href="#pun">4.Punjabi</a>
                                                 </h4>
                                             </div>
                                             <div id="pun" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                              </div>
 <!--accordion end-->
                            </div>
                             <div class="tab-pane fade" id="i">
                                         <div class="content_accordion">
                                     <div class="panel-group" id="gi">
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gi" href="#el">1. English Literature </a>
                                                 </h4>
                                             </div>
                                             <div id="el" class="panel-collapse collapse in">
                                                 <div class="panel-body">
                                                     <p>Candidates will be required to write one or more essays in English. A wide choice of subject will be given. <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gi" href="#urd">2. Urdu</a>
                                                 </h4>
                                             </div>
                                             <div id="urd" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p>The examination will be based upon a paper carrying 100 marks and will be geared to test the candidates' ability to handle grammatical structure, reading comprehension and analysis, and precise writing and composition.

 The candidates should be capable of:

 Using English correctly and efficiently as a vehicle of communication.
 Reading, comprehending and analyzing advanced texts.
 Grammar and Vocabulary
 The candidate's ability to handle the structure of English will be tested by framing items based upon grammatical categories that usually create problems for foreign students.
 There shall be no prescribed course for this purpose.
 Reading Comprehension and Analysis
 Two unseen passages shall be given with a fixed reading time and multiple choice questions would be placed at the end to be answered. The passage for comprehension shall be fairly technical. The passages would be selected from writings on economic, social, cultural subjects and international affairs.

 Precise Writing
 The candidates will be required to present an acceptable precis of a given passage. The unseen passage will be selected from current, economic, social, cultural and international affairs.
  <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gi" href="#per">3. Persian </a>
                                                 </h4>
                                             </div>
                                             <div id="per" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="panel panel-default">
                                             <div class="panel-heading">
                                                 <h4 class="panel-title">
                                                     <a data-toggle="collapse" data-parent="#gi" href="#arb">4. Arabic</a>
                                                 </h4>
                                             </div>
                                             <div id="arb" class="panel-collapse collapse">
                                                 <div class="panel-body">
                                                     <p> <a href="" target="_blank">Learn more.</a></p>
                                                 </div>
                                             </div>
                                         </div>
                              </div>
 <!--accordion end-->
                            </div>
                         </div>
                     </div>
                 </div>
                 <!-- /.row -->

             </div>
             <!-- /.container-fluid -->
  </center>
<!--END LIST -->
</section>
<script>
//Add optional jQuery  so animation works on click for mobile devices

$(".box").click(function(){
   $(this).box().toggleClass("circle");
});

</script>
