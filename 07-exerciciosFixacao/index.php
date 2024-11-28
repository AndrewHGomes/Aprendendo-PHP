<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercícios de Fixação [pt-01]</title>
</head>

<body>
  <header>
    <h1>Exercícios de Fixação [pt-01]</h1>
  </header>
  <main>
    <section>

      <h2>Exercício 1</h2>

      <ul>
        <li>1ª variável com o valor 1000;</li>
        <li>2ª variável deve ter metade do valor da 1ª;</li>
        <li>Apresente o valor da 2ª.</li>
      </ul>

      <?php

      $primeira = 1000;

      $segunda = $primeira / 2;

      echo "<p>O valor da 2º variável é: $segunda</p>"

      ?>

    </section>
    <section>
      <h2>Exercício 2</h2>

      <ul>
        <li>1ª variável com o valor 100;</li>
        <li>2ª variável deve ter 3x o valor da 1ª;</li>
        <li>Apresente o valor da 2ª.</li>
      </ul>

      <?php

      $primeira = 100;

      $segunda = $primeira * 3;

      echo "<p>O valor da 2º variável é: $segunda</p>"

      ?>

    </section>
    <section>
      <h2>Exercício 3</h2>

      <ul>
        <li>1ª variável é iniciada e apresentada com o valor 20;</li>
        <li>Na próxima linha, a variável deve ser apresentada com 1 somado ao seu valor.</li>
      </ul>

      <?php

      echo "<p>A variável tem o valor: " . $primeira = 20;

      echo "<p>Agora tem o valor: " . ++$primeira;

      ?>

    </section>
    <section>
      <h2>Exercício 4</h2>

      <ul>
        <li>1ª variável com o valor 100;</li>
        <li>2ª variável com o valor 250;</li>
        <li>3ª variável tem o valor da 1ª mais a 2ª;</li>
        <li>Acrescente mais 1 unidade à 3ª;</li>
        <li>Apresente a 3ª.</li>
      </ul>

      <?php

      $primeira = 100;

      $segunda = 250;

      $terceira = $primeira + $segunda;

      $terceira++;

      echo "<p>A variável tem o valor: " . $terceira;

      ?>

    </section>
  </main>
</body>

</html>