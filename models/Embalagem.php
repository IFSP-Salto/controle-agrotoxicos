<?php
  class Embalagem {

    private $tipoEmbalagem;
    private $undMedidaEmbalagem;
    private $qtdMedidaEmbalagem;

    function __construct($tipoEmbalagem, $undMedidaEmbalagem, $qtdMedidaEmbalagem) {
      $this->tipoEmbalagem = $tipoEmbalagem;
      $this->undMedidaEmbalagem = $undMedidaEmbalagem;
      $this->qtdMedidaEmbalagem = $qtdMedidaEmbalagem;
    }

  }
?>
