<?php
// atividade 1.1
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    // Método comum (não abstrato)
    final public function fazerAniversario() {
        $this->idade++;
        echo "<p>Parabéns, {$this->nome}! Agora você tem {$this->idade} anos.</p>";
    }

    // Método abstrato
    abstract public function apresentar();
}

//atividade 2.1
class Visitante extends Pessoa {
    public function apresentar() {
        echo "<p>Sou um visitante chamado {$this->nome}.</p>";
    }
}

//atividade 3.1
class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function apresentar() {
        echo "<p>Sou o(a) aluno(a) {$this->nome}, do curso de {$this->curso}.</p>";
    }

    public function pagarMensalidade() {
        echo "<p>Mensalidade de {$this->nome} paga com sucesso!</p>";
    }
}

//atividade 4.1
class Bolsista extends Aluno {
    private $bolsa;

    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "<p>Bolsa renovada para {$this->nome}!</p>";
    }

    public function pagarMensalidade() {
        echo "<p>{$this->nome} é bolsista! Pagamento com desconto de {$this->bolsa}%.</p>";
    }
}

//atividade 5.1
final class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function __construct($nome, $idade, $sexo, $esp, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $esp;
        $this->salario = $salario;
    }

    public function apresentar() {
        echo "<p>Sou o professor {$this->nome}, especialista em {$this->especialidade}.</p>";
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "<p>O salário de {$this->nome} foi reajustado para R$ {$this->salario}.</p>";
    }
}


// Testando (atividade 2.2 e 5.3)
echo"<h2>atividade 2.2, 3.3 e 5.3</h2>";

$visitante = new Visitante("Carlos", 30, "Masculino");
$visitante->fazerAniversario();  
$visitante->apresentar();

// Testando (atividade 3.3 e 5.3)
$aluno = new Aluno("Maria", 22, "Feminino", "12345", "Engenharia");
$aluno->fazerAniversario(); 

//atividade 5.3
$bolsista = new Bolsista("Pedro", 20, "Masculino", "67890", "Medicina", 50);
$professor = new Professor("Dr. João", 45, "Masculino", "Matemática", 5000);

$vetor = [$visitante, $aluno, $bolsista, $professor];

foreach ($vetor as $obj) {
    echo get_class($obj) . "<br>";
    if ($obj instanceof Pessoa) {
        $obj->apresentar();
    }
}
// atividade 5.4
echo"<h2>atividade 5.4</h2>";
echo get_class($visitante);  
echo "<br>"; 

echo get_class($aluno);     
echo "<br>"; 

echo get_class($bolsista); 
echo "<br>"; 

// Usando instanceof para verificar a hierarquia
echo ($visitante instanceof Pessoa) ? 'Visitante é uma Pessoa' : 'Visitante não é uma Pessoa';  
echo "<br>"; 

echo ($aluno instanceof Pessoa) ? 'Aluno é uma Pessoa' : 'Aluno não é uma Pessoa';  
echo "<br>"; 

echo ($bolsista instanceof Aluno) ? 'Bolsista é um Aluno' : 'Bolsista não é um Aluno';  
echo "<br>"; 

echo ($bolsista instanceof Pessoa) ? 'Bolsista é uma Pessoa' : 'Bolsista não é uma Pessoa';  
echo "<br>";

?>
