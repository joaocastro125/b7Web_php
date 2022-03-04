<?php

   // parametro de função onde fica as variaveis onde podemos utilizar e retornar algo 
    function somar($n1,$n2){
        $total=$n1+$n2;
        return $total;
    }
    $resultado=somar(10,20);

    echo "TOTAL :".$resultado;