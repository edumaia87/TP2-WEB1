<?php
require_once ('../DAO/DAOPublisher.php');
require_once ('../models/Publisher.php');

$id = filter_input(INPUT_GET, 'id');
// $name = filter_input(INPUT_POST, 'name');
// $email = filter_input(INPUT_POST, 'email');
// $cellphone = filter_input(INPUT_POST, 'cellphone');
// $cnpj = filter_input(INPUT_POST, 'cnpj');

$daoPublisher = new DaoPublisher();
$listPublisher = $daoPublisher->searchPublisher($id);
// $publisher = new Publisher($id, $name, $email, $cellphone, $cnpj);

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
            <label for="name">Nome da Editora</label>
            <input name="name" type="text" value="<?= $listPublisher['name'] ?>">
            <label for="email">E-mail da Editora</label>
            <input name="email" type="text" value="<?= $listPublisher['email'] ?>">
            <label for="cellphone">Telefone da Editora</label>
            <input name="cellphone" type="text" value="<?= $listPublisher['telefone'] ?>">
            <label for="cnpj">CNPJ da Editora</label>
            <input name="cnpj" type="text" value="<?= $listPublisher['cnpj'] ?>">
            <input type="submit" id="submit-button" value="Adicionar">
            <a href="publisherAdmin.php">Voltar para a listagem de editoras</a>
        </form>
    </div>
    <script src="../js/editPublisher.js"></script>
</body>
</html>