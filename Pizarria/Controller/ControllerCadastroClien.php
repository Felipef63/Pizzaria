<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/pizzaria-mysql/model/Cadastro_Cliente.php");

class ControllerCadastroClien{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        if(isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){
            $this->incluir();
        }else if(isset($_GET['funcao']) && $_GET['funcao'] == "editar"){
            $this->editar($_GET['Id']);
        }
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['txtNome']);
        $this->cadastro->setEndereco($_POST['txtEndereco']);
        $this->cadastro->setBairro($_POST['txtBairro']);
        $this->cadastro->setCEP($_POST['txtCEP']);
        $this->cadastro->setCidade($_POST['txtCidade']);
        $this->cadastro->setEstado($_POST['txtEstado']);
        $this->cadastro->setTelefone($_POST['txtTelefone']);
        $this->cadastro->setCelular($_POST['txtCelular']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }

    public function listar($id){
        return $result = $this->cadastro->listar($id);
    }

    private function editar($id){
        $this->cadastro->setId($id);
        $this->cadastro->setNome($_POST['txtNome']);
        $this->cadastro->setEndereco($_POST['txtEndereco']);
        $this->cadastro->setBairro($_POST['txtBairro']);
        $this->cadastro->setCEP($_POST['txtCEP']);
        $this->cadastro->setCidade($_POST['txtCidade']);
        $this->cadastro->setEstado($_POST['txtEstado']);
        $this->cadastro->setTelefone($_POST['txtTelefone']);
        $this->cadastro->setCelular($_POST['txtCelular']);
        $result = $this->cadastro->editar();
        if($result >= 1){
            echo "<script>alert('Registro alterado com sucesso!');document.location='../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao alterar o registro!');</script>";
        }
    }

    public function excluir($id){
        $result = $this->cadastro->excluir($id);
        if($result >= 1){
            echo "<script>alert('Registro excluido com sucesso!');document.location='index.php'</script>";
        }else{
            echo "<script>alert('Erro ao excluir o registro!');</script>";
        }
    }
}
new ControllerCadastroClien();
?>