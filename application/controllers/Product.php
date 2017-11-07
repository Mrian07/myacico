<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Web {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
		$this->load->helper('app');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('cart');

		$this->atribut();
	}

	public function atribut(){

	}

	public function alllistItem()
	{
		$id=$this->uri->segment(3);
		$this->data['pro']=$this->uri->segment(3);
  $page=$this->uri->segment(5);
	  $page2=$this->uri->segment(4);
// die($id);

// if($id){$page=$id;}else{
// $page=$page;
// }
//
// if($page ==0 ){
// 	$page =1;
// }
if($page){
	$api = "product/productall/".$page;
}else{
	$api = "product/productall/".$id;
}

// echo"$api"; die();
		$url = api_base_url($api);


		$konten = file_get_contents($url, false);

		  $api_max = "product/productall/".$id."?itemperpage=8"."&page=".$page."&show=pagecount";
		  $url2 = api_base_url($api_max);
			// die($url2);
		$options = ["http" => [
					"method" => "GET",
					"Content-Type: application/json",
				],
		];

									// looking maximum page

		$context = stream_context_create($options);
		$konten2 = file_get_contents($url2, false, $context);
		// die($konten2);
                
                     
                 
		$this->data['max_page'] =json_decode($konten2)->pageCount;
		$this->data['hasil'] = json_decode($konten, true);
                if($this->data['hasil'])
                 {
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/product/product_items_all.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
                 }
                 else{
                     $this->data['notFound'] = "Kami tidak menemukan hasil pencarian untuk  ".'"'."<i><b>".$id.'"'."</b></i>";
                    $this->load->view('frontend/header',$this->data);
                    $this->load->view('frontend/nav.php',$this->data);
                    $this->load->view('frontend/modules/product/product_not_found.php',$this->data);
                    $this->load->view('frontend/footer',$this->data);
                 }
	}

	public function listItem()
 {
  $token = null;
    $adaToken =0;
  $this->data['pro']=$this->uri->segment(3);
    if(isset($_COOKIE['x-auth'])){
        $token = $_COOKIE['x-auth'];
        $adaToken =1;
    }
  $id_cat=$this->uri->segment(3);
  $ob=$this->uri->segment(5);

                $page=$this->uri->segment(6);
                //$pg = intval($_GET['page']);
            if($ob != 'all' && $page == True){
                    $api = "product/productlist?category=".$id_cat."&itemperpage=8"."&ob=".$ob."&page=".$page;
                    $api_max = "product/productlist?category=".$id_cat."&itemperpage=8"."&ob=".$ob."&page=".$page."&show=pagecount";


                }elseif($page){
                    $api = "product/productlist?category=".$id_cat."&itemperpage=8"."&page=".$page;
                    $api_max = "product/productlist?category=".$id_cat."&page=".$page."&show=pagecount";

                }elseif($ob != 'all'){

   $api = "product/productlist?category=".$id_cat."&itemperpage=8"."&ob=".$ob;
                        $api_max = "product/productlist?category=".$id_cat."&itemperpage=8"."&ob=".$ob."&show=pagecount";
                }else
                {
                    $api = "product/productlist?category=".$id_cat."&itemperpage=8";
                    $api_max = "product/productlist?category=".$id_cat."&show=pagecount";

                }
//                die(print_r("sam ".$konten2));
//                die(print_r("sam ".$api));
                $api2 = "product/productlist/".$id_cat;
  $url = api_base_url($api);
                $url2 = api_base_url($api_max);

  $options = ["http" => [
        "method" => "GET",
               "header" => ["token: " . $token,
               "Content-Type: application/json"],
  ]];
                // looking maximum page

  $context = stream_context_create($options);
                $konten2 = file_get_contents($url2, false, $context);
  $konten = file_get_contents($url, false, $context);
                 //die(print_r("sam ".json_decode($konten2)->pageCount));
                $this->data['max_page'] =json_decode($konten2)->pageCount;
                //die(print_r($this->data['max_page']));
  $this->data['hasil'] = json_decode($konten, true);
//                die(print_r(get_headers($url)));
  if($adaToken == 1){
   $this->data['cektoken'] = '1';
                        //$this->data['wish']

  }else{
   $this->data['cektoken'] = '0';
  }

   $this->data['alias'] = $this->uri->segment(4);
  $this->data['title_web'] = "Myacico.com - Home";
  $this->load->view('frontend/header',$this->data);
  $this->load->view('frontend/nav.php',$this->data);
  // $this->load->view('frontend/slide_show.php',$this->data);
  $this->load->view('frontend/modules/product/product.php',$this->data);
$this->load->view('frontend/sidenav',$this->data);
  $this->load->view('frontend/footer',$this->data);
 }

	public function index()
    {
		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/product/product.php',$this->data);
$this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function category()
	{
		$this->data['cat_id']=$this->uri->segment(3);

		$cat_id=$this->uri->segment(3);
		$api = "category/listc3?c2id=".$cat_id;
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);

		$this->data['hasil'] = json_decode($konten, true);


		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/product/category.php',$this->data);
$this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function detail()
    {
		$this->data['pro_id']=$this->uri->segment(3);
		$pro_id=$this->uri->segment(3);
		$api = "product/productlist/detail?id=".$pro_id;
                $url = api_base_url($api);
//              KOMENG CUY ~Samuel  utk page &page=1&itemperpage=1
                $api_komen = "product/listreview?productid=".$pro_id;
		$url_komen = api_base_url($api_komen);
                
                
		$options = ["http" => [
		"method" => "GET",
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
                $hasil = json_decode($konten, true);
//                Komen
                $konten_komen = file_get_contents($url_komen, false, $context);
                $komen = json_decode($konten_komen, true);
                //echo "<pre>";die(print_r($komen[0]['user']));
                //$komen[0]['user']
                 $this->data['komen']=$komen;
               
		
//die(print_r($hasil['isWishList']));

if(isset($hasil['sku'])){
	$this->data['sku'] = $hasil['sku'];

}else{
	$hasil['sku'] ='';

}


				if(isset($hasil['specification'][0]['attribute'])){
					$this->data['specification'] = $hasil['specification'][0]['attribute'];
					$this->data['value'] = $hasil['specification'][0]['value'];
				}else{
					$hasil['specification'][0]['attribute'] ='';
						$hasil['specification'][0]['value'] ='';
				}

				if(isset($hasil['specification'][1]['attribute'])){
					$this->data['attribute'] = $hasil['specification'][1]['attribute'];
					$this->data['attribute3'] = $hasil['specification'][1]['value'];
				}else{
					$hasil['specification'][1]['attribute'] ='';
						$hasil['specification'][1]['value'] ='';
				}
				if(isset($hasil['specification'][2]['attribute'])){
					$this->data['attribute4'] = $hasil['specification'][2]['attribute'];
					$this->data['value1'] = $hasil['specification'][2]['value'];
				}else{
					$hasil['specification'][2]['attribute'] ='';
						$hasil['specification'][2]['value'] ='';
				}
				if(isset($hasil['specification'][3]['attribute'])){
					$this->data['attribute5'] = $hasil['specification'][3]['attribute'];
					$this->data['value2'] = $hasil['specification'][3]['value'];
				}else{
					$hasil['specification'][3]['attribute'] ='';
						$hasil['specification'][3]['value'] ='';
				}
				if(isset($hasil['specification'][4]['attribute'])){
					$this->data['attribute6'] = $hasil['specification'][4]['attribute'];
					$this->data['value3'] = $hasil['specification'][4]['value'];
				}else{
					$hasil['specification'][4]['attribute'] ='';
						$hasil['specification'][4]['value'] ='';
				}

		$this->data['description'] = $hasil['description'];
		$this->data['highlight'] = $hasil['highlight'];
		$this->data['sku'] = $hasil['sku'];

                $this->data['isWishList']=$hasil['isWishList'];
		$this->data['category'] = $hasil['category'];
		$this->data['m_product_id'] = $hasil['m_product_id'];
                $this->data['rate'] = $hasil['rate'];
                $this->data['rating'] = $hasil['rating'];
              //  die(print_r($this->data['rating']['star1']));
		$this->data['name'] = $hasil['name'];
		$this->data['pricelist'] = $hasil['pricelist'];
		//$this->data['sku'] = $hasil['sku'];
		$this->data['stock'] = $hasil['stock'];
		$this->data['volume'] = $hasil['volume'];
		$this->data['weight'] = $hasil['weight'];
			$this->data['rate'] = $hasil['rate'];
		// jika gambar tidak ada 


		 $this->data['img'] = $hasil['imageurl'][0];
		 	if(isset($hasil['img1'][1]['imageurl'])){
				$this->data['img1'] = $hasil['imageurl'][1];
				
				}else{
					$hasil['imageurl'][1] ='';
				
				}
		$this->data['img1'] = $hasil['imageurl'][1];
			 	if(isset($hasil['img2'][2]['imageurl'])){
				$this->data['img2'] = $hasil['imageurl'][2];
				
				}else{
					$hasil['imageurl'][2] ='';
				
				}
		$this->data['img2'] = $hasil['imageurl'][2];
			if(isset($hasil['img1'][2]['imageurl'])){
				$this->data['img1'] = $hasil['imageurl'][2];
				
				}else{
					$hasil['imageurl'][2] ='';
				
				}
	
		if(isset($hasil['img3'][3]['imageurl'])){
				$this->data['img3'] = $hasil['imageurl'][3];
				
				}else{
					$hasil['imageurl'][3] ='';
				
				}
	$this->data['img3'] = $hasil['imageurl'][3];
		// akhir dari jika gambar tidak ada 
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/product/detail.php',$this->data);
$this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function addWishlist()
	{
		$id = $this->input->post('id');
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "product/addwishlist?item_id=".$id;
		$url = api_base_url($api);
                if($token){
		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];
                }
                else{
                  // signIn();
                }
		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$hasil = json_decode($konten, true);
		echo $hasil['status'];
	}

	public function product2()
    {
		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/product/product2.php',$this->data);
$this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function product3()
    {
		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.com - Home";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);

		$this->load->view('frontend/modules/product/product3.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function switchLang()
    {
		$lang = $this->input->post('lang');
		set_cookie('lang',$lang,'3600');
		echo $lang;
	}
	/*
	public function index() {
         set_cookie('cookie_name','cookie_value','3600');
         $this->load->view('Cookie_view');
      }
  */
      public function display_cookie() {
         echo get_cookie('lang');
      //   $this->load->view('Cookie_view');
      }

      public function deletecookie() {
         delete_cookie('lang');
     //    redirect('cookie/display');
      }
}
