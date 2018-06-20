<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Web {

	public function __construct()
  {
		parent::__construct();
      	$this->load->helper('form');
		
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->library('image_lib');
		$this->load->helper('app');
		$this->atribut();
	}

	public function atribut(){

	}

	public function pop()
	{
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/product/popup_add_cart.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function alllistItemCat()
	{

		$cat=$this->uri->segment(3);
		$id=$this->uri->segment(4);
		$short=$this->uri->segment(5);
  	$page=$this->uri->segment(6);


		$url = "https://api.myacico.co.id/myacico-service/category";
		// $url = "http://192.168.0.109:8080/myacico-service/category";
		$konten = file_get_contents($url);
		$this->data['catsearch'] = json_decode($konten, true);
		$catsearch = json_decode($konten, true);

		foreach($catsearch as $data){
			if($data ['m_product_category_id']== $cat){

				$this->data['title_atas'] = $data['name'];
			}
		};

		if($short==''){$this->data['sort_id'] = '5'; }else{$this->data['sort_id'] =$short; }
		$this->data['pro'] = $id;

		$data = array('id_main_src' => $cat);
		$this->session->set_userdata($data);

		$apiTotPage = "product/productlist/".$cat."/".$id."?itemperpage=12&show=pagecount";
		$urlTotPage = api_base_url($apiTotPage);
		$kontenTotPage = file_get_contents($urlTotPage, false);
		$jdata =json_decode($kontenTotPage)->pageCount;

		if($page){
			$api = "product/productlist/".$cat."/".$id."?itemperpage=12";
		}elseif($short){

			$api = "product/productlist/".$cat."/".$id."?itemperpage=12&ob=".$short;

		}else{

			$api ="product/productlist/".$cat."/".$id."?itemperpage=12";

		}
		$url = api_base_url($api);
		$konten = file_get_contents($url, false);
                //ie(print_r($konten));

		$batas = '12';
		if(empty($page)){
			$posisi = 0;
			$page =1;
		}else{
			$posisi = ($page-1)*$batas;
		}
		$this->data['page'] = $page;
		$this->data['posisi'] = $posisi;

		$this->data['jpage'] = ceil($jdata/$batas);
		$domain = domain();

		$this->data['cat'] = $cat;
		$this->data['id'] = $id;

		$this->data['totalItem'] = $jdata;
		$this->data['alias'] = $this->uri->segment(4);
		$this->data['title_web'] = "List Items - ".$domain.'-'.$id;

		$this->data['hasil'] = json_decode($konten, true);

		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/product/product_all_by_cat.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}

	public function alllistItem()
	{
		$functionName = $this->uri->segment(2);
		$id=$this->uri->segment(3);
		$domain = domain();
		$this->data['pro'] = $id;

		$this->data['alias'] = $this->uri->segment(4);
		$this->data['title_web'] = $id.'-'.$domain;
		$this->data['function_name'] = $functionName;

		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/product/product_all.php',$this->data);
		$this->load->view('frontend/footer',$this->data);

	}


	public function changeView()
	{
		$view=$_POST['id'];
		if($view=='list'){
			$data = array('itemView' => 'list');
			$this->session->set_userdata($data);
			echo"list";
		}else{
			$data = array('itemView' => 'grid');
			$this->session->set_userdata($data);
			echo"grid";
		}
	}
	public function bawahDetail(){
				$api2 = "home/topproductcategory";
		$konten = file_get_contents($url);
			$this->data['dathome'] = json_decode($konten, true);
	}
	public function listItem()
	{
		$functionName = $this->uri->segment(2);
		$id_cat=$this->uri->segment(3);
		$domain = domain();

		$this->data['id_cat'] = $id_cat;
		$this->data['alias'] = $this->uri->segment(4);
		$this->data['title_web'] = "List Items - ".$domain.'-'.$id_cat;
		$this->data['function_name'] = $functionName;

		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/product/product_all.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function index()
    {
		//$this->load->view('frontend/test',$this->data);
		$home_domain = domain2();
    	$this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/product/product.php',$this->data);
		$this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function test()
  {

		$array = array("size" => "XL", "color" => "gold");
		print_r(array_values($array));

	}

	public function filterSidebar()
  {
		$filterAlias=$_POST['filterAlias'];
		$valueAlias=$_POST['valueAlias'];


		$data[] = array_push($item, $result[0]['sport_name']);

		$data = array(
			'itemView' => 'list',
			'itemView' => 'list'
		);
		$this->session->set_userdata($data);
	}

	public function category()
	{
		$this->data['cat_id']=$this->uri->segment(3);
    $home_domain = domain2();
		$cat_id=$this->uri->segment(3);
		$api = "category/listc3?c2id=".$cat_id;
		$url = api_base_url($api);

		$options = ["http" => [
		"method" => "GET",
		]];

		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);

		$this->data['hasil'] = json_decode($konten, true);

		//Slide slide_show
		$api = "home/view";
		$url = api_base_url($api);

		$konten = file_get_contents($url);
		$this->data['dathome'] = json_decode($konten, true);


		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = $this->data['hasil']['subName']."-".$home_domain;
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
		$api = "product/productlist/related/".$pro_id;
		$url = api_base_url($api);
		$api_rekom="product/productlist/recomendation/".$pro_id;
		$url_rekom = api_base_url($api_rekom);
		$api_sup="product/productlist/suplement/".$pro_id;
		$url_sup = api_base_url($api_sup);
		$konten21 = file_get_contents($url);

		$this->data['dathome'] = json_decode($konten21, true);
	  	$hasil1 = json_decode($konten21, true);

		if(isset($hasil1['imageurl'])){
			$this->data['imageurl'] = $hasil1['imageurl'];

		}else{
			//$hasil['imageurl'] ='';
			$this->data['imageurl']='';
		}
		$pro_id=$this->uri->segment(3);
		$api = "product/productlist/detail?id=".$pro_id;
		$url = api_base_url($api);
		$api_komen = "product/listreview?productid=".$pro_id;
		$url_komen = api_base_url($api_komen);
		$options = ["http" => [
		"method" => "GET",
		]];
		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
    	$hasil = json_decode($konten, true);

		if($hasil['isActive']=='Y'){

			$konten_komen = file_get_contents($url_komen, false, $context);
			$komen = json_decode($konten_komen, true);

			$getNama = $hasil['name'];
			$options2 = ["http" => [
			'protocol_version'=>'1.1',
			"method" => "GET",
			]];

			$newname = str_replace(' ','%',$getNama);
			$api_komen2 = "product/productlist/detail?id=".$pro_id."&keyword=".$newname;
			$url_komen2 = api_base_url($api_komen2);
			$context2 = stream_context_create($options2);
			$konten2 = file_get_contents($url_komen2);
			$konten_rekom = file_get_contents($url_rekom, false, $context);
			$this->data['rekom'] = json_decode($konten_rekom, true);
			$konten_sup = file_get_contents($url_sup, false, $context);
			$this->data['sup'] = json_decode($konten_sup, true);


			$this->data['komen']=$komen;

			if(isset($hasil['sku'])){
				$this->data['sku'] = $hasil['sku'];

			}else{
				$hasil['sku'] ='';

			}

			$i=0;
			foreach ($hasil['specification'] as $speck)
			{
				if(isset($speck)){
					$this->data['specification'][$i] = $speck['attribute'];
					$this->data['value'][$i] = $speck['value'];

				}else{
						$this->data['specification'][$i]='';
				}
				$i++;

			}

			$this->data['description'] = $hasil['description'];
			$this->data['specialPrice'] = $hasil['specialPrice'];
			$this->data['discount'] = $hasil['discount'];
			$this->data['highlight'] = $hasil['highlight'];
			$this->data['sku'] = $hasil['sku'];
            $this->data['asap_stat'] = $hasil['istodayshipping'];
			$this->data['isWishList']=$hasil['isWishList'];
			$this->data['category'] = $hasil['category'];
			$this->data['m_product_id'] = $hasil['m_product_id'];
			$this->data['rate'] = $hasil['rate'];
			$this->data['rating'] = $hasil['rating'];
			$this->data['alias'] = $hasil['alias'];
			$this->data['name'] = $hasil['name'];
			$this->data['pricelist'] = $hasil['pricelist'];
			//$this->data['sku'] = $hasil['sku'];
			$this->data['stock'] = $hasil['stock'];
			$this->data['volume'] = $hasil['volume'];
			$this->data['weight'] = $hasil['weight'];
			$this->data['rate'] = $hasil['rate'];
			// jika gambar tidak ada

			$this->data['local_strg'] =$pro_id;
			$i=0;
			 foreach ($hasil['imageurl'] as $gmb)
			 {
			     //$this->data['img'][$i]=$gmb;
			     if(isset($gmb)){
					$this->data['img'][$i] = $gmb;
			     }else{
			         $this->data['img'][$i]=false;
			     }
			    //print_r($this->data['img'.$i]);
				 $i++;
				 
			 }
		}

 		$home_domain = domain2();
		$this->data['title_web'] = "-Belanja Online Murah, gratis pengiriman area jakarta"."-".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		if($hasil['isActive']=='Y'){
			$this->load->view('frontend/modules/product/detail.php',$this->data);
		}else{
			$this->load->view('frontend/modules/product/empty_product.php',$this->data);
		}
		$this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function detailKoe()
	    {


				$this->data['pro_id']=$this->uri->segment(3);
				$pro_id=$this->uri->segment(3);
				$api = "product/productlist/related/".$pro_id;
				$url = api_base_url($api);


				$konten21 = file_get_contents($url);

		$this->data['dathome'] = json_decode($konten21, true);
		  $hasil1 = json_decode($konten21, true);

		if(isset($hasil1['imageurl'])){
			$this->data['imageurl'] = $hasil1['imageurl'];

		}else{
			//$hasil['imageurl'] ='';
	                $this->data['imageurl']='';
		}
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

			//s lalang
			$getNama = $hasil['name'];
			$options2 = ["http" => [
			'protocol_version'=>'1.1',
			"method" => "GET",
			]];

			$newname = str_replace(' ','%',$getNama);
			$api_komen2 = "product/productlist/detail?id=".$pro_id."&keyword=".$newname;
			$url_komen2 = api_base_url($api_komen2);
			$context2 = stream_context_create($options2);
			$konten2 = file_get_contents($url_komen2);
			//e lalang




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


	 //die(print_r($hasil['imageurl']));
	$i=0;
	 foreach ($hasil['imageurl'] as $gmb)
	 {
	     //$this->data['img'][$i]=$gmb;
	     if(isset($gmb)){
		$this->data['img'][$i] = $gmb;
	     }else{
	         $this->data['img'][$i]=false;
	     }
	    //print_r($this->data['img'.$i]);
	     $i++;
	 }
	  /*
	  die();
				if(isset($hasil['imageurl'][0])){
						$this->data['img'] = $hasil['imageurl'][0];
				}else{
						$this->data['img'] = "";
				}

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
	       */
			// akhir dari jika gambar tidak ada
         $home_domain = domain2();
			$this->data['title_web'] = "Myacico.co.id - ".$home_domain;
			$this->load->view('frontend/header',$this->data);
			$this->load->view('frontend/nav.php',$this->data);
			$this->load->view('frontend/modules/product/detail2koe.php',$this->data);
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
            $home_domain = domain2();
		$this->data['title_web'] = "Myacico.co.id - ".$home_domain;
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		// $this->load->view('frontend/slide_show.php',$this->data);
		$this->load->view('frontend/modules/product/product2.php',$this->data);
$this->load->view('frontend/sidenav',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}

	public function product3()
    {
            $home_domain = domain2();
		//$this->load->view('frontend/test',$this->data);
		$this->data['title_web'] = "Myacico.co.id - ".$home_domain;
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
	  
	//   public function test3(){
	// 	$path = 'images/general/test.jpg';
    //     #$path = 'c:/xampp/htdocs/acomp_www/1/2.jpg';
    //     #$this->load->library('image_lib');                    
    //        #$this->image_lib->clear();
    //     $imageinit['image_library']     = 'GD2';
    //     $imageinit['quality']            = '100%';
    //     $imageinit['dynamic_output']    = TRUE;
    //     #$imageinit['create_thumb']    = FALSE;
    //     $imageinit['source_image']         = $path;
    //     #$imageinit['maintain_ratio']     = false;
    //     $imageinit['width']             = '200';
    //     $imageinit['height']             = '150';
    
    //     $imageinit['wm_type'] = 'overlay';
    //     $imageinit['wm_overlay_path'] = 'images/general/watermark.png';
    //     $imageinit['wm_padding'] = '0';
    //     $imageinit['wm_hor_alignment'] = 'bottom';
    //     $imageinit['wm_vrt_alignment'] = 'center';
        
    //     $this->image_lib->initialize($imageinit);
    //     $this->image_lib->watermark();
    //     #$this->image_lib->clear();
    //     $this->image_lib->resize();
    //     if(!$this->image_lib->resize() && !$this->image_lib->watermark()){
    //     echo $this->image_lib->display_errors();
	// 	} 
		
	// 	$img = $this->image_lib->watermark();
	// 	echo"ini: $img";
		
	//   }

	//   public function test4($img){

	// 	// Load the stamp and the photo to apply the watermark to
	// 	$stamp = imagecreatefrompng(base_url('images/general/watermark.png'));
	// 	// $im = imagecreatefromjpeg(base_url('images/general/test.jpg'));
	// 	$im = imagecreatefromjpeg($img);
	// 	// Set the margins for the stamp and get the height/width of the stamp image
	// 	$marge_right = 10;
	// 	$marge_bottom = 10;
	// 	$sx = imagesx($stamp);
	// 	$sy = imagesy($stamp);
		
	// 	// Copy the stamp image onto our photo using the margin offsets and the photo 
	// 	// width to calculate positioning of the stamp. 
	// 	imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
		
	// 	// Output and free memory
	// 	header('Content-type: image/png');
	// 	imagepng($im);
	// 	//imagedestroy($im);

	//   }

	//   public function test5(){
	// 	// $img = base_url('images/general/test.jpg');
	// 	// // echo $img; die();
	// 	// $this->data['img'] = $this->test4($img);
	//   }

	//   public function test2()
	//   {
	// 	  $path = 'images/general/test.jpg';
	// 	  #$path = 'c:/xampp/htdocs/acomp_www/1/2.jpg';
	// 	  #$this->load->library('image_lib');                    
	// 		 #$this->image_lib->clear();
	// 	  $imageinit['image_library']     = 'GD2';
	// 	  $imageinit['quality']            = '100%';
	// 	  $imageinit['dynamic_output']    = FALSE;
	// 	  #$imageinit['create_thumb']    = FALSE;
	// 	  $imageinit['source_image']         = $path;
	// 	  #$imageinit['maintain_ratio']     = false;
	// 	//   $imageinit['width']             = '200';
	// 	//   $imageinit['height']             = '150';
	  
	// 	  $imageinit['wm_type'] = 'overlay';
	// 	  $imageinit['wm_overlay_path'] = 'images/general/watermark.png';
	// 	  $imageinit['wm_padding'] = '-50';
	// 	  $imageinit['wm_hor_alignment'] = 'right';
	// 	//   $imageinit['wm_vrt_alignment'] = 'center';
		  
	// 	  $this->image_lib->initialize($imageinit);
	// 	  $this->image_lib->watermark();
	// 	  #$this->image_lib->clear();
	// 	  $this->image_lib->resize();
	// 	  if(!$this->image_lib->resize() && !$this->image_lib->watermark()){
	// 		 echo $this->image_lib->display_errors();
	// 	  } 

		  
	// 	//   $img =  watermark($path  , $image_name);
	// 	//   header("Content-type: image/jpeg");
	// 	//   echo  ( $img );

	// 	//  $this->load->view('frontend/modules/product/lalangtest.php',$this->data);
	//   }
}
