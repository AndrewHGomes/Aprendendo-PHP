<?php

$variavel;

$variavel = 'Olá, PHP!';

$outraVariavel = 'teste.';

$outraVariavel = 22;

$camelCase = 'camelCase';

$snake_case = 'snake_case';

$StudlyCase = 'StudlyCase';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis em PHP</title>
</head>

<body>
  <header>
    <h1>Variáveis em PHP</h1>
  </header>
  <main>
    <ul>
      <li>Variáveis são espaços que criamos na memória ao fazermos sua declaração no código;</li>
      <li>No caso do PHP, elas devem ser definidas com cifrão($) seguidas de um nome identificador;</li>
      <li>Podemos iniciá-la com ou sem valor;</li>
      <li>Podemos mudar seu valor e também seu tipo;</li>
      <li>No PHP, as variáveis não são tipificadas;</li>
      <li>Aspéctos a serem observados:</li>
      <ol>
        <li>O PHP é case sensitive, ou seja, maiúsculas e minúsculas importam;</li>
        <li>Depois do cifrão($), deve vir uma letra ou underline(_);</li>
        <li>Não podem conter outros símbolos, a não ser o cifrão($) e underline(_);</li>
        <li>Os nomes das variáveis não podem conter espaços;</li>
        <li>Por convensão, devemos usar camelCase, snake_case ou StudlyCase;</li>
        <li>O estilo escolhido deve ser mantido no projeto todo.</li>
      </ol>
    </ul>
    <?= "<p>Renderizando o valor de uma variável: $variavel.</p>" ?>
    <?= "<p>Renderizando o valor de outra variével veriável: $outraVariavel.</p>" ?>
    <?= "<p>camelCase: $camelCase.</p>" ?>
    <?= "<p>snake_case: $snake_case.</p>" ?>
    <?= "<p>StudlyCase: $StudlyCase.</p>" ?>
  </main>
</body>

</html>