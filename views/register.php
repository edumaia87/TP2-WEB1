<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantinho da leitura - Cadastro</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/login-register.css">
</head>
<body>        
    <div id="login-card">
        <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <h3>Cadastro</h3>
        <form id="login-form" method="POST" action="">
            <label for="name">Nome completo</label>
            <input name="name" type="text" placeholder="Digite seu nome completo">
            <label for="email">E-mail</label>
            <input name="email" type="text" placeholder=" digite seu e-mail">
            <label for="password">Senha</label>
            <input name="password" type="password" placeholder="Digite sua senha">
            <label for="cpf">CPF</label>
            <input id="cpf" name="cpf" type="text" placeholder=" digite seu CPF" maxlength="14" autocomplete="off" onkeypress="cpfMask()">
            <label for="cellphone">Telefone</label>
            <input name="cellphone" type="text" maxlength="14" placeholder="Digite seu telefone">
            <input id="submit-button" name="register" type="submit" value="Cadastrar">
            <p>Já tem conta? <a href="login.php"><strong>Logar</strong></a></p>
        </form>
    </div>
    <script src="../js/processRegister.js"></script>
    <script src="../js/mask.js"></script>
</body>
</html>