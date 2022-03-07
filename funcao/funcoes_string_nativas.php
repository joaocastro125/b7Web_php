
<?php
    //algumas função de string 

    //o trim ->  ele faz com que tire espaços desnessario ex:
    $name="   joao   ";
    echo trim($name);

    //o strlen ->  verifica o tamanho da string

    echo strlen($nome); 

    //  para deixar as letras todas em minuscula 

    echo strtolower($name);
    //  para deixar as letras todas em maiuscula

    echo strtoupper($name);

    //  faz subtituir uma palavra para outra str_replace('joao','castro',$name)

    
//    a substr($name , 0 ,5); é um tipo de fatiamento - onde incia  termina 
//  strpos($variavel , 'a'); vai verificar qual a posição da string 

$posicao=strpos($name,'a');
if($posicao>-1){
    echo "achou";
}else{
    echo "não achou";
}

// ucfirst($variavel) deixa o deixa a primeira em maiusculo

// explode(' ',$variavel) ->  divide string com perador 

//  number_format($variavel) -> formata o numero e o segundo parametro em decimais 
