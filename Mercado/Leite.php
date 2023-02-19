<?php
require_once 'Produto.php';
require_once 'Perecivel.php';
require_once 'Exception.php';

class Leite extends Produto{
    private $marca;
	private $volume;
    private $datavalidade;

    public $contador = 0;
    public $count = 0;
    
    function __construct($marca, $volume, $datavalidade, $codigo, $preco){
        parent::__construct($codigo, $preco);
	    $this->marca = $marca;
	    $this->volume = $volume;
        $this->datavalidade = $datavalidade;
        $this->codigo = $codigo;
	    $this->preco = $preco;
    } 
    public function detalhes(){
        echo "<hr>Marca: " . $this-> marca . " Volume: " . $this->volume . " DataValiadade: " . $this->datavalidade ." Codigo: ".$this->codigo . " Preco: " . $this->preco . "<BR>";
        echo $this->estavencido();
        echo $this->InformacaoNulaException($this->codigo);
        echo $this->InformacaoNulaException($this->preco);
        echo $this->vencidos();
        echo $this->TotalValor();
    }
    function getMarca(){
	    return $this->marca;
    }
    function getVolume(){
	    return $this->volume;
    }
    function getDataValidade(){
        return $this->datavalidade;
    }
    function setMarca($marca){
        $this->marca = $marca;
    }
    function setVolume($volume){
        $this->volume = $volume;
    }
    function setDataValidade($datavalidade){
        $this->datavaliadade = $datavalidade;
    }
    public function estavencido(){
        if($this->datavalidade<date('Ymd')){
            return $this->estavencido = 'Vencido';
        }else{
            return $this->estavencido = 'Não Vencido';
        }
    }

    public function vencidos(){
        if ($this->datavalidade<date('Ymd')){
            $this->contador += 1;
        }
        
    }

    public function TotalValor(){
        $this->count+=$this->preco;
    }
}
?>