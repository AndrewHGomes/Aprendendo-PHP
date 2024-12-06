<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções no PHP</title>
</head>

<body>
  <header>
    <h1>Funções no PHP</h1>
  </header>
  <main>
    <section>

      <ul>
        <li>O verdadeiro poder do PHP vem de suas funções;</li>
        <li>São blocos de códigos identificados por um nome e uma assinatura;</li>
        <li>Elas permitem que o código seja reutilizado de forma mais consistente;</li>
        <li>O PHP tem mais de 1000 funções integradas e, além disso, você pode criar suas próprias funções personalizadas.</li>
      </ul>

    </section>
    <section>

      <h2>Funções Internas</h2>

      <ul>
        <li>Como dito anteriormente, o PHP tem mais de 1000 funções integradas;</li>
        <li>Elas podem ser chamadas diretamente, de dentro de um script, para executar uma tarefa específica;</li>
      </ul>

    </section>
    <section>

      <h2>Funções Definidas</h2>

      <ul>
        <li>Além das funções integradas, é possível criarmos nossas próprias funções;</li>
        <li>Funções são blocos de instruções que podem ser reutilizados repetidamente em um programa;</li>
        <li>Uma função NÃO será executada automaticamente quando uma página for carregada;</li>
        <li>Elas são executadas somente por uma invocação;</li>
      </ul>

      <?php

      function minhaMsg()
      {
        echo "<p>Hello, function!</p>";
      }

      minhaMsg();

      ?>

      <ul>
        <li>
          Assinatura de uma função:
        </li>
        <ul>
          <li>A palavra-chave function;</li>
          <li>O nome identificador;</li>
          <li>O par de parênteses que recebe ou não parâmetros ou argumentos;</li>
          <li>O par de chaves que chamamos de bloco ou corpo da função.</li>
        </ul>
        <li>
          Para executá-las, devemos chamar seu nome seguido do par de parênteses com ou sem argumentos ou parâmetros.
        </li>
      </ul>

      <p>
        <strong>
          Nota: Um nome de função deve começar com uma letra ou um sublinhado. <br>
          Nomes de função NÃO diferenciam maiúsculas de minúsculas.
        </strong>
      </p>

      <p>
        <em>
          <ins>
            Dica: Dê à função um nome que reflita o que ela faz!
          </ins>
        </em>
      </p>

      <?php

      executar();

      function executar()
      {
        echo "<p>A função foi executada!</p>";
      }

      ?>

    </section>
    <section>

      <h2>Argumentos ou Parâmetros</h2>

      <ul>
        <li>Informações podem ser passadas para funções por meio de argumentos ou parâmetros;</li>
        <li>São como variáveis. São valores que a função espera receber;</li>
        <li>São fundamentais para aumentar a utilidade das funções;</li>
        <li>Os argumentos são especificados após o nome da função, dentro dos parênteses;</li>
        <li>Podemos colocar quantos argumentos forem necessários, porém separados por vírgula(,);</li>
      </ul>

      <?php

      function nomeFamilia($nome, $year)
      {
        echo "<p>$nome Gomes. Nasceu em $year.</p>";
      }

      nomeFamilia("Orlando", 1964);
      nomeFamilia("Andrew", 1988);
      nomeFamilia("Irvin", 1990);
      nomeFamilia("Steice", 1992);
      nomeFamilia("Eliza", 2001);

      ?>

    </section>
    <section>

      <h2>Argumento ou Parâmetro Padrão</h2>

      <ul>
        <li>Valores que são utilizados quando uma função não recebe argumento em sua chamada;</li>
        <li>Isso torna o código mais fácil de ler e menos propenso a erros;</li>
      </ul>

      <?php

      function userName($user = 'Usuário')
      {
        echo "<p>$user foi identificado no sistema</p>";
      }

      userName("Irvin");

      userName("Renan");

      userName();

      ?>

      <p>
        <strong>
          IMPORTANTE: Os parâmetros padrão devem ser definidos <ins>APÓS</ins> os que não são padrão!
        </strong>
      </p>

    </section>
    <section>

      <h2>Named Arguments</h2>

      <ul>
        <li>No PHP8, foi introduzido este novo conceito;</li>
      </ul>

      <?php

      function modoAntigo($x, $y = 10, $z = 15)
      {
        echo "<p>$x + $y + $z = " . ($x + $y + $z) . "</p>";
      }

      modoAntigo(41);

      modoAntigo(3, 6);

      function modoNovo($x, $y = 10, $z = 15)
      {
        echo "<p>$x - $y - $z = " . ($x - $y - $z) . "</p>";
      }

      modoNovo(28);

      modoNovo(53, y: 3);

      modoNovo(30, z: 5);

      ?>

    </section>
    <section>

      <h2>Retornando valores</h2>

      <ul>
        <li>Para permitir que uma função nos devolva um valor, usamos a instrução return;</li>
        <li>Uma função sem return devolve um valor null;</li>
        <li>Ao chegar no return, a função para de executar, nada mais é lido abaixo do return;</li>
        <li>Tudo o que a função precisa executar deve estar acima do return;</li>
      </ul>

      <?php

      function somaDoisValores($a, $b)
      {
        $soma = "<p>Soma: $a + $b = " . ($a + $b) . "</p>";
        return $soma;
      }

      echo somaDoisValores(40, 35);

      echo somaDoisValores(60, 17);

      echo somaDoisValores(101, 22);

      $meuNome = "Andrew";

      if (avaliarNome($meuNome)) {
        echo "<p>Eu me chamo $meuNome</p>";
      } else {
        echo "<p>Nome está incorreto!</p>";
      }

      function avaliarNome($nome)
      {
        if ($nome === "Andrew") {
          return true;
        } else {
          return false;
        }
      }

      function teste()
      {
        //
      }

      if (teste() === null) {
        echo "<p>Esta função não tem return, logo retorna Null</p>";
      }

      ?>

    </section>
    <section>

      <h2>Funções Anônimas</h2>

      <ul>
        <li>São funções que não recebem um nome identificador;</li>
        <li>São muito usadas como parâmetros <ins>callable</ins>;</li>
        <li>Podem ser atribuídas a variáveis;</li>
        <li>Podem ter vários outros casos de uso.</li>
      </ul>

      <?php

      $anonimaSimples = function () {
        echo "<p>Olá, mundo!</p>";
      };

      $anonimaSimples();

      $anonimaParametro = function ($tech) {
        echo "<p>Estou estudando $tech</p>";
      };

      $anonimaParametro('PHP');

      $anonimaParametro('MySQL');

      $anonimaCallable = function () {
        return "<p>Tô aqui!!!</p>";
      };

      function falar($arg)
      {
        echo $arg;
      }

      falar($anonimaCallable());

      ?>

    </section>
    <section>

      <h2>Closures</h2>

      <ul>
        <li>São funções anônimas que podem usar variáveis do escopo Globa;</li>
        <li>Porém, as variáveis Globais usadas dentro da closure não sofrem alterações;</li>
      </ul>

      <?php

      $x = 20;

      $y = 30;

      $minhaClosure = function ($z) use ($x, $y) {
        echo "<p>$z | $x | $y</p>";

        $y = 'Teste';
      };

      $minhaClosure(10);

      echo "<p>$y</p>";

      ?>

    </section>
    <section>

      <h2>Arrow Function</h2>

      <ul>
        <li>Funções anônimas escritas de forma mais suscinta;</li>
        <li>Suportam as mesmas características de uma closure;</li>
        <li>Porém, capturam automaticamente as variáveis Globais.</li>
      </ul>

      <?php

      $a = 50;

      $b = 60;

      $myArrow = fn($c) => "<p>$a | $b | $c</p>";

      echo $myArrow(70);

      ?>

      <ul>
        <li>Usamos a instrução fn antes dos parênteses em sua declaração;</li>
        <li>Recebe uma seta(=>) ao invés do return.</li>
      </ul>

    </section>

  </main>
</body>

</html>