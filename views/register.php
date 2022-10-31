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
        <form id="login-form" method="POST" action="process.php">
            <label for="name">Nome completo</label>
            <input name="name" type="text" placeholder="Digite seu nome completo">
            <label for="email">E-mail</label>
            <input name="email" type="text" placeholder=" digite seu e-mail">
            <label for="password">Senha</label>
            <input name="password" type="password" placeholder="Digite sua senha">
            <label for="cpf">CPF</label>
            <input name="cpf" type="text" placeholder=" digite seu CPF" maxlength="11">
            <label for="cellphone">Telefone</label>
            <input name="cellphone" type="text" placeholder="Digite seu telefone">
            <label for="street">Rua</label>
            <input name="street" type="text" placeholder=" digite a rua aonde você mora">
            <label for="district">Bairro</label>
            <input name="district" type="text" placeholder="Digite o bairro aonde você mora">
            <label for="number">Número</label>
            <input name="number" type="number" placeholder="Digite o número de sua residência">
            <label for="state">Estado</label>
            <select name="state" id="state">
            </select>
            <label for="city">Cidade</label>
            <select name="city" id="city">
                <option value="">Escolha a cida aonde você mora:</option>
            </select>
            <input id="submit-button" name="register" type="submit" value="Cadastrar">
            <p>Já tem conta? <a href="login.php"><strong>Logar</strong></a></p>
        </form>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>