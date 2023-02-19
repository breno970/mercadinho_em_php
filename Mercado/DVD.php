<?php
require_once 'Produto.php';
require_once 'Exception.php';

class DVD extends Produto{
    private $titulo;
	private $ano;

    public $count = 0;
    public $contano = 0;

    public function detalhes(){
        echo "<hr>DVD: " . $this-> titulo . " Ano: " . $this->ano ." Codigo: ".$this->codigo . " Preco: " . $this->preco ."<BR>";
        echo $this->InformacaoNulaException($this->titulo);
        echo $this->InformacaoNulaException($this->ano);
        echo $this->InformacaoNulaException($this->codigo);
        echo $this->InformacaoNulaException($this->preco);
        echo $this->TotalValor();
        echo $this->ContAno();
    }
    function __construct($titulo, $ano, $codigo, $preco){
        parent::__construct($codigo, $preco);
        $this->titulo = $titulo;
	    $this->ano = $ano;
        $this->codigo = $codigo;
	    $this->preco = $preco;
    }
    function getTitulo(){
	    return $this->Titulo;
    }
    function getAno(){
	    return $this->ano;
    }
    function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    function setAno($ano){
        $this->ano = $ano;
    }
    function InformacaoNulaException($parametro){
        if($parametro == null){
            echo "Campo com informação nula!";
        }
    } 

    public function TotalValor(){
        $this->count+=$this->preco;
    }

    public function ContAno(){
        if($this->ano == 2003){
            $this->contano += 1;
        }
    }
}
?>