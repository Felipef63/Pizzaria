<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $ID_Produto;
    private $Nome_Produto;
    private $img;
    private $Descricao;
    private $Valor_Unitario;
 

    //Metodos Set
    public function setID_Produto($int){
        $this->ID_Produto = $int;
    }
    public function setNome_Produto($string){
        $this->Nome_Produto = $string;
    }
    public function setimg($string){
        $this->img = $string;
    }
    public function setDescricao($string){
        $this->Descricao = $string;
    }
    public function setValor_Unitario($string){
        $this->Valor_Unitario = $string;
    }
    

    //Metodos Get
    public function getID_Produto(){
        return $this->ID_Produto;
    }
    public function getNome_Produto(){
        return $this->Nome_Produto;
    }
    public function getimg(){
        return $this->img;
    }
    public function getDescricao(){
        return $this->Descricao;
    }
    public function getValor_Unitario(){
        return $this->Valor_Unitario;
    }
    

    public function incluir(){
        return $this->setProduto($this->getNome_Produto(),$this->getgetimg(),$this->getDescricao(),$this->getValor_Unitario());
    }

    public function listar($ID_Produto){
    	return $this->getProduto($ID_Produto);
    }

    public function editar(){
        return $this->updateProduot($this->getNome_Produto(),$this->getgetimg(),$this->getDescricao(),$this->getValor_Unitario());
    }

    public function excluir($ID_Produto){
        return $this->deleteProduto($ID_Produto);
    }
}
?>