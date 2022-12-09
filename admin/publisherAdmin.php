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
                    <td><?= $pub['cellphone'] ?></td>
                    <td><?= $pub['cnpj'] ?></td>
                    <td>
                        <form method="GET" action="editPublisher.php">
                            <input type="hidden" name="id" value="<?= $pub['id'] ?>">
                            <button type="submit" id="update-button"><i class="fa fa-pen"></i></button>
                        </form>
                    </td>
                    <td>
                        <form class="delete-publisher" method="POST" action="deletePublisher.php">
                            <input type="hidden" name="id" value="<?= $pub['id'] ?>">
                            <button type="submit" id="delete-button"><i class="fa fa-trash"></i></button>
                        </form>
                        
                    </td>
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