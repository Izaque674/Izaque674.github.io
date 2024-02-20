<?php
// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
    }

    public function setTitulo($novoTitulo) {
        $this->titulo = $novoTitulo;
    }

    public function setAutor($novoAutor) {
        $this->autor = $novoAutor;
    }
}

$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien");

echo "Informações originais do livro:<br>";
$livro->exibirInformacoes();

echo "<br>";
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.

$livro->setTitulo("Harry Potter");
$livro->setAutor("J.K. Rowling");

echo "Informações atualizadas do livro:<br>" ;
$livro->exibirInformacoes();




// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.

class Animal {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function setIdade($novaIdade) {
        $this->idade = $novaIdade;
    }
}

class Cachorro extends Animal {
    public function getIdade() {

        return parent::getIdade();
    }

    public function getNome() {
        
        return parent::getNome();
    }
}

$cachorro = new Cachorro("Rex", 5);

echo "Nome: " . $cachorro->getNome() . "<br>";
echo "Idade: " . $cachorro->getIdade() . " anos<br>";

?>


