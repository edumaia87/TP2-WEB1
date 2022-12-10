<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar publicação</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="add-pub-body">
    <div class="publisher-card">
        <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <h3>Cadastro de publicação</h3>
        <form class="add-publish" method="POST" action="">
            <label for="publisherId">ID da editora</label>
            <input name="publisherId" type="number" placeholder="Digite o ID da editora">
            <label for="bookId">ID do livro</label>
            <input name="bookId" type="number" placeholder="Digite o ID do livro">
            <input type="submit" id="submit-button" value="Adicionar">
            <a href="publishAdmin.php">Voltar para a listagem de publicações</a>
        </form>
    </div>
    <script src="../js/addPublish.js"></script>
</body>
</html>