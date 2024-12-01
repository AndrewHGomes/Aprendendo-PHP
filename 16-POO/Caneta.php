<?php

class Caneta
{
  public $cor;
  private $carga;
  protected $tampada;

  public function __construct($cor, $carga, $tampada)
  {
    $this->cor = $cor;
    $this->carga = $carga;
    $this->tampada = $tampada;
  }

  public function getCor()
  {
    return $this->cor;
  }

  public function setCor($cor)
  {
    $this->cor = $cor;
  }

  public function getCarga()
  {
    return $this->carga;
  }

  public function setCarga($carga)
  {
    $this->carga = $carga;
  }

  public function getTampada()
  {
    return $this->tampada;
  }

  public function setTampada($tampada)
  {
    $this->tampada = $tampada;
  }

  public function rabiscar()
  {
    if ($this->tampada === true) {
      echo "<p>Não posso rabiscar. Caneta tampada</p>";
    } else {
      echo "<p>Estou rabiscando...</p>";
    }
  }

  public function tampar()
  {
    $this->tampada = true;
  }

  public function destampar()
  {
    $this->tampada = false;
  }
}
