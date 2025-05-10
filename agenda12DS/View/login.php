<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Sistema de Currículos</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
  <body>
    <!-- Centraliza o conteúdo -->
    <div class="w3-display-middle" style="width: 30%;">
      <!-- Formulário de Login -->
      <form action="loginController.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue">
        <h2 class="w3-center">Login</h2>
        <!-- Campo CPF -->
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-user"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="cpf" type="text" placeholder="Digite seu CPF" required />
          </div>
        </div>
        <!-- Campo Senha -->
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-lock"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="senha" type="password" placeholder="Digite sua senha" required />
          </div>
        </div>
        <!-- Botão Entrar -->
        <div class="w3-row w3-section">
          <button name="btnLogin" class="w3-button w3-block w3-blue w3-round-large">Entrar</button>
        </div>
      </form>
      <!-- Botão para Primeiro Acesso -->
      <div class="w3-center w3-margin-top">
        <a href="primeiroAcesso.php" class="w3-button w3-blue w3-round-large">Primeiro Acesso?</a>
      </div>
    </div>
  </body>
</html>