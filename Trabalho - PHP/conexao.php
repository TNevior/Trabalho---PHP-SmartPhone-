<?php

// Comando que vai conectar o banco de dados
try {
    $banco = new PDO("sqlite:dado.sqlite");
} catch (PDOException $e) {
    echo "Erro no momento de acionar o banco!";
}

// Vai criar a tabela SMARTPHONE caso ela não exista
$criarTabela = "CREATE TABLE IF NOT EXISTS SMARTPHONE(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    marca TEXT,
    modelo TEXT,
    sistemaOperacional TEXT,
    tamanhoTela REAL,
    cameraPrincipal TEXT
)";

// Executará o comando de criação de tabela
$banco->query($criarTabela);

?>