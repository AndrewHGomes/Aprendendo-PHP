<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programação Orientada a Objetos</title>
</head>

<body>
  <header>
    <h1>Programação Orientada a Objetos</h1>
  </header>
  <main>
    <section>

      <h2>Introdução</h2>

      <h3>C.O.M.E.R.N. - Conceito Base</h3>

      <ol>
        <li>Confiável - o isolamento entre partes gera software seguro. Ao alterar uma parte, nenhuma outra é afetada;</li>
        <li>Oportuno - ao dividir tudo em partes, várias delas podem ser desenvolvidas em paralelo;</li>
        <li>Manutenível - atualizar um software é mais fácil, uma pequena modificação vai beneficiar todas as partes que usarem o objeto;</li>
        <li>Extensível - o software não é estático, ele deve crescer para permanecer útil;</li>
        <li>Reutilizável - podemos usar objetos de um sistema que criamos em outro sistema futuro;</li>
        <li>Natural - mais fácil de entender, foco maior na funcionalidade do que nos detalhes de implementação.</li>
      </ol>

      <ul>
        <li>A partir da versão 5, a Programação Orientada a Objetos foi introduzida no PHP;</li>
        <li>A POO é mais rápida e fácil de executar;</li>
      </ul>

      <p>
        A programação procedural consiste em escrever procedimentos ou funções que executam operações nos dados, <br>
        enquanto a programação orientada a objetos consiste em criar objetos que contêm dados e funções.
      </p>

      <p>
        A programação orientada a objetos tem várias vantagens sobre a programação procedural:
      </p>

      <ul>
        <li>Mais rápida e fácil de executar;</li>
        <li>Fornece uma estrutura clara para os programas;</li>
        <li>Ajuda a mater o código coeso(D.R.Y), fácil de manter, modificar e depurar;</li>
        <li>Torna possível criar aplicações totalmente reutilizáveis, com menos código e menor tempo de desenvolvimento.</li>
      </ul>

      <p>
        <strong>
          D.R.Y: Don't Repeat Yourself é sobre reduzir a repetição de código. <br>
          Devemos extrair códigos comuns para a aplicação, colocá-los em um único lugar <br>
          e reutilizá-los em vez de repeti-los.
        </strong>
      </p>

      <p>
        <strong>
          <ins>IMPORTANTE:</ins> Os nomes das classes são <em>case insensitive</em>, ou seja, maiúsculas ou minúsculas não importam, o sistema as reconhece de qualquer maneira.
        </strong>
      </p>

    </section>
    <section>

      <h2>O que é um objeto?</h2>

      <p>Coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas características, <br>
        comportamentos e estado atual
      </p>

      <p>
        <em>
          Uma instância de uma classe.
        </em>
      </p>

      <p>Faça 3 preguntas para lembrar o que é um objeto:</p>

      <ul>
        <li>Que coisas tem? Atributo</li>
        <li>Que coisas faz? Método</li>
        <li>Como está agora? Estado</li>
      </ul>

    </section>
    <section>

      <h2>Classes</h2>

      <p>
        <em>
          Define os atributos e métodos comuns que serão compartilhados pelos objetos.
        </em>
      </p>

      <?php

      class Caneta
      {
        public $modelo;
        public $cor;
        public $ponta;
        public $carga;
        public $tampada;

        function rabiscar()
        {
          if ($this->tampada === true) {
            echo "<p>Não posso rabiscar. Caneta tampada</p>";
          } else {
            echo "<p>Estou rabiscando...</p>";
          }
        }

        function tampar()
        {
          $this->tampada = true;
        }

        function destampar()
        {
          $this->tampada = false;
        }
      }

      $caneta1 = new Caneta();
      $caneta1->modelo = 'Esferográfica';
      $caneta1->cor = 'Azul';
      $caneta1->ponta = 0.5;
      $caneta1->carga = 90;

      print_r($caneta1);

      $caneta1->destampar();

      $caneta1->rabiscar();

      ?>

      <ul>
        <li>Classes e objetos são os 2 pricipais aspectos da POO;</li>
        <li>Uma classe é um molde/modelo para criar objetos;</li>
        <li>Objeto é uma instância de uma classe;</li>
      </ul>

      <p>
        <ins>
          Quando os objetos individuais são criados, eles herdam todas as propriedades e comportamentos da classe, <br>
          mas cada objeto terá valores diferentes para as propriedades.
        </ins>
      </p>

      <ul>
        <li>A classe é criada usando a palavra-chave class;</li>
        <li>A seguir, damos um nome(usando PascalCase por convensão) para a class;</li>
        <li>Depois usamos o par de chaves para alocar as propriedades e métodos.</li>
      </ul>

      <ul>
        <li>
          Nas classes, variáveis são chamadas de propriedades e funções são chamadas de métodos:
        </li>
        <ul>
          <li>Propriedades: variáveis que guardam as características ou atributos do objeto;</li>
          <li>Métodos: funções que definem o que o objeto pode fazer, suas ações.</li>
        </ul>
      </ul>

      <p>
        <ins>
          A palavra-chave this se refere ao objeto atual e só está disponível dentro de métodos.
        </ins>
      </p>

      <ul>
        <li>Ainda temos o construct(método especial);</li>
        <li>Ele é executado automaticamente quando é instanciado um objeto à partir de uma classe;</li>
        <li>Este método é escrito com dois undercores(__construct())</li>
      </ul>

    </section>
    <section>

      <h2>Visibilidade</h2>

    </section>
    <section>

      <h2>Herança</h2>

      <?php

      class Animal
      {
        public $especie;

        function __construct($especie)
        {
          $this->especie = $especie;
        }

        public function tipoEspecie()
        {
          return "Este animal é um {$this->especie}";
        }
      }

      $cachorro = new Animal('mamífero');

      echo "<p>{$cachorro->tipoEspecie()}</p>";

      ?>

      <ul>
        <li>Mecanismo que permite criar classes que herdam propriedades e métodos de outras classes;</li>
        <li>A classe inicial é designada por classe base, classe mãe ou superclass;</li>
        <li>A classe que herda propriedades e métodos da classe mãe é chamada de classe filha ou classe derivada;</li>
        <li>Para uma classe herdar de outra, usamos o palavra-chave extends.</li>
      </ul>

      <?php

      class Mamifero extends Animal
      {
        public $patas;

        function __construct($patas)
        {
          $this->patas = $patas;
        }

        function quantidadePatas()
        {
          return "Este animal é um {$this->especie} e tem {$this->patas}.";
        }
      }

      $gato = new Mamifero('gato', 4);

      echo "<p>{$gato->quantidadePatas()}</p>";

      ?>

    </section>


  </main>
</body>

</html>