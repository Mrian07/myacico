ini: 
<?php
echo $this->session->userdata('user');
$jml = count($this->cart->contents());
echo"<br>".$jml;
foreach ($this->cart->contents() as $items){
			//print_r($items);
		 echo"<br>apa". $items['id_product'];
		}
?>