<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $id;
    private $nome;
    private $Endereco;
    private $Bairro;
    private $CEP;
    private $Cidade;
    private $Estado;
    private $Telefone;
    private $Celular;

    //Metodos Set
    public function setId($int){
        $this->id = $int;
    }
    public function setNome($string){
        $this->nome = $string;
    }
    public function setEndereco($string){
        $this->Endereco = $string;
    }
    public function setBairro($string){
        $this->Bairro = $string;
    }
    public function setCEP($string){
        $this->CEP = $string;
    }
    public function setCidade($string){
        $this->Cidade = $string;
    }
    public function setEstado($string){
        $this->Estado = $string;
    }
    public function setTelefone($string){
        $this->Telefone = $string;
    }
    public function setCelular($string){
        $this->Celular = $string;
    }

    //Metodos Get
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEndereco(){
        return $this->Endereco;
    }
    public function getBairro(){
        return $this->Bairro;
    }
    public function getCEP(){
        return $this->CEP;
    }
    public function getCidade(){
        return $this->Cidade;
    }
    public function getEstado(){
        return $this->Estado;
    }
    public function getTelefone(){
        return $this->Telefone;
    }
    public function getCelular(){
        return $this->Celular;
    }

    public function incluir(){
        return $this->setperfil($this->getNome(),$this->getEndereco(),$this->getBairro(),$this->getCEP(),$this->getCidade(),$this->getEstado(),$this->getTelefone(),$this->getCelular());
    }

    public function listar($id){
    	return $this->getperfil($id);
    }

    public function editar(){
        return $this->updatePerfil($this->getId(),$this->getNome(),$this->getEndereco(),$this->getBairro(),$this->getCEP(),$this->getCidade(),$this->getEstado(),$this->getTelefone(),$this->getCelular());
    }

    public function excluir($id){
        return $this->deletePerfil($id);
    }
}
?>