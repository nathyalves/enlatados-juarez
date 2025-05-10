<?php
require_once 'ConexaoBD.php';

class Usuario {
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $dataNascimento;
    private $senha;

    // Getters e Setters
    public function setID($id) { $this->id = $id; }
    public function getID() { return $this->id; }

    public function setNome($nome) { $this->nome = $nome; }
    public function getNome() { return $this->nome; }

    public function setCPF($cpf) { $this->cpf = $cpf; }
    public function getCPF() { return $this->cpf; }

    public function setEmail($email) { $this->email = $email; }
    public function getEmail() { return $this->email; }

    public function setDataNascimento($dataNascimento) { $this->dataNascimento = $dataNascimento; }
    public function getDataNascimento() { return $this->dataNascimento; }

    public function setSenha($senha) { $this->senha = $senha; }
    public function getSenha() { return $this->senha; }

    // Inserir no banco
    public function inserirBD() {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "INSERT INTO usuario (nome, cpf, email, senha) VALUES 
               ('{$this->nome}', '{$this->cpf}', '{$this->email}', '{$this->senha}')";

        if ($conn->query($sql) === TRUE) {
            $this->id = $conn->insert_id;
            $conn->close();
            return TRUE;
        } else {
            $conn->close();
            return FALSE;
        }
    }

    // Atualizar no banco
    public function atualizarBD() {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "UPDATE usuario SET 
                    nome = '{$this->nome}', 
                    cpf = '{$this->cpf}', 
                    email = '{$this->email}', 
                    dataNascimento = '{$this->dataNascimento}'
                WHERE idusuario = {$this->id}";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return TRUE;
        } else {
            $conn->close();
            return FALSE;
        }
    }

    // Carregar dados a partir do CPF
    public function carregarUsuario($cpf) {
        $con = new ConexaoBD();
        $conn = $con->conectar();

        $sql = "SELECT * FROM usuario WHERE cpf = '$cpf'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->id = $row["idusuario"];
            $this->nome = $row["nome"];
            $this->cpf = $row["cpf"];
            $this->email = $row["email"];
            $this->dataNascimento = $row["dataNascimento"];
            $this->senha = $row["senha"];
        }

        $conn->close();
    }
}
?>

