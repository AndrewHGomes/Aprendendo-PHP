<?php
echo 'Aqui tem PHP antes de iniciar o HTML.';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <p>Aqui tem um parágrafo HTML.</p>

  <?php

  echo '<p>Aqui tem uma tag PHP no body do HTML.</p>';

  ?>

  <p><strong>Mais um parágrafo HTML</strong></p>

  <?= '<span>Um span feito em PHP</span>' ?>

</body>

</html>