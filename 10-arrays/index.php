<?php

$numeros = [1, 2, 3, 4, 5];

$nomes = ['Andrew', 'Viviane', 'Janico', 'Cleusa'];

$nomes[] = 'Rafael';

$numeros[1] = 20;

$dados = [
  'a' => 1000,
  'b' => 2000,
  'c' => 3000,
];

$cliente = [
  'Nome' => 'Andrew',
  'Idade' => 36,
  'Email' => 'andrew@email.com',
  'Profissão' => 'Dev Web'
];

$misto = [
  0 => 22,
  'nome' => 'Viviane',
  2 => 5,
  'idade' => 39,
];

$multiNumerico = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
];

$multAssociativo = [
  'Brasil' => ['São Paulo', 'Rio de Janeiro', 'Brasília'],
  'Portugal' => ['Lisboa', 'Porto', 'Coímbra'],
  'Espanha' => ['Madrid', 'Barcelona', 'Sevilha'],
]

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays no PHP</title>
</head>

<body>
  <h1>Arrays no PHP</h1>

  <ul>
    <li>Um array é uma lista, uma coleção de valores/dados;</li>
    <li>Funciona com uma variável que pode conter muitos dados, cada qual com seu espaço;</li>
    <li>Este espaço é chamado de índice do array;</li>
    <li>Como toda lista em programação, os índices são contados à partir do zero;</li>
    <li>Num array, podem existir vários valores de tipos diferentes, porém, normalmente são do mesmo tipo;</li>
  </ul>

  <p>Estes são arrays de índices numéricos:</p>

  <?= print_r($numeros) ?>;

  <p>Apresentando um índice do 1º array: <?= $numeros[2] ?></p>

  <?= print_r($nomes) ?>;

  <p>Apresentando um índice do 2º array: <?= $nomes[1] ?></p>

  <p>Podemos adicionar novos valore ao final do array de forma simples:</p>

  <?= print_r($nomes) ?>;

  <p>Podemos também alterar um valor de um array de forma simples:</p>

  <?= print_r($numeros) ?>;

  <h2>Arrays associativos</h2>

  <ul>
    <li>Os índices de um array podem ser numéricos(array numérico) ou strings(array associativo);</li>
    <li>Podem coexistir os 2 tipos de índices, porém não é muito comum.</li>
  </ul>

  <p>Esse array recebeu índices de strings contendo seus respectivos valores:</p>

  <?= print_r($dados) ?>;

  <p>Temos aqui um array com 'nomes' em seus índices:</p>

  <?= print_r($cliente) ?>

  <p>Podemos apresentar valores de índices específicos deste array também:</p>

  <p>Olá! Sou <?= $cliente['Nome'] ?> e sou <?= $cliente['Profissão'] ?></p>

  <h2>Arrays Mistos e Multidimencionais</h2>

  <ul>
    <li>É possível criar um array que combina índices numéricos e strings;</li>
    <li>Esta estrutura é mais complexa de gerir devido à mistura de índices e tipos de dados;</li>
    <li>Embora não seja muito frequente, isso é feito da seguinte forma:</li>
  </ul>

  <p>Array misto é assim:</p>

  <?= print_r($misto) ?>

  <p>
    Apresentando alguns valores desse array: <?= $misto[2] ?> e <?= $misto['nome'] ?>
  </p>

  <p>Arrays multidimencionais aparecem desta forma:</p>

  <?= print_r($multiNumerico) ?>

  <p>Apresentando alguns desse array: <?= $multiNumerico[0][0] ?>, <?= $multiNumerico[1][1] ?> e <?= $multiNumerico[2][2] ?></p>

  <?= print_r($multAssociativo) ?>

  <p>
    Apresentando alguns desse array: <?= $multAssociativo['Brasil'][0] ?>, <?= $multAssociativo['Portugal'][1] ?> e <?= $multAssociativo['Espanha'][2] ?>
  </p>

  <h2>Métodos e Funções de Arrays</h2>

</body>

</html>