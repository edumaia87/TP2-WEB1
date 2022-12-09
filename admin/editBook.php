<?php
require_once ('../DAO/DAOBook.php');
require_once ('../models/Book.php');

$id = filter_input(INPUT_GET, 'id');

$daoBook = new DaoBook();
$listBook = $daoBook->searchBook($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar livro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="add-pub-body">
    <div class="book-card">
        <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <h3>Edição dos dados da livro</h3>
        <form class="edit-book" method="POST" action="">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label for="title">Título do livro</label>
            <input name="title" type="text" value="<?= $listBook['title'] ?>">
            <label for="image">Imagem do livro</label>
            <input name="image" type="text" value="<?= $listBook['image'] ?>">
            <label for="author">Autor do livro</label>
            <input name="author" type="text" value="<?= $listBook['author'] ?>">
            <label for="description">Descrição do livro</label>
            <input name="description" type="text" value="<?= $listBook['description'] ?>">
            <label for="price">Preço do livro</label>
            <input name="price" type="text" value="<?= $listBook['price'] ?>">
            <label for="publishedDate">Data de publicação</label>
            <input name="publishedDate" type="text" value="<?= $listBook['published_date'] ?>">
            <label for="genre">Gênero do livro</label>
            <input name="genre" type="text" value="<?= $listBook['genre'] ?>">
            <label for="isbn">ISBN do livro</label>
            <input name="isbn" type="text" value="<?= $listBook['isbn'] ?>">
            <input type="submit" id="submit-button" value="Atualizar">
            <a href="productsAdmin.php">Voltar para a listagem de produtos</a>
        </form>
    </div>
    <script src="../js/editBook.js"></script>
</body>
</html>