<?php
require_once ('../DAO/DAOUser.php');
require_once ('../models/User.php');
if(!isset($_SESSION)) {
    session_start();
}
$id = $_SESSION['id'];

$dao = new DAOUser();
$data = $dao->searchUser($id);

foreach($data as $user) {
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus dados</title>
</head>
<body>
    <?php include 'header.php' ?>

    <div class="data-content">
        <h2>Meus dados</h2>
        <h3>Dados da conta</h3>
        <div class="user-data">
            <div class="data">
                <p>Usuário: <?= $user['name'] ?></p>
            </div>
            <div class="data">
                <p>E-mail: <?= $user['email'] ?></p>
            </div>
            <div class="data">
                <p>CPF: <?= $user['cpf'] ?></p>
            </div>
            <div class="data">
                <p>Telefone: <?= $user['cellphone'] ?></p>
            </div>
        </div>
        <a href="editData.php" id="edit-data">Editar dados</a>
        <a href="editUser.php" id="edit-data">Voltar</a>
    </div>

    <?php include 'footer.php' ?>
</body>
</html>