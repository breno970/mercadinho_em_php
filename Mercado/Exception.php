<?php
require_once 'DVD.php';
require_once 'Leite.php';
require_once 'Perecivel.php';
require_once 'Produto.php';

class ExceptionProduto{
        private $paramatro;        
    function InformacaoNulaException($parametro){
        if($parametro == null){
            echo "Campo com informação nula!";
        }
    }   
}
?>