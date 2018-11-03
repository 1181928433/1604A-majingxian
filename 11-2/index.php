<?php
require 'vendor/autoload.php';
use QL\QueryList;
require 'function.php';

$url = "http://mil.news.sina.com.cn/nz/ejjrxlynz/";
$filename = 'filename.txt';
if(file_exists($filename)){
	$html = file_get_contents($filename);
}else{
	$html = curlRequest($url);
	file_put_contents($filename, $html);
}

$rules = array( 
	'name'=>array('.w_02 a','text'),
	'last'=>array('.w_02 a','text'),
	
);

$data = QueryList::Query($html,$rules)->data;
print_r($data);die;
$db = new PDO("mysql:host=localhost;dbname=week3", 'root', 'root');
$db->query('set names utf8');
foreach ($data as $k => $v) {
	if(isset( $v['name'])){
		$name = $v['name'];
		$last=$v['last'];
		$sql = "insert into lastname (name,last) values ('$name','$last')";
		$db->exec($sql);
	}	
}
echo '采集入库成功';



