<?php
  //a condicional null cao ele funciona parecido como operador ternario  o comando isset ele quer dizer existir
// no null cao ele faz com dois ??
$nome='joao     ';
$sobrenome='castro ';

$nomeCompleto=$nome;
$nomeCompleto.=isset($sobrenome)?$sobrenome:' ';

echo $nomeCompleto;


