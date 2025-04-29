<?php
// Definindo a classe caneta

class Caneta{
    // definir atributos
    public $cor;
    public $marca;
    public $ponta;
    public $tamanho;
    public $carga;

    // definir os metodos
    public function escrever(){
        echo"escrevendo...<br>";
    }    
    public function rabiscar(){
        echo "rabiscando...<br>";
    }
    public function sublinhar(){
        echo "sublinhando...<br>";
    }
    public function pintar(){
        echo "pintando...<br>";
    }

}

// Instanciando a classa caneta
$caneta1 = new Caneta();
// como os atributos da classe caneta são publicos, podemos acessá-los diretamentes
$caneta1->cor = "azul";
$caneta1->marca = "BIC";
$caneta1->ponta = 0.5;
$caneta1->tamanho = "grande";
$caneta1->carga = 100;

// Exibindo os atributos da caneta
echo "Cor: " . $caneta1->cor ."<br>";
echo "Marca: " . $caneta1->marca ."<br>";
echo "Ponta: " . $caneta1->ponta ."<br>";
echo "Tamanho: ". $caneta1->tamanho ."<br>";
echo "carga: ". $caneta1->carga ."<br>";

// chamar o métodos da caneta
$caneta1->escrever();
$caneta1->rabiscar();
$caneta1->sublinhar();
$caneta1->pintar();



?>