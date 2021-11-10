<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/pizzaria-mysql/model/Cadastro_Produto.php");

class ControllerCadastroProdu{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        if(isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){
            $this->incluir();
        }else if(isset($_GET['funcao']) && $_GET['funcao'] == "editar"){
            $this->editar($_GET['Id_Produto']);
        }
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['txtNomeProduto']);
        $this->cadastro->setTelefone($_POST['Imagem']);
        $this->cadastro->setOrigem($_POST['txtDescrição']);
        $this->cadastro->setObservacao($_POST['txtValor']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }

    public function listar($ID_Produto){
        return $result = $this->cadastro->listar($ID_Produto);
    }

    private function editar($ID_Produto){
        $this->cadastro->setId('Id_Produto');
        $this->cadastro->setNome($_POST['txtNomeProduto']);
        $this->cadastro->setTelefone($_POST['Imagem']);
        $this->cadastro->setOrigem($_POST['txtDescrição']);
        $this->cadastro->setObservacao($_POST['txtValor']);
        $result = $this->cadastro->editar();
        if($result >= 1){
            echo "<script>alert('Registro alterado com sucesso!');document.location='../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao alterar o registro!');</script>";
        }
    }

    public function excluir($ID_Produto){
        $result = $this->cadastro->excluir($ID_Produto);
        if($result >= 1){
            echo "<script>alert('Registro excluido com sucesso!');document.location='index.php'</script>";
        }else{
            echo "<script>alert('Erro ao excluir o registro!');</script>";
        }
    }
}
new ControllerCadastroProdu();
?>