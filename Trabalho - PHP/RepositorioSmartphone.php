<?php

class RepositorioSmartphone {

public function cadastrar(Smartphone $smartphone, PDO $pdo) {
    // Preparando a instrução SQL para criar o registro na tabela
    $codigoSql = "INSERT INTO SMARTPHONE(marca, modelo, sistemaOperacional, tamanhoTela, cameraPrincipal) 
                  VALUES (:marca, :modelo, :so, :tamanho, :camera)";

    $marca = $smartphone->exibirMarca();
    $modelo = $smartphone->exibirModelo();
    $sistemaOperacional = $smartphone->exibirSistemaOperacional();
    $tamanhoTela = $smartphone->exibirTamanhoTela();
    $cameraPrincipal = $smartphone->exibirCameraPrincipal();

    // Preparar as instruções
    $inserir = $pdo->prepare($codigoSql);
    // Definindo o valor dos parâmetros
    $inserir->bindParam(":marca", $marca);
    $inserir->bindParam(":modelo", $modelo);
    $inserir->bindParam(":so", $sistemaOperacional);
    $inserir->bindParam(":tamanho", $tamanhoTela);
    $inserir->bindParam(":camera", $cameraPrincipal);
    // Executa o comando de inserir no banco
    $inserir->execute();
}

public function listar(PDO $banco) {
    $sql = "SELECT * FROM SMARTPHONE";

    // Executa o SQL no banco 
    $select = $banco->query($sql);

    // Estrutura os valores obtidos pelo $select como um vetor indexado 
    return $select->fetchAll(PDO::FETCH_ASSOC); 
}
}

?>