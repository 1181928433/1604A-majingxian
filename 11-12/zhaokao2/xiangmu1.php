<?php
$num = 0;
for($i=1;$i<=4;$i++) {
for($j=1;$j<=4;$j++) {
for($k=1;$k<=4;$k++) {
if($i != $j && $j != $k&& $i != $k) {
$num = $num + 1;
}
}
}
}
echo $num;
?>
