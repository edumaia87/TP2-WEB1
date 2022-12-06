<?php
require_once('../DAO/DAOUser.php');

$daoUser = new DaoUser();
$listUser = $daoUser->listUser();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <?php include 'headerAdmin.php'; ?>
    <div class="clients">
        <table>
            <caption><i class="fa fa-users"></i> Clientes cadastrados</caption>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>CPF</th>
                <th>Telefone</th>
            </tr>
            <tr>
                <?php
                foreach($listUser as $user) { 
                ?>
                <tr>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['cpf'] ?></td>
                    <td><?= $user['telefone'] ?></td>
                </tr>
                <?php 
                }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>