<?php

require_once 'classes/Cliente.php';
require_once 'classes/Vendedor.php';
require_once 'classes/Carro.php';

use Classes\Cliente;
use Classes\Vendedor;
use Classes\Carro;

// Instanciando as classes
$cliente = new Cliente("João Silva", "123.456.789-00");
$vendedor = new Vendedor("Maria Souza", "V123");
$carro = new Carro("Toyota", "Corolla", 2023);

// Utilizando os métodos
echo "Informações do Cliente: " . $cliente->exibirInformacoes() . "<br>";
echo "Nome do Vendedor: " . $vendedor->getNome() . "<br>";
echo "Comissão do Vendedor: R$" . number_format($vendedor->calcularComissao(50000), 2, ',', '.') . "<br>";
echo "Detalhes do Carro: " . $carro->exibirDetalhes() . "<br>";
