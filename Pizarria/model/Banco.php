<?php
//timezone
date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados
define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','pizzaria');
    
class Banco{

    protected $mysqli;
    private $cadastro;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setperfil($nome,$Endereco,$Bairro,$CEP,$Cidade,$Estado,$Telefone,$Celular){
        $stmt = $this->mysqli->prepare("INSERT INTO perfil (`Nome_Perfil`, `Endereco`, `Bairro`, `CEP`, `Cidade`, `Estado`, `Telefone`, `Celular`) VALUES (?,?,?,?,?);");
        $stmt->bind_param("sssss",$nome,$Endereco,$Bairro,$CEP,$Cidade,$Estado,$Telefone,$Celular);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getperfil($id) {
        try {
            if(isset($id) && $id > 0){
                $stmt = $this->mysqli->query("SELECT * FROM perfil WHERE Id = '" . $id . "';");
            }else{
                $stmt = $this->mysqli->query("SELECT * FROM perfil;");
            }
            
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            foreach ($lista as $l) {
                $f_lista[$i]['Id'] = $l['Id'];
                $f_lista[$i]['Nome_Perfil'] = $l['Nome_Perfil'];
                $f_lista[$i]['Endereco'] = $l['Endereco'];
                $f_lista[$i]['Bairro'] = $l['Bairro'];
                $f_lista[$i]['CEP'] = $l['CEP'];
                $f_lista[$i]['Cidade'] = $l['Cidade'];
                $f_lista[$i]['Estado'] = $l['Estado'];
                $f_lista[$i]['Telefone'] = $l['Telefone'];
                $f_lista[$i]['Celular'] = $l['Celular'];
                $i++;
            }
            return $f_lista;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    public function updatePerfil($nome,$Endereco,$Bairro,$CEP,$Cidade,$Estado,$Telefone,$Celular){
       $stmt = $this->mysqli->query("UPDATE perfil SET `Nome_Perfil` = '" . $nome . "', `Endereco` =  '" . $Endereco . "', `Bairro` =  '" . $Bairro . "', `CEP` =  '" . $CEP . "', `Cidade` =   '" . $Cidade . "', `Estado` =   '" . $Estado . "', `Telefone` =   '" . $Telefone . "', `Celular` =   '" . $Celular . "' WHERE `id` =  '" . $id . "';");
        if( $stmt > 0){
            return true ;
        }else{
            return false;
        }
    }

    public function deletePerfil($id){
        $stmt = $this->mysqli->query("DELETE FROM perfil WHERE `Id` =  '" . $id . "';");
        if( $stmt > 0){
            return true ;
        }else{
            return false;
        }
    }

    public function setProduto($Nome_Produto ,$img,$Descricao,$Valor_Unitario){
        $stmt = $this->mysqli->prepare("INSERT INTO produto (`Nome_Produto`, `img`, `Descricao`, `Valor_Unitario`) VALUES (?,?,?,?,?);");
        $stmt->bind_param("sssss",$Nome_Produto,$img,$Descricao,$Valor_Unitario);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getProduto($ID_Produto) {
        try {
            if(isset($ID_Produto) && $id > 0){
                $stmt = $this->mysqli->query("SELECT * FROM produto WHERE ID_Produto = '" . $ID_Produto . "';");
            }else{
                $stmt = $this->mysqli->query("SELECT * FROM produto;");
            }
            
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            foreach ($lista as $l) {
                $f_lista[$i]['ID_Produto'] = $l['ID_Produto'];
                $f_lista[$i]['Nome_Produto'] = $l['Nome_Produto'];
                $f_lista[$i]['img'] = $l['img'];
                $f_lista[$i]['Descricao'] = $l['Descricao'];
                $f_lista[$i]['Valor_Unitario'] = $l['Valor_Unitario'];
                $i++;
            }
            return $f_lista;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    public function updateProduto($ID_Produto,$Nome_Produto ,$img,$Descricao,$Valor_Unitario){
       $stmt = $this->mysqli->query("UPDATE produto SET `Nome_Produto` = '" . $Nome_Produto . "', `img` =  '" . $img . "', `Descricao` =  '" . $Descricao . "', `Valor_Unitario` =  '" . $Valor_Unitario . "' WHERE `id` =  '" . $id . "';");
        if( $stmt > 0){
            return true ;
        }else{
            return false;
        }
    }

    public function deleteProduto($ID_Produto){
        $stmt = $this->mysqli->query("DELETE FROM perfil WHERE `id` =  '" . $ID_Produto . "';");
        if( $stmt > 0){
            return true ;
        }else{
            return false;
        }
    }
}    
?>