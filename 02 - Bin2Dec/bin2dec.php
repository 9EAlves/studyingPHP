<?php

$result  = count(str_split($_POST['binary']));
$resu  = count(str_split($_POST['binary'])) -1 ;
$decimal = 0;

for ($i=0 ; $i < $result ; $i++ ) {
	$decimal += (str_split($_POST['binary'])[$i]*2)**$resu;
	$resu--;
}

echo $decimal;
