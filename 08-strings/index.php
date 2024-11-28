<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>

<body>
  <header>
    <h1>Strings</h1>
  </header>
  <main>
    <section>

      <h2>Introdução</h2>

      <ul>
        <li>String é uma 'lista' de caracteres que pode ser guardada numa variável;</li>
        <li>Podemos definir que uma string é um conjunto de letras, espaços, frases,
          símbolos e algarismos que normalmente deisignamos por texto;</li>
        <li>Em PHP, as strings podem ser delimitadas por:</li>
        <ul>
          <li>aspas simples;</li>
          <li>aspas duplas.</li>
        </ul>
      </ul>

      <?php
      $aspasSimples = 'Texto com aspas simples';

      echo "<p>$aspasSimples</p>";

      $aspasDuplas = 'Texto com aspas duplas';

      echo "<p>$aspasDuplas</p>";

      echo "<p>Não existe uma regra sobre qual usar, devemos ser consistentes ao longo do código.</p>";

      ?>

    </section>
    <section>

      <h2>Concatenação de Strings</h2>

      <ul>
        <li>É o processo que, através do código, permite juntar várias strings;</li>
        <li>Existem 2 operadores de concatenação:</li>
        <ul>
          <li>ponto (.);</li>
          <li>ponto/igual (.=).</li>
        </ul>
      </ul>

      <?php

      $meuNome = 'Andrew' . ' ' . 'Gomes';

      echo "<p>Concatenando: Meu nome é $meuNome</p>";

      $minhaEsposa = 'Viviane';

      $minhaEsposa .= ' ' . 'Rodrigues';

      echo "<p>Acrescentando mais texto a uma variável: Minha esposa é $minhaEsposa</p>";

      $casal = $meuNome . ' e ' . $minhaEsposa;

      echo "<p>O casal é $casal</p>";

      ?>
    </section>
    <section>

      <h2>Diferenças entre aspas simples ou duplas</h2>

      <ul>
        <li>A diferença entre aspas simples ou duplas é que:</li>
        <ul>
          <li>usando aspas duplas, as variáveis são interpretadas no conteúdo(PARSE);</li>
          <li>usando aspas simples, as variáveis não são interpretadas no conteúdo do documento.</li>
        </ul>
      </ul>

      <?php

      $nome = 'Andrew';
      $idade = 36;

      echo '<p>Meu nome é ' . $nome . ' e tenho ' . $idade . ' anos.</p>';

      $nome = 'Viviane';
      $idade = 39;

      echo "<p>Meu nome é $nome e tenho $idade anos.</p>";

      ?>

    </section>
    <section>

      <h2>HEREDOC e NOWDOC</h2>

      <p>Ainda existem outras 2 formas de lidar com strings:</p>

      <ul>
        <li>HEREDOC: Permite interpretar(parse) variáveis em um bloco de texto(LABEL);</li>
        <li>NOWDOC: Não permite que o parse seja feito, logo não interpreta as variáveis.</li>
      </ul>

      <?php

      $cliente = 'Irvin';
      $email = 'irvin@email.com';

      $texto = <<<LABEL
    <p>Olá, sr. $cliente.</p>
    <p>Enviaremos as atualizações em seu email($email).</p>
    <p>Att.</p>
    <p>$nome.</p>
    LABEL;

      echo $texto;

      ?>

    </section>
    <section>

      <h2>Caracteres de escape</h2>

      <p>O caractere de escape(\) serve para que símbolos especiais não entrem em conflito com o código.</p>

      <?php

      // $fraseErrada = 'Um copo d'água;

      $fraseCerta = "Um copo d'água";

      $fraseCorreta = 'Um copo d\'água';

      echo "<p>$fraseCerta</p>";

      echo "<p>$fraseCorreta</p>";

      ?>
    </section>
    <section>

      <h2>HTML Entities</h2>

      <p>Alguns caracteres especiais são usados para adicionar símbolos ao documento.</p>

      <?php

      echo '<p>Estes são pela tabela UTF-8:</p>';
      echo '<p><a href="https://www.utf8-chartable.de/" target="_blank">Tabela de Símbolos Unicode</a></p>';

      echo "<span>\u{A9}</span> ";
      echo "<span>\u{BC}</span> ";
      echo "<span>\u{AE}</span>";

      echo '<p>Estes são pelo HTML Entities:</p>';

      echo '<p><a href="https://dev.w3.org/html5/html-author/charref">Tabela HTML Entities</a></p>';

      echo "<span>&copy;</span> ";
      echo "<span>&frac14;</span> ";
      echo "<span>&reg;</span> ";
      echo "<span>&percnt;</span> ";

      ?>

    </section>
    <section>

      <h2>Terminal</h2>

      <p>Alguns caracteres tem o resultado de suas funções percebidas no terminal e não no browse.</p>

      <?php

      echo "Esta frase foi escrita\n para ser interpretada pelo terminal";

      ?>
    </section>
    <section>

      <h2>Funções/Métodos de Strings</h2>
      <p>As strings são muito importantes em qualquer linguagem de programação. Não é diferente em PHP.</p>
      <p>Elas contém funções diversas para serem manipuladas:</p>

      <?php

      $minhaFrase = "Meu nome é Andrew Henrique Gomes.";

      echo "<p>$minhaFrase</p>";

      $quintaPosicao = $minhaFrase[5];

      echo "<p>A letra que está na posição 5 é: $quintaPosicao</p>";

      $numeroDeCaracteres = strlen($minhaFrase);

      echo "<p>A quantidade de caracteres com os espaços é: $numeroDeCaracteres</p>";

      $pedacoDaFrase = mb_substr($minhaFrase, 11, 6);

      echo "<p>Um pedaço da frase: $pedacoDaFrase</p>";

      $todasMaiusculas = mb_strtoupper($minhaFrase);

      echo "<p>Frase com todas as letras maiúsculas: $todasMaiusculas</p>";

      $todasMinusculas = mb_strtolower($minhaFrase);

      echo "<p>Frase com todas as letras minúsculas: $todasMinusculas</p>";

      $substituiLetra = str_replace('e', 'i', $minhaFrase);

      echo "<p>Substituindo uma letra por outra: $substituiLetra</p>";

      $posicaoDaLetra = strpos($minhaFrase, 'A');

      echo "<p>Achar a posição da letra 'A': $posicaoDaLetra</p>";

      $verificaSeTem = str_contains($minhaFrase, 'Gomes');

      echo "<p>Verificar se contém uma parte específica: $verificaSeTem</p>";

      $iniciaCom = str_starts_with($minhaFrase, 'M');

      echo "<p>A frase inicia com algo específico: $iniciaCom</p>";

      $terminaCom = str_ends_with($minhaFrase, 'mes.');

      echo "<p>A frase termina com algo específico: $terminaCom</p>";

      ?>
    </section>
  </main>
</body>

</html>