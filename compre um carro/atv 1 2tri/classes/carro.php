<?php

namespace Classes;

class Carro {
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function exibirDetalhes() {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Ano: " . $this->ano;
    }
}
