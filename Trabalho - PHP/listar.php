<?php

// Chamando os arquivos necessários para as operações
require "conexao.php";
require "RepositorioSmartphone.php";

$repositorio = new RepositorioSmartphone();

// Lista dos valores em um array, a partir do repositório smartphone
$valores = $repositorio->listar($banco);

foreach($valores as $valor){
    echo "Marca: " . $valor['marca'] . "<br>";
    echo "Modelo: " . $valor['modelo'] . "<br>";
    echo "Sistema Operacional: " . $valor['sistemaOperacional'] . "<br>";
    echo "Tamanho da Tela: " . $valor['tamanhoTela'] . "<br>";
    echo "Câmera Principal: " . $valor['cameraPrincipal'] . "<br><br>";
}

?>
