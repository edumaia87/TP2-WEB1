<?php
require_once('../DAO/DAOAddress.php');
if(!isset($_SESSION)) {
    session_start();
}
$id = $_SESSION['id'];

$dao = new DaoAddress();
$listAddress = $dao->listAddress($id);
foreach($listAddress as $address) {
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar endereço</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/login-register.css">
</head>
<body>
    <div id="login-card">
        <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <h3>Edição de Endereço</h3>
        <form class="edit-address" method="POST" action="">
            <input type="hidden" name="id" value="<?= $address['id'] ?>">
            <label for="street">Rua</label>
            <input name="street" type="text" value="<?= $address['street'] ?>">
            <label for="district">Bairro</label>
            <input name="district" type="text" value="<?= $address['district'] ?>">
            <label for="number">Número</label>
            <input name="number" type="number" value="<?= $address['number'] ?>">
            <label for="state">Estado</label>
            <select name="state" id="state">
                <option><?= $address['state'] ?></option>
            </select>
            <label for="city">Cidade</label>
            <select name="city" id="city">
                <option><?= $address['city'] ?></option>
            </select>
            <input id="submit-button" name="register" type="submit" value="Atualizar">
            <p><a href="myAddresses.php"><strong>Voltar a tela de endereços</strong></a></p>
        </form>
    </div>

    <script src="../js/index.js"></script>
    <script src="../js/editAddress.js"></script>
</body>
</html>