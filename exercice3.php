<?php
$a = 1;
$b = 2;
$c = 3;
var_dump($a,$b,$c);
if($a>$b and $b>$c ){
    var_dump($a,$b,$c);
}
elseif($a>$c and $c>$b)  {
    var_dump($a,$c,$b);
}
else{
    var_dump($b,$a,$c);
}
