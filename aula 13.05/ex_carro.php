<?php

class Carro{
    public $modelo;
    public $cor;
    public $ano;

    public function __construct($modelo, $cor, $ano) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;   
    } 
    public function getModelo() {
        return $this->modelo;
        echo "O modelo do carro é: " . $this->modelo . "<br>";    
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function getCor() {
        return $this->cor;
        echo "A cor do carro é: " . $this->cor . "<br>";
    }

    public function setano($ano) {
        $this->ano = $ano;
    }
    public function getano() {
        return $this->ano;
        echo "O ano do carro é: " . $this->ano . "<br>";
    }



}

$c1 = new Carro("onix", "branco", 2016);
$c1->getModelo();
$c1->getCor();
?>