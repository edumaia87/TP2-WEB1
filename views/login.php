<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantinho da leitura - Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/login-register.css">
</head>
<body>
    <div id="login-card">
        <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <form id="login-form" method="POST" action="home.php">
        <label for="email">E-mail</label>
            <input name="email" type="text" placeholder=" digite seu e-mail">
            <label for="password">Senha</label>
            <input name="password" type="password" placeholder="Digite sua senha">
            <input id="login-button" name="login" type="submit" value="Login">
            <p>Ainda não tem conta? <a href="register.php"><strong>Cadastre-se</strong></a></p>
        </form>
    </div>
</body>
</html>