<?php


/* Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  e 
retorne um array com os números primos estão compreendidos entre o valor inicial e o final, 
desprezando o número inicial e final recebidos como parâmetro. 

Exemplo para teste:

Numero Inicial = 10
Número Final = 29
Resposta: Encontrados 5 números primos, são eles: 11,13,17,19,23 */


function Primo($inicial, $final) {
	$primos = array();
	for($i = $inicial+1; $i < $final; $i++){
    	$primo = 0;
      for($j=2; $j < $i; $j++)
          if($i % $j == 0){
              $primo++;
          }
      if($primo == 0) array_push($primos, $i);
     }
     return $primos;
      
}
?>