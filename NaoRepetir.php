<?php


/* Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. 
Depois informe qual ou quais número(s) não se repetiram.

Exemplo

Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
Os números que não se repetem são o 4 e 7. */


function Preencher($array) {	
	
    echo "Array sorteado = [";
    
    for($i = 0; $i < 20; $i++){
		array_push($array, rand(1, 10));
        
        if($i == 19)
        	echo $array[$i] . "]";
		else
        	echo $array[$i] . ",";   
	}
    
	return $array;
}

function Repeticao($array){

	$arrayNaoRepete = array();
    
    for ($i = 0; $i < count($array); $i++) {
    	
        $repete = false;
        
        for ($j = 0; $j < count($array); $j++) {
    		if ($array[$i] == $array[$j] && $i != $j){
            	$repete = true;
            	break;
            }
        }
        
        if($repete == false) array_push($arrayNaoRepete, $array[$i]);
    }
    
    if (count($arrayNaoRepete) == 1){
    	echo "O número que não se repete é: " . $arrayNaoRepete[1];
	} elseif(count($arrayNaoRepete) > 1) {
      echo "Os números que não se repetem são: ";
      for ($i = 0; $i < count($arrayNaoRepete); $i++) {
			if($i == count($arrayNaoRepete)-1)
				echo "e " . $arrayNaoRepete[$i] . ".";
			else
				echo $arrayNaoRepete[$i] . ", ";
      }
	}
    else {
		echo "Não há elementos que não se repetem.";	
	}
    
}

$array = array();
$array = Preencher($array);

Repeticao($array);

?>