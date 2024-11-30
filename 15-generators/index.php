<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generators</title>
</head>

<body>
  <header>

    <h1>Generators</h1>

  </header>
  <main>

    <ul>
      <li>Um gerador é uma função que permite gerar séries de valores;</li>
      <li>Cada valor é devolvido pela função através da instrução yield;</li>
      <li>Ao contrário do return, yield guarda o estado da função;</li>
      <li>Isso permite que a função continue a partir do estado onde ficou na última chamada;</li>
      <li>O gerador funciona como um iterador, podendo ser usado num loop;</li>
      <li>Ele vai gerando valores até que não tenha mais valores para devolver com o yield.</li>
    </ul>

    <?php

    function buscarNumero()
    {
      for ($i = 0; $i <= 5; $i++) {
        yield $i;
      }
    }

    foreach (buscarNumero() as $numero) {
      echo "<span>$numero </span>";
    }

    ?>

    <ul>
      <li>Eles foram introduzidos na versão 5.5 do PHP;</li>
      <li>Foram melhorados na versão 7 com a instrução yiel from;</li>
      <li>Isso nos permite outros tipos de retorno:</li>
      <ul>
        <li>devolver valores de outro gerador;</li>
        <li>devolver valores de um array.</li>
      </ul>
    </ul>

    <?php

    function pegarNomes()
    {
      yield 'Andrew';
      yield 'Viviane';
      yield from ['Irvin', 'Rafael', 'Janico', 'Renan'];
      yield 'Cleusa';
    }

    foreach (pegarNomes() as $nome) {
      echo "<p>$nome </p>";
    }

    ?>


    <p>
      <ins>
        Como os geradores não necessitam de tratar todos os dados de uma vez, quando usados, <br>
        podem aumentar muito a performance do nosso script.
      </ins>
    </p>

    <p>
      <strong>
        Nota: O PHP vem acompanhado de muitas funções que estão sempre disponíveis para realizarmos <br>
        operações com arrays, strings, comunicar com base de dados, encriptação, trabalhar com arquivos e pastas, etc.
      </strong>
    </p>

  </main>
</body>

</html>