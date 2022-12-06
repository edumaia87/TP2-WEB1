<?php
session_start();

require_once ('../DAO/DAOBuys.php');
require_once ('../models/Buys.php');
require_once ('../DAO/DAOAddress.php');
require_once ('../models/Address.php');

$daoBuys = new DAOBuys();
$daoAddress = new DaoAddress();

$bookId = filter_input(INPUT_POST, 'bookId');
$userId = $_SESSION['id'];
$price = filter_input(INPUT_POST, 'price');
$saleDate = filter_input(INPUT_POST, 'saleDate');

$userAddress = $daoAddress->listAddress($userId);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar compra</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <?php
        foreach ($userAddress as $address) {
            // echo "<p>" . $address['id'] . "</p>";
            // echo "<p>" . $address['user_id'] . "</p>";
            // echo "<p>" . $address['street'] . "</p>";
            // echo "<p>" . $address['district'] . "</p>";
            // echo "<p>" . $address['number'] . "</p>";
            // echo "<p>" . $address['city'] . "</p>";
            // echo "<p>" . $address['state'] . "</p>";
        } 
    ?>

    <div class="checkout-content">
        <h1>Como você deseja receber a sua compra?</h1>
        <h3>Endereço</h3>
        <div class="address-content">
        <svg width="20" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
            <div class="address">
                <p>Rua <?= $address['street'] ?>, <?= $address['number']?>, <?= $address['district']?></p>
                <p><?= $address['city'] ?>, <?= $address['state'] ?></p>
            </div>
            <a id="add-address" href="./addAddress.php">Editar ou adicionar endereço</a>
        </div>
        <form class="form-checkout" method="POST" action="">
            <input type="hidden" name="bookId" value="<?= $bookId ?>">
            <input type="hidden" name="userId" value="<?= $userId ?>">
            <input type="hidden" name="price" value="<?= $price ?>">
            <input type="hidden" name="saleDate" value="<?= $saleDate ?>">
            <input type="submit" id="submit-button" value="Finalizar compra">
        </form>
    </div>
    <script src="../js/checkout.js"></script>
    <?php include 'footer.php'; ?>
</body>
</html>
