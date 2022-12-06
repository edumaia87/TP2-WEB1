<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar endereço</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/login-register.css">
</head>
<body>
    <div id="login-card">
        <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <h3>Cadastro de Endereço</h3>
        <form id="login-form" method="POST" action="">
            <label for="street">Rua</label>
            <input name="street" type="text" placeholder=" digite a rua aonde você mora">
            <label for="district">Bairro</label>
            <input name="district" type="text" placeholder="Digite o bairro aonde você mora">
            <label for="number">Número</label>
            <input name="number" type="number" placeholder="Digite o número de sua residência">
            <label for="state">Estado</label>
            <select name="state" id="state">
                <option value="">Escolha o estado aonde você mora:</option>
            </select>
            <label for="city">Cidade</label>
            <select name="city" id="city">
                <option value="">Escolha a cidade aonde você mora:</option>
            </select>
            <input id="submit-button" name="register" type="submit" value="Cadastrar">
            <p><a href="checkoutPage.php"><strong>Voltar a tela de confirmação</strong></a></p>
        </form>
    </div>

    <script src="../js/index.js"></script>
</body>
</html>