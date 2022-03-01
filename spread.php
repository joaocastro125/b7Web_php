<?php

// o stread ele funciona como não queremos repetir todos as informações so incluir 
// itlizamos para isso o stread 

$lista=[
    'acucar',
    'fermento em pó',
    'ovo',
    'leite',
    'manteiga'
];

$lista2=[
    ...$lista,
    'chololate'
];

echo $lista2[5];