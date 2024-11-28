<?php

$nome = 'Andrew';
$sobrenome = 'Gomes';

$nomeCompleto = "$nome $sobrenome";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercícios de Fixação [pt-02]</title>
</head>

<body>
  <header>
    <h1>Exercícios de Fixação [pt-02]</h1>
  </header>
  <main>

    <p>Faça algumas experiências com strings:</p>

    <ul>
      <li>Concatenação;</li>
      <li>Use alguns métodos aprendidos.</li>
    </ul>

    <h2>O meu nome é:</h2>

    <h3><?= "$nome $sobrenome" ?></h3>

    <p>Meu nome é <?= $nomeCompleto ?></p>

    <p>Meu nome tem <?= mb_strlen($nomeCompleto) ?> caracteres, incluindo espaços</p>

    <p>Meu nome é <?= mb_strtoupper($nome) ?> e meu sobrenome é <?= mb_strtoupper($sobrenome) ?></p>

    <p>Meu nome é <?= mb_strtolower($nome) ?> e meu sobrenome é <?= mb_strtolower($sobrenome) ?></p>

  </main>
</body>

</html>