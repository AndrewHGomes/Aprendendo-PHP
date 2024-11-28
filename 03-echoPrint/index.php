<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <h1>Echo e Print</h1>
  </header>
  <main>
    <p>Quando queremos apresentar ou renderizar algo usando o PHP, utilizamos os comandos <strong>echo</strong> ou <br><strong>print</strong>. A forma mais comum é utilizar a função echo. Embora esses 2 comandos sejam muito <br>
      parecidos em suas funções, eles tem algumas ligeiras diferenças.
    </p>
    <p>Tanto echo quanto print podem ser escritos de 3 formas:</p>
    <ul>
      <?php echo "<li>echo com aspas duplas</li>" ?>
      <?php echo '<li>echo com aspas simples</li>' ?>
      <?php echo ('<li>echo entre parênteses</li>') ?>
      <?php print "<li>print com aspas duplas</li>" ?>
      <?php print '<li>print com aspas simples</li>' ?>
      <?php print('<li>print entre parênteses</li>') ?>
    </ul>
    <p>Há uma maneira de renderização que permite ignorar as palavras echo ou print:</p>
    <?= "<p>Neste parágrafo, a palavra reservada echo foi ignorada.</p>" ?>
  </main>
</body>

</html>