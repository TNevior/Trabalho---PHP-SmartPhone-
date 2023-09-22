<?php

class Smartphone {
    // Definindo os atributos
    private $marca;
    private $modelo;
    private $sistemaOperacional;
    private $tamanhoTela;
    private $cameraPrincipal;

    // Método construtor
    public function __construct(string $marca, string $modelo, string $sistemaOperacional, float $tamanhoTela, string $cameraPrincipal){
        $this->definirMarca($marca);
        $this->definirModelo($modelo);
        $this->definirSistemaOperacional($sistemaOperacional);
        $this->definirTamanhoTela($tamanhoTela);
        $this->definirCameraPrincipal($cameraPrincipal);
    }

    // Funções de operações dos objetos

    public function definirMarca(string $marca){
        $this->marca = $marca;
    }

    public function definirModelo(string $modelo){
        $this->modelo = $modelo;
    }

    public function definirSistemaOperacional(string $sistemaOperacional){
        $this->sistemaOperacional = $sistemaOperacional;
    }

    public function definirTamanhoTela(float $tamanhoTela){
        $this->tamanhoTela = $tamanhoTela;
    }

    public function definirCameraPrincipal(string $cameraPrincipal){
        $this->cameraPrincipal = $cameraPrincipal;
    }

    public function exibirMarca(){
        return $this->marca;
    }

    public function exibirModelo(){
        return $this->modelo;
    }

    public function exibirSistemaOperacional(){
        return $this->sistemaOperacional;
    }

    public function exibirTamanhoTela(){
        return $this->tamanhoTela;
    }

    public function exibirCameraPrincipal(){
        return $this->cameraPrincipal;
    }
}
