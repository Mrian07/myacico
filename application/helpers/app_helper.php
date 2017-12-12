<?php

function domain(){

            return "Myacico.co.id";
  }
  function domain2(){

            return "Belanja online murah, gratis pengiriman area Jakarta*";
  }
function api_base_url($param)
{
	//$url = "http://myacico.net:8080/myacico-service/api/".$param;
//	$url = "https://api.myacico.co.id/myacico-service/".$param;
   $url = "https://api.myacico.co.id/dev/".$param;
	return $url;
}

function api_base_url2($param)
{
//   $url = "https://acc.myacico.co.id/dev/".$param;
	$url = "https://acc.myacico.co.id/myacico-account/".$param;
	return $url;
}

function tanggal($tanggal)
{
	$get_tanggal=explode(" ",$tanggal);

	$get_date=explode("-",$get_tanggal[0]);
	$tanggal="$get_date[2]";
	$bulan="$get_date[1]";
	$tahun="$get_date[0]";

	if($bulan=="01"){
		$bulan="Januari";
	}elseif($bulan=="02"){
		$bulan="Februari";
	}elseif($bulan=="03"){
		$bulan="Maret";
	}elseif($bulan=="04"){
		$bulan="April";
	}elseif($bulan=="05"){
		$bulan="Mei";
	}elseif($bulan=="06"){
		$bulan="Juni";
	}elseif($bulan=="07"){
		$bulan="Juli";
	}elseif($bulan=="08"){
		$bulan="Agustus";
	}elseif($bulan=="09"){
		$bulan="September";
	}elseif($bulan=="10"){
		$bulan="Oktober";
	}elseif($bulan=="11"){
		$bulan="November";
	}elseif($bulan=="12"){
		$bulan="Desember";
	}
	return "$tanggal $bulan $tahun";
}

function tanggal_time($tgl_time)
{
	$get_date_time=explode(" ",$tgl_time);

	$get_date=explode("-",$get_date_time[0]);
	$tanggal="$get_date[2]";
	$bulan="$get_date[1]";
	$tahun="$get_date[0]";

	if($bulan=="01"){
		$bulan="Januari";
	}elseif($bulan=="02"){
		$bulan="Februari";
	}elseif($bulan=="03"){
		$bulan="Maret";
	}elseif($bulan=="04"){
		$bulan="April";
	}elseif($bulan=="05"){
		$bulan="Mei";
	}elseif($bulan=="06"){
		$bulan="Juni";
	}elseif($bulan=="07"){
		$bulan="Juli";
	}elseif($bulan=="08"){
		$bulan="Agustus";
	}elseif($bulan=="09"){
		$bulan="September";
	}elseif($bulan=="10"){
		$bulan="Oktober";
	}elseif($bulan=="11"){
		$bulan="November";
	}elseif($bulan=="12"){
		$bulan="Desember";
	}

	$time = explode(".",$get_date_time[1]);

	return "$tanggal $bulan $tahun ".$time[0]." WIB";
}
/*
function money($money)
{
	$get_m = explode(",",$money);
	if($get_m[0]){
	return number_format($get_m[0],0,',','.');
	}else{
	return 0;
	}
}
*/
function money($money)
{
	if($money){
	   return number_format($money,0,',','.');
	}else{
  	$money="0";
  	return $money;
	}
}


function setUrl($id)
{
	return strtr($id,array('+' => '.', '=' => '-', '/' => '~'));
}

function getUrl($id)
{
	return strtr($id,array('.' => '+', '-' => '=', '~' => '/'));
}
