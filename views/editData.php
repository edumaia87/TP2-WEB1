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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body style="background: var(--black)">
    <div class="user-form">
    <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <h3>Edição dos dados</h3>
        <form class="edit-data" method="POST" action="">
        <label for="name">Nome completo</label>
            <input name="name" type="text" value="<?= $user['name'] ?>">
            <label for="email">E-mail</label>
            <input name="email" type="text" value="<?= $user['email'] ?>">
            <label for="password">Senha</label>
            <input name="password" type="password" value="<?= $user['password'] ?>">
            <label for="cpf">CPF</label>
            <input id="cpf" name="cpf" type="text" maxlength="14" value="<?= $user['cpf'] ?>">
            <label for="cellphone">Telefone</label>
            <input name="cellphone" type="text" value="<?= $user['cellphone'] ?>">
            <input id="submit-button" type="submit" value="Atualizar">
            <p><a href="myData.php"><strong>Voltar para tela Meus dados</strong></a></p>
        </form>
    </div>
    <script src="../js/editUser.js"></script>
    <script src="../js/mask.js"></script>
</body>
</html>