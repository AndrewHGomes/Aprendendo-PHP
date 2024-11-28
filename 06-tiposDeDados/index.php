<?php

$intNum = 22;

$floatNum = 10.5;

$negNum = -50;

$string = 'Texto/Lista de caracteres';

$falso = false;

$verdadeiro = true;

$nulo = null;

$array = [1, 2, 3];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de Dados</title>
</head>

<body>
  <header>
    <h1>Tipos de Dados</h1>
  </header>
  <main>
    <ul>
      <li>As variáveis podem ter diferentes tipos de valores;</li>
      <li>Por não serem tipadas, o próprio sistema vai tratar a variável de acordo com seu tipo implícito;</li>
      <li>A mesma variável também pode ser modificada em seu tipo de valor em momentos do código;</li>
      <li>Os tipos de valores que as variáveis podem ter são:</li>
      <ul>
        <li>String - Lista ou conjunto de caracteres;</li>
        <li>Int - Números inteiros, positivos ou negativos;</li>
        <li>Float - Números reais com ponto flutuante;</li>
        <li>Booleanos - True(verdadeiro) ou False(falso);</li>
        <li>Null - Valor nulo ou vazio;</li>
        <li>Array - Conjunto ou lista de valores;</li>
        <li>Objeto - Conjunto de propriedades e valores com seus métodos.</li>
      </ul>
    </ul>
    <?= "<p>Número inteiro: $intNum</p>" ?>
    <?= "<p>Número real: $floatNum</p>" ?>
    <?= "<p>Número negativo: $negNum</p>" ?>
    <?= "<p>String: $string</p>" ?>
    <?= "<p>True: $verdadeiro</p>" ?>
    <?= "<p>False: $falso</p>" ?>
    <?= "<p>Null: $nulo</p>" ?>
    <?php print_r($array) ?>
  </main>
</body>

</html>