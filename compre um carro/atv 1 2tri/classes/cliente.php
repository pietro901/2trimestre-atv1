<?php

namespace Classes;

class Cliente {
    private $nome;
    private $cpf;

    public function __construct($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function exibirInformacoes() {
        return "Nome: " . $this->nome . ", CPF: " . $this->cpf;
    }
}
