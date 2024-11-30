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

      <h2>Classes</h2>

      <?php

      class Humano
      {
        public $nome, $sobrenome;
        public $idade;

        function __construct($nome, $sobrenome, $idade)
        {
          $this->nome = $nome;
          $this->sobrenome = $sobrenome;
          $this->idade = $idade;
        }

        public function nomeCompleto()
        {
          return $this->nome . ' ' . $this->sobrenome;
        }
      }

      $andrew = new Humano('Andrew', 'Gomes', 36);

      $viviane = new Humano('Viviane', 'Rodrigues', 39);

      echo '<p>1º objeto criado à partir da classe Humano:</p>';

      echo '<span>' . $andrew->nomeCompleto() . ', ' . $andrew->idade . ' anos.</span>';

      echo '<p>2º objeto criado à partir da classe Humano:</p>';

      echo '<span>' . $viviane->nomeCompleto() . ', ' . $viviane->idade . ' anos.</span>';

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

      <h2>Herança</h2>

    </section>


  </main>
</body>

</html>