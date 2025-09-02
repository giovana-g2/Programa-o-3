<?php

class Quarto{
    private $numero;
    private $preco;

    public function __construct($nun){
        $this->numero = $nun;
    }

    public function getNumero(){
        return $this->numero;
    }
}

class Standard extends Quarto{
    public function getPreco(){
        return $this->preco = 300.00;
    }
}

class Deluxe extends Quarto{
    public $hospedes;
    public function getPreco ($hospedes){
        if($hospedes >= 2){
            return $this->preco = (300.00 * 1.2)*1.1;
        }else{
            return $this->preco = 300.00 * 1.2;
        }
    }
}

class Suite extends Quarto{
    public $dia;
    public function getPreco($dia){
        if($dia >= 2 && $dia <= 6){
            return $this->preco = 300.00 * 1.5;
        }else{
            return $this->preco =(300 * 1.5)*1.5;
        }
    }
}


$std = new Standard(11);
echo "Hospede - Quarto: " . $std->getNumero() . " Valor R$" . $std->getPreco()."<br>";

$duplo = new Deluxe(41);
echo "Hospede - Quarto: " . $duplo->getNumero(). " Valor R$ " . $duplo->getPreco(2). "<br>";

$suite = new Suite(101);
echo "Hospede - Quarto: " . $suite->getNumero() . " Valor R$" . $suite->getPreco(1)."<br>";


?>