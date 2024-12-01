<?php

require 'ContaBancaria.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testar Conta Bancária</title>
</head>

<body>
  <header>

    <h1>Testar Conta Bancária</h1>

  </header>
  <main>
    <section>

      <h2>Parâmetros da Conta Bancária</h2>

      <ul>
        <li>Status da Conta: [0: fechada | 1: aberta]</li>
        <li>Titular: Nome do Titular</li>
        <li>Número da Conta: XXXX</li>
        <li>Tipo da Conta: [CC: Conta Corrente | CP: Conta Poupança]</li>
        <li>Saldo da Conta: [CC: Insentivo de R$ 50,00 | CP: Insentivo R$ 150,00]</li>
      </ul>

    </section>
    <hr>
    <section>

      <?php

      $andrew = new ContaBancaria(1111, 'CP', 'Andrew Gomes');

      $andrew->abrirConta('CP');

      $andrew->depositar(300);

      $andrew->pagarMensalidade();

      $andrew->sacar(70);

      $andrew->depositar(1000);

      ?>

      <h2>Conta Bancária Andrew</h2>

      <ol>
        <li><strong>Status da Conta: <?= $andrew->getStatusConta() ?></strong></li>
        <li><strong>Titular: <?= $andrew->getTitularConta() ?></strong></li>
        <li><strong>Número da Conta: <?= $andrew->getNumeroConta() ?></strong></li>
        <li><strong>Tipo da Conta: <?= $andrew->getTipoConta() ?></strong></li>
        <li><strong>Salso da Conta: R$ <?= $andrew->getSaldoConta() ?>,00</strong></li>
      </ol>

    </section>
    <hr>
    <section>

      <?php

      $viviane = new ContaBancaria(2222, 'CC', 'Viviane Rodrigues');

      $viviane->abrirConta('CC');

      $viviane->depositar(500);

      $viviane->sacar(100);

      $viviane->pagarMensalidade();

      $viviane->depositar(1500);

      ?>

      <h2>Conta Bancária Viviane</h2>

      <ol>
        <li><strong>Status da Conta: <?= $viviane->getStatusConta() ?></strong></li>
        <li><strong>Titular: <?= $viviane->getTitularConta() ?></strong></li>
        <li><strong>Número da Conta: <?= $viviane->getNumeroConta() ?></strong></li>
        <li><strong>Tipo da Conta: <?= $viviane->getTipoConta() ?></strong></li>
        <li><strong>Salso da Conta: R$ <?= $viviane->getSaldoConta() ?>,00</strong></li>
      </ol>

    </section>
  </main>
</body>

</html>