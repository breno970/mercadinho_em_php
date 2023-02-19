<?php
require_once 'DVD.php';
require_once 'Leite.php';
require_once 'Exception.php';

class Produto {
    private $codigo;
	private $preco;

    public function detalhes(){
        echo "<hr>Produto: " . $this-> codigo . " Preço: " . $this->preco ."<BR>";
        echo $this->InformacaoNulaException($this->codigo);
        echo $this->InformacaoNulaException($this->preco);
    }
    function __construct($codigo, $preco){
        $this->codigo = $codigo;
	    $this->preco = $preco;
    }
    function getCodigo(){
	    return $this->codigo;
    }
    function getPreco(){
	    return $this->preco;
    }
    function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    function setPreco($preco){
        $this->preco = $preco;
    }
    function InformacaoNulaException($parametro){
        if($parametro == null){
            echo "Campo com informação nula!";
        }
    }
}
?>