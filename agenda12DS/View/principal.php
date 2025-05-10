<?php
/*
// Iniciar a sessão e proteger a página
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enlatados Juarez - Principal</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .w3-sidebar { width: 120px; }
    body, h1, h2, h3, h4, h5, h6 { font-family: "Montserrat", sans-serif; }
    #main { margin-left: 140px; }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Sidebar -->
  <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
    <a href="#home" class="w3-bar-item w3-button w3-hover-light-grey">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#dadosPessoais" class="w3-bar-item w3-button w3-hover-light-grey">
      <i class="fa fa-address-book-o w3-xxlarge"></i>
      <p>Dados Pessoais</p>
    </a>
    <a href="#formacao" class="w3-bar-item w3-button w3-hover-light-grey">
      <i class="fa fa-mortar-board w3-xxlarge"></i>
      <p>Formação</p>
    </a>
    <a href="#experiencia" class="w3-bar-item w3-button w3-hover-light-grey">
      <i class="fa fa-briefcase w3-xxlarge"></i>
      <p>Experiência</p>
    </a>
    <a href="#outrasFormacoes" class="w3-bar-item w3-button w3-hover-light-grey">
      <i class="fa fa-book w3-xxlarge"></i>
      <p>Outras formações</p>
    </a>
  </nav>

  <!-- Main Content -->
  <div id="main" class="w3-padding-large">
    <!-- HOME Section -->
    <header class="w3-container w3-center" id="home">
      <h1>Enlatados Juarez</h1>
      <h2>Sistema de Currículos</h2>
      <img src="../Img/Enlatados.png" alt="Logo" style="width:20%;">
      <br>
      <a class="w3-text-cyan" href="http://www.freepik.com">Designed by brgfx / Freepik</a>
    </header>

    <!-- Dados Pessoais Section -->
    <div class="w3-container" id="dadosPessoais">
      <h2 class="w3-text-cyan">Dados Pessoais</h2>
      <form action="dadosPessoaisController.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
        <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="">
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-user"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="">
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-drivers-license"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF" value="">
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtDataNascimento" type="date" value="">
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-envelope"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email" value="">
          </div>
        </div>
        <div class="w3-row w3-section">
          <button name="btnAtualizar" class="w3-button w3-block w3-blue w3-round-large" style="width:20%;">Atualizar</button>
        </div>
      </form>
    </div>

    <!-- Formação Acadêmica Section -->
    <div class="w3-container" id="formacao">
      <h2 class="w3-text-cyan">Formação Acadêmica</h2>
      <form action="formacaoController.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
        <!-- Títulos para Data Inicial e Data Final -->
        <div class="w3-row w3-center">
          <div class="w3-col" style="width:50%;">Data Inicial</div>
          <div class="w3-col" style="width:50%;">Data Final</div>
        </div>
        <!-- Linha com Ícones e campos de data -->
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-col" style="width:37%;">
            <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date">
          </div>
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-col" style="width:37%;">
            <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date">
          </div>
        </div>
        <!-- Campo Descrição com Ícone -->
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
             <i class="w3-xxlarge fa fa-align-justify"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
          </div>
        </div>
        <!-- Botão para adicionar a formação -->
        <div class="w3-row w3-section">
          <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-round-large" style="width:20%;">
            <i class="w3-xxlarge fa fa-plus"></i>
          </button>
        </div>
      </form>
      <!-- Tabela de formações -->
      <div class="w3-container">
        <table class="w3-table-all w3-centered">
          <thead>
            <tr class="w3-blue">
              <th>Início</th>
              <th>Fim</th>
              <th>Descrição</th>
              <th>Apagar</th>
            </tr>
          </thead>
          <tbody>
            <!-- Aqui você incluirá os registros via PHP -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Experiência Profissional Section -->
    <div class="w3-container" id="experiencia">
      <h2 class="w3-text-cyan">Experiência Profissional</h2>
      <form action="experienciaController.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
        <!-- Títulos para Data Inicial e Data Final -->
        <div class="w3-row w3-center">
          <div class="w3-col" style="width:50%;">Data Inicial</div>
          <div class="w3-col" style="width:50%;">Data Final</div>
        </div>
        <!-- Linha com Ícones e campos de data -->
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-col" style="width:37%;">
            <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date">
          </div>
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-col" style="width:37%;">
            <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date">
          </div>
        </div>
        <!-- Campo Empresa com Ícone -->
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-building"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Empresa">
          </div>
        </div>
        <!-- Campo Descrição com Ícone -->
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-align-justify"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text" placeholder="Descrição: Cargo e atividades">
          </div>
        </div>
        <!-- Botão para adicionar experiência -->
        <div class="w3-row w3-section">
          <button name="btnAddEP" class="w3-button w3-block w3-blue w3-round-large" style="width:20%;">
            <i class="w3-xxlarge fa fa-plus"></i>
          </button>
        </div>
      </form>
      <!-- Tabela de experiências -->
      <div class="w3-container">
        <table class="w3-table-all w3-centered">
          <thead>
            <tr class="w3-blue">
              <th>Início</th>
              <th>Fim</th>
              <th>Empresa</th>
              <th>Descrição</th>
              <th>Apagar</th>
            </tr>
          </thead>
          <tbody>
            <!-- Registros via PHP -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Outras Formações Section -->
    <div class="w3-container" id="outrasFormacoes">
      <h2 class="w3-text-cyan">Outras Formações</h2>
      <form action="outrasFormacoesController.php" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
        <!-- Títulos para Data Inicial e Data Final -->
        <div class="w3-row w3-center">
          <div class="w3-col" style="width:50%;">Data Inicial</div>
          <div class="w3-col" style="width:50%;">Data Final</div>
        </div>
        <!-- Linha com Ícones e campos de data -->
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-col" style="width:37%;">
            <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date">
          </div>
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-calendar"></i>
          </div>
          <div class="w3-col" style="width:37%;">
            <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date">
          </div>
        </div>
        <!-- Campo Descrição com Ícone -->
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-align-justify"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text" placeholder="Descrição: Ex.: Curso Online, Workshop, etc.">
          </div>
        </div>
        <!-- Botão para adicionar outras formações -->
        <div class="w3-row w3-section">
          <button name="btnAddOF" class="w3-button w3-block w3-blue w3-round-large" style="width:20%;">
            <i class="w3-xxlarge fa fa-plus"></i>
          </button>
        </div>
      </form>
      <!-- Tabela de outras formações -->
      <div class="w3-container">
        <table class="w3-table-all w3-centered">
          <thead>
            <tr class="w3-blue">
              <th>Início</th>
              <th>Fim</th>
              <th>Descrição</th>
              <th>Apagar</th>
            </tr>
          </thead>
          <tbody>
            <!-- Registros via PHP -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>