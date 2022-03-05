<?php
  // na função padrao utlizamos precisamos atribuir um valor ex:$n3=0
  // e types é para forçar utilizar um tipo de dados 


  function somar(int $n1,$n2,$n3=0){
      $total=$n1+$n2;
      return $total;
  }

  $resultado=somar(10,20);

  echo "TOTAL :".$resultado;