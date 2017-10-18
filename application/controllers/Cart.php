<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends Web {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->helper('app');
	//	$this->load->helper('cookie');
	
		$this->atribut();
	}

	public function atribut(){

	}

	public function index()
	{
		$this->data['title_web'] = "Myacico.com - Create Account Business";
		$this->load->view('frontend/header',$this->data);
		$this->load->view('frontend/nav.php',$this->data);
		$this->load->view('frontend/modules/cart/cart.php',$this->data);
		$this->load->view('frontend/footer',$this->data);
	}
	
	
	function addToCart()
	{ 	
		//$id_unik = $this->unik();
		
		$id = $this->input->post('m_product_id');
		$name = $this->input->post('name');
		$jmlItem = $this->input->post('jmlItem');
		$price = $this->input->post('pricelist');
		$imageurl = $this->input->post('imageurl');
		$weight = $this->input->post('weight');
		
		$stock = $this->input->post('stock');
		
		
		$jmlQty=0;
		foreach ($this->cart->contents() as $items): 	
			if($id==$items['id']){
				$jmlQty = $items['qty'];
			}
		endforeach; 
	
		if($stock>=($jmlQty+$jmlItem)){
		
		$data = array(
				'id'      => $id,
				//'id_product' => $m_product_id,
				'name' => $name,
				'qty'     => $jmlItem,
				'price'   => $price,
				'image'    => $imageurl,
				'weight'    => $weight,
            );
		
			if($this->cart->insert($data)){

				$qty = 0;
				foreach ($this->cart->contents() as $items): 	
					$qty += $items['qty'];
				endforeach; 
				echo $qty;
				
			}else{
				echo"gagal";
			}	
		
		}else{
			echo"stockkosong";	
		}
		
	}
	
	function listCart()
	{ 
		$qty = 0;
		foreach ($this->cart->contents() as $items): 	
			$qty += $items['qty'];
		endforeach; 

		if($qty){
			$this->load->view('frontend/modules/cart/cart_ci.php');
		}else{
			echo"<div class='alert alert-warning produk-kosong' style='border-radius:0px; border:0px; border-left:5px solid #dbd19e;'>Keranjang belanja masih kosong tidak ada produk yang dipesan</div>";
		}
	}
	
	function updateCart()
	{ 
		$rowid = $this->input->post('rowid');
		$qty = $this->input->post('qty');
		
		$data = array(
				'rowid' => $rowid,
				'qty'   => $qty
		);

		$this->cart->update($data);
		
		
		$total_qty = $this->cart->total_items();
		
		echo $total_qty;
	}
	
	function totalQtyToken()
	{ 
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "order/cart/detail";
		$url = api_base_url($api);
		
		
		if($token){
		
			$options = ["http" => [
			"method" => "GET",
			"header" => ["token: " . $token,
			"Content-Type: application/json"],
			]];
			
			$context = stream_context_create($options);
			$konten = file_get_contents($url, false, $context);
		
			$hasil = json_decode($konten, true);
			
			$qty = 0;
			foreach($hasil as $items){
				$qty +=$items['qty'];
			}
			
			echo $qty;
		}else{
			echo 0;
		}
	}	
	
	function listCartToken()
	{ 	
	
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "order/cart/detail";
		$url = api_base_url($api);
		
		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];
		
		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
	
		$this->data['hasil'] = json_decode($konten, true);
		if($hasil = json_decode($konten, true)){
			$this->load->view('frontend/modules/cart/cart_token.php',$this->data);
		}else{
			echo"<div class='alert alert-warning produk-kosong' style='border-radius:0px; border:0px; border-left:5px solid #dbd19e;'>Keranjang belanja masih kosong tidak ada produk yang dipesan</div>";
		}
	}
	
	function loadCart()
	{ 
		$jml=count($this->cart->contents());
		if($jml)
		{ 
	
		echo"<div class='my-cart-scroll'>";

		foreach ($this->cart->contents() as $items): 	
		echo"<div class='row my-cart'>
		  <div class='col-sm-3'><img src='".$items['image']."' border='0' height='50' width='50'></div>
		  <div class='col-sm-7'><b>".$items['name']."</b><br>Rp.".money($items['price'])." <i>(".$items['qty'].")Items</i><br></div>
		  <div class='col-sm-2'><a href='#' onClick=\"dellItemCart('".$items['id']."','".$items['rowid']."','".$items['image']."','".$items['name']."')\"><i class='fa fa-trash' aria-hidden='true'></i></a></div>
		</div>";
		endforeach; 
		echo"
		</div>
		<div>
			<div class='my-total-cart'>TOTAL : <b>Rp.".money($this->cart->total())."</b></div>".anchor('cart', 'My Cart & Checkout', array('class'=>'btn btn-success my-btn-chekout'))."
		</div>";
		}else{
			echo"<center>Keranjang masih kosong</center>";
		} 
	}
	
	function loadCartToken()
	{ 
		$this->data['token'] = $_COOKIE['x-auth'];
		$token = $_COOKIE['x-auth'];
		$api = "order/cart/detail";
		$url = api_base_url($api);
		
		$options = ["http" => [
		"method" => "GET",
		"header" => ["token: " . $token,
		"Content-Type: application/json"],
		]];
		
		$context = stream_context_create($options);
		$konten = file_get_contents($url, false, $context);
		$this->data['hasil'] = json_decode($konten, true);
		if($hasil = json_decode($konten, true)){
			$this->load->view('frontend/modules/cart/list_cart_token.php',$this->data);
		}else{
			echo"<center>Keranjang masih kosong</center>";
		}
	}
	
	function removeItem() {
		$rowid = $this->input->post('rowid');
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		
		$qty = 0;
		foreach ($this->cart->contents() as $items): 	
			$qty += $items['qty'];
		endforeach; 
		echo $qty;
		
	}
	
	function unik(){
		$the_char = array(
		 "1","2","3","4","5","6","7","8","9"
		);
		$max_elements = count($the_char) - 1;
		srand((double)microtime()*1000000);
		$c1 = $the_char[rand(0,$max_elements)];
		$c2 = $the_char[rand(0,$max_elements)];
		$c3 = $the_char[rand(0,$max_elements)]; 
		$c4 = $the_char[rand(0,$max_elements)];
		$c5 = $the_char[rand(0,$max_elements)];
		$c6 = $the_char[rand(0,$max_elements)]; 
		$c7 = $the_char[rand(0,$max_elements)];
		$c8 = $the_char[rand(0,$max_elements)];
		$c9 = $the_char[rand(0,$max_elements)]; 
		$ranc = "$c1$c2$c3$c4$c5$c6$c7$c8$c9";
		return $ranc;
	}
/*
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
  *//*
      public function display_cookie() {
         echo get_cookie('lang');
      //   $this->load->view('Cookie_view');
      }

      public function deletecookie() {
         delete_cookie('lang');
     //    redirect('cookie/display');

	 }*/
}
