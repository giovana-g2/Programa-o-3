<?php

class Caneta{
    private $ponta;
    private $cor;

    public function setPonta($ponta) {
        $this->ponta = $ponta;   
    } 
    public function getPonta() {
        return $this->ponta;
        echo "Ponta da caneta: " . $this->ponta. "<br>";    
    }
    public function __construct ($ponta, $cor) {
        $this->ponta = $ponta;
        $this->cor = $cor;
    }
    public function setCor($cor) {
        $this->ponta = $cor;    
        echo "Ponta da cor: " . $this->cor. "<br>";    
    } 
    public function getCor() {
        return $this->cor;
    }
    public function MostraCaneta() {
        echo"<br> ##### <br> Caneta: <br> Ponta" . $this->ponta;
        echo"<br> Cor: " . $this->cor;
    }

}

$c1= new Caneta(10.2, "branca");
$c1->getPonta();
$c1->getCor();
$c1->getCor("azul");
$c1->getCor();
$c1->MostraCaneta();

$c2 = new Caneta(0.5, "amarela");
$c2 ->MostraCaneta();


?>