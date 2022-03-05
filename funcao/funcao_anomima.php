
<?php
  // funcao anomima uma forma de fazer função sem nome e utilizamos uma variavel 


  $dizimo=function(int $valor){
       return $valor * 0.1;

  };

  $funcao=$dizimo(100);

  echo "TOTAL :".$funcao;

  