<?php
    // tem dois tipos de função a valor e a referencia a valor propriamente dito 
   // o de referencia é quando não podemos alterar a global

  function somar($n1,$n2,&$total){
      $total=$n1+$n2;
      return $total;
  }
  $x=3;
  $y=5;
  $soma=0;

  somar($x,$y,$soma);

  echo "total".$x."+".$y."=".$soma;


  