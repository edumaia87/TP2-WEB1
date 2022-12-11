<?php
require_once('../DAO/DAOpublish.php');
$daoPublish = new DaoPublish();

$listPublish = $daoPublish->listPublish();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicações</title>
</head>
<body>
    <?php include 'headerAdmin.php'; ?>
    <div class="publisher">
        <table>
            <caption><i class="fa fa-upload"></i> Lista de Publicações</caption>
            <tr>
                <th>Título do livro</th>
                <th>Capa</th>
                <th>Nome da editora</th>
                <th>Data da publicação</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
            <tr>
                <?php
                foreach($listPublish as $pub) { 
                ?>
                <tr>
                    <td><?= $pub['title'] ?></td>
                    <td><img id="image" src="<?= $pub['image'] ?>"></td>
                    <td><?= $pub['name'] ?></td>
                    <td><?= $pub['published_date'] ?></td>
                    <td>
                        <form method="POST" action="editPublish.php">
                            <input type="hidden" name="id" value="<?= $pub['id'] ?>">
                            <button type="submit" id="update-button"><i class="fa fa-pen"></i></button>
                        </form>
                    </td>
                    <td>
                        <form class="delete-publish" method="POST" action="deletePublish.php">
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
        <a id="add-button" href="addPublish.php"><i class="fa fa-plus"></i> Adicionar publicação</a>
    </div>
</body>
</html>