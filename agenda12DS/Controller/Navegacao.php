<?php
if (!isset($_SESSION)) {
    session_start();
}

// btnPrimeiroAcesso
if (isset($_POST["btnPrimeiroAcesso"])) {
    include_once "../View/primeiroAcesso.php";

// btnCadastrar
} else if (isset($_POST["btnCadastrar"])) {
    require_once "../Controller/UsuarioController.php";
    $uController = new UsuarioController();

    if ($uController->inserir(
        $_POST["txtNome"],
        $_POST["txtCPF"],
        $_POST["txtEmail"],
        $_POST["txtSenha"]
    )) {
        include_once "../View/cadastroRealizado.php";
    } else {
        include_once "../View/cadastroNaoRealizado.php";
    }

// btnAtualizar
} else if (isset($_POST["btnAtualizar"])) {
    require_once "../Controller/UsuarioController.php";
    $uController = new UsuarioController();

    if ($uController->atualizar(
        $_POST["txtID"],
        $_POST["txtNome"],
        $_POST["txtCPF"],
        $_POST["txtEmail"],
        date("Y-m-d", strtotime($_POST["txtData"]))
    )) {
        include_once "../View/atualizacaoRealizada.php";
    } else {
        include_once "../View/operacaoNaoRealizada.php";
    }

// btnLogin
} else if (isset($_POST["btnLogin"])) {
    require_once "../Controller/UsuarioController.php";
    $uController = new UsuarioController();

    if ($uController->login($_POST["txtLogin"], $_POST["txtSenha"])) {
        include_once "../View/principal.php";
    } else {
        include_once "../View/cadastroNaoRealizado.php";
    }

// btnAddFormacao
} else if (isset($_POST["btnAddFormacao"])) {
    require_once "../Controller/FormacaoAcadController.php";
    include_once "../Model/Usuario.php";

    $fController = new FormacaoAcadController();

    if ($fController->inserir(
        date("Y-m-d", strtotime($_POST["txtInicioFA"])),
        date("Y-m-d", strtotime($_POST["txtFimFA"])),
        $_POST["txtDescFA"],
        unserialize($_SESSION["Usuario"])->getID()
    )) {
        include_once "../View/cadastroRealizado.php";
    } else {
        include_once "../View/cadastroNaoRealizado.php";
    }

// btnExcluirFA
} else if (isset($_POST["btnExcluirFA"])) {
    require_once "../Controller/FormacaoAcadController.php";
    include_once "../Model/Usuario.php";

    $fController = new FormacaoAcadController();

    if ($fController->remover($_POST["id"])) {
        include_once "../View/informacaoExcluida.php";
    } else {
        include_once "../View/operacaoNaoRealizda.php";
    }

// btnAddEP
} else if (isset($_POST["btnAddEP"])) {
    require_once "../Controller/ExperienciaProfissionalController.php";
    include_once "../Model/Usuario.php";

    $epController = new ExperienciaProfissionalController();

    if ($epController->inserir(
        date("Y-m-d", strtotime($_POST["txtInicioEP"])),
        date("Y-m-d", strtotime($_POST["txtFimEP"])),
        $_POST["txtEmpEP"],
        $_POST["txtDescEP"],
        unserialize($_SESSION["Usuario"])->getID()
    )) {
        include_once "../View/informacaoInserida.php";
    } else {
        include_once "../View/operacaoNRealizada.php";
    }

// btnExcluirEP
} else if (isset($_POST["btnExcluirEP"])) {
    require_once "../Controller/ExperienciaProfissionalController.php";
    include_once "../Model/Usuario.php";

    $epController = new ExperienciaProfissionalController();

    if ($epController->remover($_POST["idEP"])) {
        include_once "../View/informacaoExcluida.php";
    } else {
        include_once "../View/operacaoNRealizada.php";
    }

// Nenhum botão clicado — mostrar login
} else {
    include_once "View/login.php";
}

