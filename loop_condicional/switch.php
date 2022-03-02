<?php
  $tipo='foto';
  //O breakforça (manualmente) a saida de um laço ou condicional no caso o switch

  switch($tipo){
    case 'foto':
        echo "exibindo : uma foto";
        break;
        case 'imagem':
            echo "exibindo : uma imagem";
            break;
            case'video':
                echo "exibindo :um video";
                break;

  }