<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$comando    =   $_POST["command"];


$exp        =   explode(" ", $comando);


if($exp[0] == 'goto'){
    
    
    if($exp[1] == 'ip'){
        
        
        if(!$exp[2] || empty($exp[2]) || $exp[2] == NULL || !isset($exp[2])){
            
            echo "Você precisa setar um destino.";
            
        }  else {
            
            echo "Você está conectado no IP ".$exp[2];
            
        }
        
        
    }  elseif ($exp[1] == 'downloads') {
        
        echo "Você está conectado no Central de Downloads";
        
    }else{
        echo "Comando inválido.";
    }

}elseif($exp[0] ==  'redefine'){
    
    if($exp[1]  ==  'pwd'){
        echo "Redefinir senha do servidor";
    }elseif($exp[1] ==  'ip'){
        echo "Mudar endereço de IP";
    }else{
        echo "Comando Inválido.";
    }

}elseif($exp[0] ==  'give'){
   
    if($exp[1]  ==  'pwd'){
        echo "Mostrar senha do servidor";
    }elseif($exp[1] ==  'ip'){
        echo "Mostrar endereço de IP";
    }elseif($exp[1] ==  'cash'){
        echo "Mostrar total da conta";
    }else{
        echo "Comando Inválido.";
    }
    
    

}elseif($exp[0]    ==  'help' || $exp[0]    ==  'ajuda' || $exp[0]    ==  '?'){

    echo "\nLista de Códigos permitidos : \n about - Sobre o jogo\n clear - Limpar a tela\n redefine pwd - Redefinir senha do servidor\n redefine ip - Mudar endereço de IP\n goto bank - ir para o banco\n goto downloads - ir para a Central de Downloads\n goto ip [IP DESTINO] - Ir para um ip específico\n\nou link da documentação completa <http://google.com.br/>";
    
}elseif($exp[0] ==  'about'){
    
    echo "\n\n  Hacker Experience é um JOGO de simulação de hacker.\n  Hacker Experience is a hacking simulation GAME.\n  Invada servidores, instale vírus, minere bitcoins, desenvolva novos softwares e muito mais.\n\n";
    
}else{
    echo "Comando desconhecido.";
}


?>