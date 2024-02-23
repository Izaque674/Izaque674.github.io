<?php



// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

    class Livro
    {
        public $titulo;
        public $autor;

        public function __construct($titulo, $autor) 
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
        }

        public function getTitulo()
        {
            return $this->titulo;
        }
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }
        public function getAutor()
        {
            return $this->autor;
        }
        public function setAutor($autor)
        {
            $this->autor = $autor;
        }

    }
    $livro1 = new Livro("Jogos Vorazes", "S.collins");

    echo "Nome do livro: " . $livro1->getTitulo() ."<br>";
    echo "Autor do livro: ". $livro1->getAutor() ."<br><br>";

// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.

    $livro1->setTitulo("Harry Potter");
    $livro1->setAutor("J. K. Rowling");

    echo "Novo nome do livro: " . $livro1->getTitulo() ."<br>";
    echo "Novo autor do livro: ". $livro1->getAutor() ."<br><br>";

// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.

// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.

// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

    class Animal 
    {
        protected $nome;
        protected $idade;

        public function __construct($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getNome()
        {
            return $this ->nome;
        }
        public function setNome($novoNome)
        {
            $this ->nome = $novoNome;
        }
        public function getIdade()
        {
            return $this -> idade;
        }
        public function setIdade($novaIdade)
        {
            $this -> idade = $novaIdade;
        }
    }

    class Cachorro extends Animal
    {
        public function emitirSom()
        {
            return "auuuuuu";
        }
    }

    class Gato extends Animal
    {
        public function emitirSom()
        {
            return "Miauuuuuuu";
        }
    }

    $cachorro1 = new Cachorro("Thor", 7);
    $gato = new Gato("Garfield", 15);

    echo "Nome do animal: " . $cachorro1->getNome() . "<br>";
    echo "Idade do animal: " . $cachorro1->getIdade() . "<br>";
    echo "Som do cachorro: " . $cachorro1->emitirSom() . "<br><br>";

    echo "Nome do animal: " . $gato->getNome() . "<br>";
    echo "Idade do animal: " . $gato->getIdade() . "<br>";
    echo "Som do gato: " . $gato->emitirSom() . "<br><br>";

// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.

    class Calculadora 
    {
        public $primeiroNumero;
        public $segundoNumero;

        public function __construct($primeiroNumero, $segundoNumero)
        {
            $this->primeiroNumero = $primeiroNumero;
            $this->segundoNumero = $segundoNumero;
        }

        public function getPrimeiroNumero()
        {
            return $this->primeiroNumero;
        }

        public function setPrimeiroNumero($primeiroNumero)
        {
            $this->primeiroNumero = $primeiroNumero;
        }

        public function getSegundoNumero()
        {
            return $this->segundoNumero;
        }

        public function setSegundoNumero($segundoNumero)
        {
            $this->segundoNumero = $segundoNumero;
        }

        public function calcularSoma()
        {
            return $this->primeiroNumero + $this->segundoNumero;
        }
    }

    $calculo = new Calculadora(10, 10);
    $soma = $calculo->calcularSoma();
    echo "A soma do número: " . $calculo->getPrimeiroNumero() . " e do número: " . $calculo->getSegundoNumero() . " é igual a: " . $soma;
    echo "<br><br>";

// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

    class Veiculo
    {
        public $marca;
        public $modelo;

        public function __construct($marca, $modelo)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        public function getMarca()
        {
            return $this->marca;
        }
        public function setMarca($marca)
        {
            $this->marca = $marca;
        }
        public function getModelo()
        {
            return $this->modelo;
        }
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }
    }

    class Carro extends Veiculo
    {
        public function __construct($marca, $modelo)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
        }
    }

    class Moto extends Veiculo
    {
        public $marca;
        public $modelo;

        public function __construct($marca, $modelo)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
        }
    }

    $carro = new Carro("Nissan", "Sentra");
    $moto = new Moto("Honda","cb500r");

    echo "O Carro possui o marca: " . $carro->getMarca() . "\n e o modelo: " . $carro->getModelo() . "<br>";
    echo "A Moto possui o marca: " . $moto->getMarca() . "\n e o modelo: " . $moto->getModelo() . "<br>";
    echo "<br>";

// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.

    trait Mensagens
    {
        public function enviarMensagem($mensagem)
        {
            echo "Mensagem enviada com sucesso: $mensagem<br>"; 
        }
    }

    class EmailSender
    {
        use Mensagens;

        public function receberMensagem($recebido)
        {
            $this->enviarMensagem("mensagem foi recebida: $recebido");
        }
    }

    class SMSSender
    {
        use Mensagens;

        public function receberMensagem($recebido)
        {
            $this->enviarMensagem("mensagem recebida: $recebido");
        }
    }

    $emailSender = new EmailSender();
    $emailSender->receberMensagem("mensagem de e-mail");

    $smsSender = new SMSSender();
    $smsSender->receberMensagem("mensagem de SMS");

    echo "<br>";

// Crie duas classes, 'Cliente' e 'Pedido', no namespace 'Loja'.
// Em seguida, crie uma classe 'Pagamento' em um namespace diferente, por exemplo, 'Financeiro'.
// Demonstre a utilização das classes em seus respectivos namespaces.

    class Cliente
    {
        public function exibirCliente()
        {
            echo "Detalhes do cliente";
        }
    }

    class Pedido
    {
        public function exibirProduto()
        {
            echo "Detalhes do produto";
        }
    }

    class Pagamento
    {
        public function exibirPagamento()
        {
            echo "Detalhes do pagamento";
        }
    }

    // Demonstração de utilização
    use Loja\Financeiro\Cliente as ClienteFinanceiro;

    $cliente = new ClienteFinanceiro();
    $cliente->exibirCliente();
    namespace Loja\Financeiro;
    echo "<br><br>";

// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.

    trait LogErro
    {
        public function registrarLogErro()
        {
            echo "Erro: Registro detectado" . PHP_EOL;
        }
    }

    trait LogInfo
    {
        public function registrarLogInfo()
        {
            echo "Info: Registro aceito" . PHP_EOL;
        }
    }

    class Registro
    {
        use LogErro, LogInfo {
            LogErro::registrarLogErro insteadof LogInfo;
            LogInfo::registrarLogInfo as registrarLogInfoAlias;
        }

        public function registros($logs)
        {
            $this->registrarLogErro($logs);
            $this->registrarLogInfoAlias($logs);
        }
    }

    $registroLogs = new Registro();
    $registroLogs->registros("Testando registros");

?>
