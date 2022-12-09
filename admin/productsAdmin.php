<?php
require_once('../DAO/DAOBook.php');
$daoBook = new DaoBook();

$listBook = $daoBook->listBook();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <?php include 'headerAdmin.php'; ?>
    <div class="publisher">
        <table>
            <caption><i class="fa fa-book"></i> Lista de Livros</caption>
            <tr>
                <th>Título</th>
                <th>Capa</th>
                <th>Autor</th>
                <th>Descrição</th>
                <th>Data de publicação</th>
                <th>Gênero</th>
                <th>ISBN</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <tr>
                <?php
                foreach($listBook as $book) { 
                ?>
                <tr>
                    <td><?= $book['title'] ?></td>
                    <td><img id="image" src="<?= $book['image'] ?>"></td>
                    <td><?= $book['author'] ?></td>
                    <td><?= $book['description'] ?></td>
                    <td><?= $book['published_date'] ?></td>
                    <td><?= $book['genre'] ?></td>
                    <td><?= $book['isbn'] ?></td>
                    <td>
                        <form method="GET" action="editBook.php">
                            <input type="hidden" name="id" value="<?= $book['id'] ?>">
                            <button type="submit" id="update-button"><i class="fa fa-pen"></i></button>
                        </form>
                    </td>
                    <td>
                        <form class="delete-book" method="POST" action="deleteBook.php">
                            <input type="hidden" name="id" value="<?= $book['id'] ?>">
                            <button type="submit" id="delete-button"><i class="fa fa-trash"></i></button>
                        </form> 
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tr>
        </table>
        <a id="add-button" href="addBook.php"><i class="fa fa-plus"></i> Adicionar livro</a>
    </div>
</body>
</html>