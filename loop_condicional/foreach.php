<?php
  $lista=[
      'ovo',
      'leite',
      'farinha de trigo',
      'fermento em pó'
  ];
      echo"<ul>";
      foreach($lista as  $key=>$valor){
        //   echo"item :".($key+1)." :".$valor."<br>";
        echo"<li>".$valor."</li>";

      }
      echo"</ul>";