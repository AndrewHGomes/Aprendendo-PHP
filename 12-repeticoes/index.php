<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Repetições</title>
</head>

<body>
  <header>
    <h1>Repetições</h1>
  </header>
  <main>
    <p>Os loops são usados para executar o mesmo bloco de código repetidamente, desde que uma determinada condição seja atendida.</p>

    <h2>while</h2>

    <ul>
      <li>Percorre um bloco de código ENQUANTO a condição especificada for satisfeita;</li>
      <li>O loop while não é executado um número específico de vezes, mas verifica após cada iteração se a condição ainda é verdadeira;
      </li>
      <li>A condição não precisa ser um contador, pode ser o status de uma operação ou qualquer condição que seja avaliada como verdadeira ou falsa.
      </li>
    </ul>

    <p>
      <strong>
        Observação: lembre-se de incrementar a variável, caso contrário o loop continuará para sempre.
      </strong>
    </p>

    <?php

    $numero = 0;

    while ($numero <= 2) {
      echo "<p>Número: $numero</p>";
      $numero++;
    }

    ?>

    <h2>do | while</h2>

    <ul>
      <li>Loop do...while sempre executará o bloco de código pelo menos uma vez;</li>
      <li>Então verificará a condição e repetirá o loop enquanto a condição especificada for verdadeira.</li>
    </ul>

    <p>
      <strong>
        Nota: Em um do...while, a condição é testada DEPOIS de executar as instruções dentro do loop. <br>
        Isso significa que o do...while executará suas instruções pelo menos uma vez, mesmo se a condição for falsa.
        O código será executado uma vez, mesmo que a condição nunca seja verdadeira.
      </strong>
    </p>

    <?php

    do {
      echo "<p>Número: $numero</p>";
      $numero--;
    } while ($numero >= 0)

    ?>

    <h2>for</h2>

    <ul>
      <li>O loop for é usado quando você sabe quantas vezes o script deve ser executado;</li>
      <li>Funciona assim:</li>
      <ol>
        <li>A iniciação é avaliada uma vez e define um contador;</li>
        <li>A condição é avaliada antes de cada iteração e o bloco de código é executado somente se essa expressão for avaliada como verdadeira;</li>
        <li>A atualização é avaliada após cada iteração e a expressão muda o valor a cada iteração.</li>
      </ol>
    </ul>

    <?php

    for ($var = 3; $var <= 6; $var++) {
      echo "<p>Número: $var</p>";
    }

    ?>

    <h2>break</h2>
    <h2>continue</h2>
    <h2>goto</h2>
  </main>
</body>

</html>