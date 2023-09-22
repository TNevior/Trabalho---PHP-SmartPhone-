<?php

// Chamando os arquivos necessários para as operações
require "conexao.php";
require "Smartphone.php";
require "RepositorioSmartphone.php";

// Instanciar o objeto Smartphone
$smartphone1 = new Smartphone("Apple", "iPhone 13", "iOS", 6.1, "12MP");

// Instancio o repositório para cadastrar
$repositorioSmartphone = new RepositorioSmartphone();

$repositorioSmartphone->cadastrar($smartphone1, $banco);

?>

