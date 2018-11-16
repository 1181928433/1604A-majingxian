<?php
fuuction FirstNotRepeatingChar($str)
{
	$a = array();//两个数组，一个存在字母，一个存字母出现的次数
	$b = array();
	for($i=0;$i<strlen($str);$i++){
		if(!isset($a[$i])){
			$a[$str[$i]] = 1;
			$b[$str[$i]] = $i;
		}else{
			$a[$str[$i]] ++;
		}
	}
	foreach($a as $k=>$v){
		if($v==1){
			return $b[$k];
		}
	}
}
return -1;
?>