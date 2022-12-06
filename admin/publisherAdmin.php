<?php
require_once('../DAO/DAOPublisher.php');
$daoPublisher = new DaoPublisher();

$listPublisher = $daoPublisher->listPublisher();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editoras</title>
</head>
<body>
    <?php include 'headerAdmin.php'; ?>
    <div class="publisher">
        <table>
            <caption>Lista de Editoras</caption>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>CNPJ</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
            <tr>
                <?php
                foreach($listPublisher as $pub) { 
                ?>
                <tr>
                    <td><?= $pub['name'] ?></td>
                    <td><?= $pub['email'] ?></td>
                    <td><?= $pub['telefone'] ?></td>
                    <td><?= $pub['cnpj'] ?></td>
                    <td><a id="update-button" href="editPublisher.php"><i class="fa fa-pen"></i></a></td>
                    <td><a id="delete-button" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php 
                }
                ?>
            </tr>
        </table>
        <a id="add-button" href="addPublisher.php"><i class="fa fa-plus"></i> Adicionar editora</a>
    </div>
</body>
</html>