<?php
require_once('../DAO/DAOPublish.php');
$id = filter_input(INPUT_POST, 'id');

$dao = new DaoPublish();
$data = $dao->searchPublish($id);
foreach($data as $pub) {
}
?>
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
        <h3>Edição de publicação</h3>
        <form class="edit-publish" method="POST" action="">
            <input type="hidden" name="id" value="<?= $pub['id'] ?>">
            <label for="publisherId">ID da editora</label>
            <input name="publisherId" type="number" value="<?= $pub['publisher_id'] ?>">
            <label for="bookId">ID do livro</label>
            <input name="bookId" type="number" value="<?= $pub['book_id'] ?>">
            <input type="submit" id="submit-button" value="Atualizar">
            <a href="publishAdmin.php">Voltar para a listagem de publicações</a>
        </form>
    </div>
    <script src="../js/editPublish.js"></script>
</body>
</html>