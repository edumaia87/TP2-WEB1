<?php
require_once ('../DAO/DAOUser.php');
if(!isset($_SESSION)) {
    session_start();
}

$id = $_SESSION['id'];

$daoUser = new DaoUser();
$listUser = $daoUser->searchUser($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir editora</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <?php include 'header.php' ?>
    <div class="delete-content">
        <h2><i class="fa fa-trash"></i> Você realmente deseja deletar sua conta?</h2>
        <form class="delete-account-form" method="POST" action="">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input id="submit-button" type="submit" value="Confirmar">
        </form>
    </div>
    <script src="../js/deleteAccount.js"></script>
    <?php include 'footer.php' ?>
</body>
</html>