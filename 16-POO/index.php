<?php

require 'Caneta.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programação Orientada a Objetos</title>
</head>

<body>
  <header>
    <h1>Programação Orientada a Objetos</h1>
  </header>
  <main>
    <section>

      <h2>Introdução</h2>

      <h3>Lembrete: os 3 pilares da POO</h3>

      <ul>
        <li>Encapsulamento;</li>
        <ul>
          <li>Proteger o acesso aos membros internos de um objeto;</li>
          <li>Acessar os atributos de uma classe através de métodos da própria classe.</li>
        </ul>
        <li>Herança;</li>
        <ul>
          <li>Uma classe estender seus atributos e métodos para subclasses;</li>
          <li>A classe que estende é a 'mãe', as subclasses são 'filhas'.</li>
        </ul>
        <li>Polimorfismo;</li>
        <ul>
          <li>Remete a muitas formas;</li>
          <li>Permite que classes 'filhas' possam ter métodos iguais e com os mesmos parâmetros da classe 'mãe' mas com comportamentos diferentes.</li>
        </ul>
      </ul>

      <h3>C.O.M.E.R.N. - Conceito Base</h3>

      <ol>
        <li>Confiável - o isolamento entre partes gera software seguro. Ao alterar uma parte, nenhuma outra é afetada;</li>
        <li>Oportuno - ao dividir tudo em partes, várias delas podem ser desenvolvidas em paralelo;</li>
        <li>Manutenível - atualizar um software é mais fácil, uma pequena modificação vai beneficiar todas as partes que usarem o objeto;</li>
        <li>Extensível - o software não é estático, ele deve crescer para permanecer útil;</li>
        <li>Reutilizável - podemos usar objetos de um sistema que criamos em outro sistema futuro;</li>
        <li>Natural - mais fácil de entender, foco maior na funcionalidade do que nos detalhes de implementação.</li>
      </ol>

      <ul>
        <li>A partir da versão 5, a Programação Orientada a Objetos foi introduzida no PHP;</li>
        <li>A POO é mais rápida e fácil de executar;</li>
      </ul>

      <p>
        A programação procedural consiste em escrever procedimentos ou funções que executam operações nos dados, <br>
        enquanto a programação orientada a objetos consiste em criar objetos que contêm dados e funções.
      </p>

      <p>A programação orientada a objetos tem várias vantagens sobre a programação procedural:</p>

      <ul>
        <li>Mais rápida e fácil de executar;</li>
        <li>Fornece uma estrutura clara para os programas;</li>
        <li>Ajuda a mater o código coeso(D.R.Y), fácil de manter, modificar e depurar;</li>
        <li>Torna possível criar aplicações totalmente reutilizáveis, com menos código e menor tempo de desenvolvimento.</li>
      </ul>

      <p>
        D.R.Y: Don't Repeat Yourself é sobre reduzir a repetição de código. <br>
        Devemos extrair códigos comuns para a aplicação, colocá-los em um único lugar <br>
        e reutilizá-los em vez de repeti-los.
      </p>

      <p>
        <ins>IMPORTANTE:</ins> Os nomes das classes são <em>case insensitive</em>, ou seja, maiúsculas ou minúsculas não importam, o sistema as reconhece de qualquer maneira.
      </p>

    </section>
    <section>

      <h2>O que é um objeto?</h2>

      <p>
        Coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas características, <br>
        comportamentos e estado atual
      </p>

      <p>Na programação, um objeto é uma instância de uma classe.</p>

      <h3>Faça 3 preguntas para lembrar o que é um objeto:</h3>

      <ul>
        <li>Que coisas tem? Atributo</li>
        <li>Que coisas faz? Método</li>
        <li>Como está agora? Estado</li>
      </ul>

    </section>
    <section>

      <h2>Classes</h2>

      <p>Define os atributos e métodos comuns que serão compartilhados pelos objetos.</p>

      <ul>
        <li>Classes e objetos são os 2 pricipais aspectos da POO;</li>
        <li>Uma classe é um molde/modelo para criar objetos;</li>
        <li>Objeto é uma instância de uma classe;</li>
      </ul>

      <p>
        Quando os objetos individuais são criados, eles herdam todas as propriedades e comportamentos da classe, <br>
        mas cada objeto terá valores diferentes para as propriedades.
      </p>

      <ul>
        <li>A classe é criada usando a palavra-chave class;</li>
        <li>A seguir, damos um nome(usando PascalCase por convensão) para a class;</li>
        <li>Depois usamos o par de chaves para alocar as propriedades e métodos.</li>
      </ul>

      <ul>
        <li>
          Nas classes, variáveis são chamadas de propriedades e funções são chamadas de métodos:
        </li>
        <ul>
          <li>Propriedades: variáveis que guardam as características ou atributos do objeto;</li>
          <li>Métodos: funções que definem o que o objeto pode fazer, suas ações.</li>
        </ul>
      </ul>

      <p>
        A palavra-chave this se refere ao objeto atual e só está disponível dentro de métodos. <br>
        Se refere ao próprio objeto, é usado como uma pseudo variável.
      </p>

      <?php

      $caneta1 = new Caneta('Azul', 75, false);

      ?>

      <p>
        <strong>
          <em>
            Meu objeto caneta: Cor: <?= $caneta1->cor ?> | Carga: <?= $caneta1->getCarga() ?>% | Tampada: <?= $caneta1->getTampada() ?>
          </em>
        </strong>
      </p>

      <p>
        <strong>
          <em>
            <?= $caneta1->rabiscar() ?>
          </em>
        </strong>
      </p>

    </section>
    <section>

      <h2>Modificadores de Visibilidade</h2>

      <p>Indicam o nível de acesso aos componentes internos de uma classe. <br>
        Existem 3 símbolos que representam a visibilidade:
      </p>

      <ol>
        <li>(+) público - public;</li>
        <ul>
          <li>a classe atual e todas as outras classes podem ter acesso;</li>
        </ul>
        <li>(-) privado - private;</li>
        <ul>
          <li>somente a classe atual terá acesso;</li>
        </ul>
        <li>(#) protegido - protected</li>
        <ul>
          <li>Acesso somente a classe atual e suas subclasses.</li>
        </ul>
      </ol>

      <h3>Alguns conceitos de UML</h3>

      <p>
        <ins>
          Linguagem de Modelagem Unificada | Diagrama de Classes
        </ins>
      </p>

      <ul>
        <li>Toda classe é um retângulo dividido em 3 partes;</li>
        <li>O cabeçalho do retângulo recebe o nome da classe;</li>
        <li>A parte central recebe os atributos, as características da classe;</li>
        <li>A última parte recebe os métodos, as funções da classe.</li>
      </ul>

    </section>
    <section>

      <h2>Métodos Especiais</h2>

      <h3>Getter</h3>

      <ul>
        <li>É um método especial acessor;</li>
        <li>Serve para obter valores de atributos de uma classe;</li>
        <li>Por convesão, usamos a palavra get no início do nome(getValorX());</li>
        <li>Ele não altera o estado do objeto, simplesmente pega o valor do atributo.</li>
      </ul>

      <h3>Setter</h3>

      <ul>
        <li>É um método modificador;</li>
        <li>Serve para modificar valores de atributos de uma classe;</li>
        <li>Se necessário, esse método deve aplicar uma lógica ou validação para modificar;</li>
        <li>Por convesão, usamos a palavra set no início do nome(setValorX());</li>
      </ul>

      <h3>Construct</h3>

      <ul>
        <li>Serve para inicializar os atributos de um objeto;</li>
        <li>Geralmente recebe os parâmetros da classe para construir o objeto;</li>
        <li>Ele é executado automaticamente quando é instanciado um objeto à partir de uma classe;</li>
        <li>Este método é escrito com dois undercores(__construct())</li>
      </ul>

    </section>
    <section>

      <h2>Encapsulamento</h2>

      <h3>Dicas para lembrar o conceito:</h3>

      <ul>
        <li>Serve para protejer o que está interno do que está externo;</li>
        <li>Serve para protejer o que está externo do que está interno;</li>
        <li>Serve para padronizar onde e quando será utilizado;</li>
      </ul>

      <h3>Para a POO, encapsular é:</h3>

      <ul>
        <li>Ocultar partes independentes da implementação;</li>
        <li>Permitir construir partes invisíveis ao mundo exterior;</li>
        <li>As partes podem se conversar, sem saber como funcionam;</li>
        <li>As trocas de mensagens acontecem por meio de uma interface;</li>
        <li>Um bom objeto bem encapsulado possui uma interface bem definida;</li>
        <li>Encapsular NÃO É OBRIGATÓRIO, mas é uma BOA PRÁTICA para produzir classes mais eficientes.</li>
      </ul>

      <p>
        Obs: Interface é uma lista de serviços oferecidos por um componente. <br>
        É o contato com o mundo exterior, que define o que pode ser feito com um objeto de uma classe.
      </p>

      <h3>Vantagens de encapsular</h3>

      <ol>
        <li>Tornar mudanças invisíveis:</li>
        <ul>
          <li>Mudar um software bem encapulado, mantendo a interface, podemos mudar a 'cápsula'.</li>
        </ul>
        <li>Facilitar a reutilização de código:</li>
        <ul>
          <li>Uma classe bem encapsulada pode ser reutilizada em outros projetos.</li>
        </ul>
        <li>Reduzir efeitos colaterais:</li>
        <ul>
          <li>Uma classe mal encapsulada pode afetar o programa e outros programas.</li>
        </ul>
      </ol>

    </section>
    <section>

      <h2>Herança</h2>

      <ul>
        <li>Mecanismo que permite criar classes que herdam propriedades e métodos de outras classes;</li>
        <li>A classe inicial é designada por classe base, classe mãe ou superclass;</li>
        <li>A classe que herda propriedades e métodos da classe mãe é chamada de classe filha ou classe derivada;</li>
        <li>Para uma classe herdar de outra, usamos o palavra-chave extends.</li>
      </ul>

    </section>

  </main>
</body>

</html>