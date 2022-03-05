<?php

   // funcao recursiva é uma função que execulta ela mesma 

   function div($numero){
       $metade=$numero/2;
       echo $metade."<br>";

       if(round($metade)>0){
           div($metade);
       }
       
      
   }
   div(100);