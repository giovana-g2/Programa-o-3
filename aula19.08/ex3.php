<?php

class Ingresso {
    protected $valor;

    function __construct($valor) {
        $this->valor = $valor;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function getValor() {
        return $this->valor;
    }

    function imprimeValor() {
        echo "Valor do ingresso: R$ " . number_format($this->valor, 2, ',', '.') . "<br>";
    }
}

class IngressoVIP extends Ingresso {
    private $valorAdicional;

    function __construct($valor, $valorAdicional) {
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }

    function setValorAdicional($valorAdicional) {
        $this->valorAdicional = $valorAdicional;
    }

    function getValorAdicional() {
        return $this->valorAdicional;
    }

    function imprimeValor() {
        $total = $this->getValor() + $this->valorAdicional;
        echo "Valor do ingresso VIP: R$ " . number_format($total, 2, ',', '.') . "<br>";
    }
}

class IngressoNormal extends Ingresso {
    function imprimeDeclaracao() {
        echo "Ingresso Normal<br>";
    }

    function imprimeValor() {
        parent::imprimeValor();
    }
}

class CamaroteInferior extends IngressoVIP {
    private $localizacao;

    function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    function getLocalizacao() {
        return $this->localizacao;
    }

    function imprimeValor() {
        $total = $this->getValor() + $this->getValorAdicional();
        echo "Valor do Camarote Inferior: R$ " . number_format($total, 2, ',', '.') . "<br>";
    }

    function imprimeLocalizacao() {
        echo "Localização: " . $this->localizacao . "<br>";
    }
}

class CamaroteSuperior extends IngressoVIP {
    private $localizacao;

    function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    function getLocalizacao() {
        return $this->localizacao;
    }

    function imprimeValor() {
        $total = $this->getValor() + $this->getValorAdicional();
        echo "Valor do Camarote Superior: R$ " . number_format($total, 2, ',', '.') . "<br>";
    }

    function imprimeLocalizacao() {
        echo "Localização: " . $this->localizacao . "<br>";
    }
}   

$ingressoNormal = new IngressoNormal(75);
$ingressoNormal->imprimeDeclaracao();
$ingressoNormal->imprimeValor();
echo "<hr>";

$ingressoVIP = new IngressoVIP(150, 50);
$ingressoVIP->imprimeValor();
echo "<hr>";

$camaroteInferior = new CamaroteInferior(200, 80, "Setor A");
$camaroteInferior->imprimeValor();
$camaroteInferior->imprimeLocalizacao();
echo "<hr>";

$camaroteSuperior = new CamaroteSuperior(200, 160, "Setor C");
$camaroteSuperior->imprimeValor();
$camaroteSuperior->imprimeLocalizacao();
?>
