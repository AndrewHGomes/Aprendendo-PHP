<?php

$nome = "Andrew";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionais</title>
</head>

<body>
  <header>
    <h1>Condicionais</h1>
  </header>
  <main>

    <ul>
      <li>Instruções condicionais são usadas para executar diferentes ações com base em diferentes condições;</li>
      <li> Muitas vezes, quando você escreve código, você quer executar ações diferentes para condições diferentes;</li>
      <li>As instruções geralmente contêm condições que comparam dois valores, logo, precisamos usar um operador de comparação;</li>
    </ul>

    <h2>if</h2>

    <p>Executa algum código se uma condição for atendida:</p>

    <?php

    if ($nome === "Andrew") {
      echo '<p>Executou bloco IF!</p>';
    }

    ?>

    <h2>if | else</h2>

    <p>Executa algum código se uma condição for atendida e outro código se essa condição não for atendida:</p>

    <?php

    if ($nome !== "Andrew") {
      echo '<p>Executou bloco IF!</p>';
    } else {
      echo '<p>Executou bloco ELSE!</p>';
    }

    ?>

    <h2>if | else if | else</h2>

    <p>Executa códigos diferentes para mais de duas condições:</p>

    <?php

    if ($nome !== "Andrew") {
      echo '<p>Executou bloco IF!</p>';
    } else if ($nome === "Andrew") {
      echo '<p>Executou bloco ELSEIF!</p>';
    } else {
      echo '<p>Executou bloco ELSE!</p>';
    }

    ?>

    <h2>Operador Ternário</h2>
    <ul>
      <li>As instruções if/else também podem ser escritas em uma linha, mas a sintaxe é um pouco diferente;</li>
      <li>Essa técnica é conhecida como Operador Ternário ou Expressão Condicional.</li>
    </ul>


    <?php

    $verificar = $nome === "Andrew" ? "Correto" : "Incorreto";

    echo "<p>O nome está $verificar</p>";

    ?>

    <h2>switch | case</h2>

    <ul>
      <li>Essa instrução é usada para executar diferentes ações com base em diferentes condições;</li>
      <li>Muito utilizado para selecionar um dos muitos blocos de código a serem executados;</li>
    </ul>

    <?php

    switch ($nome) {
      case 'Andrew':
        echo "O nome é Andrew";
        break;
      case 'Viviane':
        echo "O nome é Viviane";
        break;
      case 'Janico':
        echo "O nome é Janico";
        break;
      default:
        echo "Nenhuma das possibilidades";
    }

    ?>

    <p>Funciona assim:</p>

    <ul>
      <li>A expressão é avaliada uma vez;</li>
      <li>O valor da expressão é comparado com os valores de cada caso;</li>
      <li>Se houver uma correspondência, o bloco de código associado será executado;</li>
      <li>A instrução break quebra o fluxo do bloco switch;</li>
      <li>Isso interromperá a execução de mais código e nenhum outro caso será testado;</li>
      <li>O instrução default é executado se não houver correspondência;</li>
      <li>O bloco default não precisa de um break, o bloco termina ali de qualquer maneira.</li>
    </ul>

    <p>
      <strong>Aviso: Se você omitir a instrução break em um caso que não seja o último, <br>
        e esse caso obtiver uma correspondência, o próximo caso também será executado, <br>
        mesmo que a avaliação não corresponda ao caso!
      </strong>
    </p>

  </main>

</body>

</html>