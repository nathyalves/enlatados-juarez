<?php
require_once 'ConexaoBD.php';

class OutrasFormacoes {
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;

    // Getters e Setters
    public function setID($id) { $this->id = $id; }
    public function getID() { return $this->id; }

    public function setIdUsuario($idusuario) { $this->idusuario = $idusuario; }
    public function getIdUsuario() { return $this->idusuario; }

    public function setInicio($inicio) { $this->inicio = $inicio; }
    public function getInicio() { return $this->inicio; }

    public function setFim($fim) { $this->fim = $fim; }
    public function getFim() { return $this->fim; }

    public function setDescricao($descricao) { $this->descricao = $descricao; }
    public function getDescricao() { return $this->descricao; }

    // Insere os dados na tabela outrasformacoes
    public function inserirBD() {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "INSERT INTO outrasformacoes (idusuario, inicio, fim, descricao) VALUES 
                ('{$this->idusuario}', '{$this->inicio}', '{$this->fim}', '{$this->descricao}')";
        
        if($conn->query($sql) === TRUE) {
            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    // Exclui um registro de outras formações
    public function excluirBD($id) {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "DELETE FROM outrasformacoes WHERE idoutrasformacoes = '{$id}'";
        
        if($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    // Lista registros de outras formações do usuário
    public function listarOutrasFormacoes($idusuario) {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "SELECT * FROM outrasformacoes WHERE idusuario = '{$idusuario}'";
        $resultado = $conn->query($sql);
        $conn->close();
        return $resultado;
    }
}
?>
