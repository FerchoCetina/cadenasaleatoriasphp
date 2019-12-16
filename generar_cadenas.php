<?php

	$c = $_POST['c'];
	$o = $_POST['o'];
	$array = array();
	
	function generarcadena($c, $o) {
	$caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $caracteresLength = strlen($caracteres);
    $max_combinaciones=pow($caracteresLength, $c);
    if($max_combinaciones<$o){
    	$nec_caracteres=pow($o, 1/$c);
    	$nec_caracteres=ceil($nec_caracteres);	
		$ascii=97;
    	for($i=36;$i<=$nec_caracteres;$i++){
    		$caracteres.=chr($ascii);
    		$ascii=$ascii+1;			
    	}
    }
	$caracteresLength = strlen($caracteres);
    $randomString = '';
    for ($i = 0; $i <$c; $i++) {
        $randomString .= $caracteres[rand(0, $caracteresLength - 1)];

    }
    return $randomString ;
} 


for($i=0; $i<$o; $i++){
	$cadena=generarcadena($c, $o);
	if(in_array($cadena, $array)){
		$i--;
	}
	else{
		array_push($array, $cadena);
		$n=$i+1;
		echo $n. ".- ". utf8_decode($array[$i]);echo ('<pre>');				
	}

}




?>