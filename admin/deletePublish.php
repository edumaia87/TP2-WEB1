<?php
// require_once ('../DAO/DAOPublish.php');

$id = filter_input(INPUT_POST, 'id');

// $daoPublish = new DaoPublish();
// $listPublish = $daoPublish->searchPublish($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir publicação</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <?php include 'headerAdmin.php' ?>
    <div class="delete-content">
        <h2><i class="fa fa-trash"></i> Você realmente deseja deletar a publicação deste livro?</h2>
        <form class="delete-publish" method="POST" action="">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input id="submit-button" type="submit" value="Confirmar">
        </form>
    </div>
    <script src="../js/deletePublish.js"></script>
</body>
</html>