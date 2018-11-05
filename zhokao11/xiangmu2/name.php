<?php
//阶乘函数
function factorial($n){
if($n<0){
return "error";
}
if($n==0){
return 1;
}
return $n * factorial($n-1);
}
// 从-1 到9的阶乘
for($i=-1;$i<10;$i++){
echo "$i!=".factorial($i)."<br/>";
}
$size = 0; //范围
$factorial = 0; //阶乘
for($size=-1;$size<10;$size++){
echo "$size!=";
if($size<0){
echo "error<br/>";
continue;
}
$result = 1; //结果
//开始阶乘
for($factorial=2;$factorial<=$size;$factorial++)
$result *= $factorial;
echo $result."<br/>";
}
?>