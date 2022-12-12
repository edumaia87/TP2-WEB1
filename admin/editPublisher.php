<?php

require_once ('../DAO/DAOPublisher.php');
require_once ('../models/Publisher.php');

$id = filter_input(INPUT_GET, 'id');

$daoPublisher = new DaoPublisher();
$listPublisher = $daoPublisher->searchPublisher($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar editora</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="add-pub-body">
    <div class="publisher-card">
        <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <h3>Edição dos dados da editora</h3>
        <form class="edit-publisher" method="POST" action="">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label for="name">Nome da Editora</label>
            <input name="name" type="text" value="<?= $listPublisher['name'] ?>">
            <label for="email">E-mail da Editora</label>
            <input name="email" type="text" value="<?= $listPublisher['email'] ?>">
            <label for="cellphone">Telefone da Editora</label>
            <input name="cellphone" type="text" value="<?= $listPublisher['cellphone'] ?>">
            <label for="cnpj">CNPJ da Editora</label>
            <input id="cnpj" name="cnpj" type="text" maxlength="18" value="<?= $listPublisher['cnpj'] ?>">
            <input type="submit" id="submit-button" value="Atualizar">
            <a href="publisherAdmin.php">Voltar para a listagem de editoras</a>
        </form>
    </div>
    <script src="../js/editPublisher.js"></script>
    <script src="../js/mask.js"></script>
</body>
</html>