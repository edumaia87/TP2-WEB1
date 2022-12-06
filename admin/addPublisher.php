<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar editora</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="add-pub-body">
    <div class="publisher-card">
        <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <h3>Cadastro dos dados da editora</h3>
        <form class="add-publisher" method="post" action="">
            <label for="name">Nome da Editora</label>
            <input name="name" type="text" placeholder="Digite o nome da editora">
            <label for="email">E-mail da Editora</label>
            <input name="email" type="text" placeholder="Digite o e-mail da editora">
            <label for="cellphone">Telefone da Editora</label>
            <input name="cellphone" type="text" placeholder="Digite o telefone da editora">
            <label for="cnpj">CNPJ da Editora</label>
            <input name="cnpj" type="text" placeholder="Digite o CNPJ da editora">
            <input type="submit" id="submit-button" value="Adicionar">
            <a href="publisherAdmin.php">Voltar para a listagem de editoras</a>
        </form>
    </div>
    <script src="../js/addPublisher.js"></script>
</body>
</html>