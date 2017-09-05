<?php
$homepage = file_get_contents('http://192.168.1.100:8080/PRest/api/producttype/getlist');
$result = json_encode($homepage);
$decode = json_decode($result);

var_dump($decode);

?>
