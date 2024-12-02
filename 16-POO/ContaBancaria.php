<?php

class ContaBancaria
{
  // VISIBILIDADE | ATRIBUTOS
  public $numeroConta;
  protected $tipoConta;
  private $titularConta;
  private $saldoConta;
  private $statusConta;

  // CONSTRUTOR
  public function __construct($numeroConta, $tipoConta, $titularConta)
  {
    $this->numeroConta = $numeroConta;
    $this->tipoConta = $tipoConta;
    $this->titularConta = $titularConta;
    $this->setSaldoConta(0);
    $this->setStatusConta(false);
  }

  // GETTERS | SETTERS
  public function setNumeroConta($numeroConta)
  {
    $this->numeroConta = $numeroConta;
  }

  public function getNumeroConta()
  {
    return $this->numeroConta;
  }

  public function setTipoConta($tipoConta)
  {
    $this->tipoConta = $tipoConta;
  }

  public function getTipoConta()
  {
    return $this->tipoConta;
  }

  public function setTitularConta($titularConta)
  {
    $this->titularConta = $titularConta;
  }

  public function getTitularConta()
  {
    return $this->titularConta;
  }

  public function setSaldoConta($saldoConta)
  {
    $this->saldoConta = $saldoConta;
  }

  public function getSaldoConta()
  {
    return $this->saldoConta;
  }

  public function setStatusConta($statusConta)
  {
    $this->statusConta = $statusConta;
  }

  public function getStatusConta()
  {
    return $this->statusConta;
  }

  // MÉTODOS PERSONALIZADOS
  public function abrirConta($tipoConta)
  {
    $this->setTipoConta($tipoConta);

    $this->setStatusConta(true);

    if ($tipoConta === 'CC') {
      $this->setSaldoConta(50);
      echo "<p>Conta Corrente criada com sucesso. Ganhou um insentivo de R$ {$this->getSaldoConta()},00.</p>";
    } else if ($tipoConta === 'CP') {
      $this->setSaldoConta(150);
      echo "<p>Conta Poupança criada com sucesso. Ganhou um insentivo de R$ {$this->getSaldoConta()},00.</p>";
    }
  }

  public function fecharConta()
  {
    if ($this->getSaldoConta() > 0) {
      echo "<p>Você tem um saldo de R$ {$this->getSaldoConta()},00. Retire para encerrar a conta.</p>";
    } else if ($this->getSaldoConta() < 0) {
      echo "<p>Você tem um débito de R$ {$this->getSaldoConta()},00. Pague para encerrar a conta.</p>";
    } else {
      $this->setStatusConta(false);
      echo "<p>Conta encerrada com sucesso!";
    }
  }

  public function depositar($valor)
  {
    if ($this->getStatusConta()) {
      $this->setSaldoConta($this->getSaldoConta() + $valor);
      echo "<p>Um depósito de R$ $valor,00 foi feito por {$this->getTitularConta()}.</p>";
    } else {
      echo "<p>Você ainda não possui uma conta. Abra agora sua conta.</p>";
    }
  }

  public function sacar($valor)
  {
    if ($this->getStatusConta()) {
      if ($this->getSaldoConta() >= $valor) {
        $this->setSaldoConta($this->getSaldoConta() - $valor);
        echo "<p>Um saque de R$ $valor,00 foi feito por {$this->getTitularConta()}.</p>";
      } else {
        echo "<p>Seu saldo é de R$ {$this->getSaldoConta()},00. Valor é insuficiente!</p>";;
      }
    } else {
      echo "<p>Você ainda não possui uma conta. Abra agora sua conta.</p>";
    }
  }

  public function pagarMensalidade()
  {
    $valorMensalidade = 0;

    if ($this->getTipoConta() === 'CC') {
      $valorMensalidade = 12;
      echo "<p>Sua Conte é {$this->getTipoConta()}, a mensalidade é de R$ $valorMensalidade,00.</p>";
    } else if ($this->getTipoConta() === 'CP') {
      $valorMensalidade = 20;
      echo "<p>Sua Conte é {$this->getTipoConta()}, a mensalidade é de R$ $valorMensalidade,00.</p>";
    }

    if ($this->getStatusConta()) {
      if ($this->getSaldoConta() >= $valorMensalidade) {
        $this->setSaldoConta($this->getSaldoConta() - $valorMensalidade);
        echo "<p>Foi debitado R$ $valorMensalidade,00 da mensalidade na conta de {$this->getTitularConta()}.</p>";
      } else {
        echo "<p>Seu saldo é de R$ {$this->getSaldoConta()},00. Valor é insuficiente!</p>";
      }
    } else {
      echo "<p>Você ainda não possui uma conta. Abra agora sua conta.</p>";
    }
  }
}
