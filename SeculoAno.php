<?php

/* Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. 
O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

Exemplos para teste:

Ano 1905 = século 20
Ano 1700 = século 17 */


function SeculoAno($ano) {
	if ($ano >= 1){
    	if ($ano % 100 == 0)
        	return $ano / 100;
        else
        	return intval($ano/100 + 1);
    }
    else 
    	return "Parâmetro incorreto, apenas número mais que 1";
    
}
?>