<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escopo no PHP</title>
</head>

<body>
  <header>
    <h1>Escopo no PHP</h1>
  </header>
  <main>
    <section>

      <h2>Introdução</h2>
      <ul>
        <li>É o contexto onde uma variável é definida;</li>
        <li>Variáveis podem ser declaradas em qualquer lugar do script;</li>
        <li>O PHP tem escopo Global, Local(Função) e Estático;</li>
        <li>Quando um arquivo é incluído, seu código herda o escopo da variável.</li>
      </ul>

      <p>
        <strong>
          Uma variável declarada fora de uma função tem um ESCOPO GLOBAL e só pode ser acessada fora de uma função:
        </strong>
      </p>

      <?php

      $escopoGlobal = '<p>Variável com escopo Global</p>';

      echo $escopoGlobal;

      ?>

    </section>
    <section>

      <h2>Funções</h2>

      <p>
        <strong>
          Uma variável declarada dentro de uma função tem um ESCOPO LOCAL e só pode ser acessada dentro dessa função:
        </strong>
      </p>

      <?php

      function minhaFuncao()
      {
        $escopoLocal = '<p>Variável com escopo Local</p>';

        echo $escopoLocal;
      }

      minhaFuncao();

      ?>

      <p>
        <ins>
          Podemos ter variáveis locais com o mesmo nome em funções diferentes, porque variáveis locais são reconhecidas apenas pela função na qual são declaradas.
        </ins>
      </p>

    </section>
    <section>

      <h2>GLOBALS | global</h2>

      <ul>
        <li>Esta instrução é usada para acessar uma variável Global dentro de uma função;</li>
        <li>Usamos a palavra-chave 'global' antes das variáveis dentro das funções.</li>
      </ul>

      <?php

      $variavel = '<p>No escopo Global</p>';

      echo $variavel;

      function mudandoEscopo()
      {
        global $variavel;
        $variavel = '<p>Acessando a variável</p>';
      }

      mudandoEscopo();

      echo $variavel;

      ?>

      <p>
        <strong>
          <em>
            Variáveis declaradas em estruturas condicionais e de repetições, podem ser acessadas fora de suas estruturas.
          </em>
        </strong>
      </p>

      <?php

      if (true) {
        $test = 10;
      }

      echo "<p>A variável dentro do bloco IF é: $test</p>";

      for ($i = 0; $i <= 2; $i++) {
        $test = 20;
      }

      echo "<p>A variável dentro do for é $test | A inicialização do bloco for terminou em $i</p>";

      ?>

      <ul>
        <li>O PHP também armazena todas as variáveis globais em um array especial($GLOBALS);</li>
        <li>Ele contém o nome da variável;</li>
        <li>Este array também é acessível de dentro de funções;</li>
        <li>E pode ser usado para atualizar variáveis globais diretamente.</li>
      </ul>

      <?php

      $outraVariavel = '<p>Escopo Global</p>';

      echo $outraVariavel;

      function escopoMudado()
      {
        $GLOBALS['outraVariavel'] = '<p>Acessei na função</p>';
      }

      escopoMudado();

      echo $outraVariavel;

      ?>

    </section>
    <section>

      <h2>Static</h2>

      <ul>
        <li>Normalmente, quando uma função é concluída/executada, todas as suas variáveis são deletadas;</li>
        <li>No entanto, às vezes queremos que uma variável local NÃO seja deletada;</li>
        <li>Para isso, usamos a palavra-chave static ao declararmos a variável pela 1ª vez.</li>
      </ul>

      <?php

      function usandoStatic()
      {
        static $numero = 36;

        echo "<p>O número é $numero</p>";

        $numero++;
      }

      usandoStatic();

      usandoStatic();

      ?>

      <p>
        <ins>
          Então, cada vez que a função for chamada, essa variável ainda terá as informações que continha da última vez que a função foi chamada.
        </ins>
      </p>

      <p>
        <strong>
          Nota: A variável ainda é local para a função.
        </strong>
      </p>

      <?php

      function recursiva()
      {
        static $contador = 0;

        $contador++;

        echo "<span>$contador, </span>";

        if ($contador <= 3) {
          recursiva();
        }

        $contador--;
      }

      recursiva();

      ?>

    </section>
  </main>
</body>

</html>