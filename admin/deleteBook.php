<?php

require_once ('../DAO/DAOBook.php');
require_once ('../models/Book.php');

$id = filter_input(INPUT_POST, 'id');

$daoBook = new DaoBook();
$listBook = $daoBook->searchBook($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir livro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <?php include 'headerAdmin.php' ?>
    <div class="delete-content">
        <h2><i class="fa fa-trash"></i> Você realmente deseja deletar o livro <?= $listBook['title'] ?>?</h2>
        <form class="delete-book" method="POST" action="">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input id="submit-button" type="submit" value="Confirmar">
        </form>
    </div>
    <script src="../js/deleteBook.js"></script>
</body>
</html>