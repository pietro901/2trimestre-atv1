<?php

namespace Classes;

class Vendedor {
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function calcularComissao($valorVenda) {
        // Exemplo: Comissão de 5%
        return $valorVenda * 0.05;
    }
}
