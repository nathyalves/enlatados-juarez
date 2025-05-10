<?php
require_once 'ConexaoBD.php';

class FormacaoAcad {
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

    // Insere a formação no banco
    public function inserirBD() {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "INSERT INTO formacaoAcademica (idusuario, inicio, fim, descricao) VALUES 
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

    // Exclui uma formação
    public function excluirBD($id) {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "DELETE FROM formacaoAcademica WHERE idformacaoAcademica = '{$id}'";

        if($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    // Lista formações do usuário
    public function listaFormacoes($idusuario) {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "SELECT * FROM formacaoAcademica WHERE idusuario = '{$idusuario}'";
        $resultado = $conn->query($sql);
        $conn->close();
        return $resultado;
    }
}
?>