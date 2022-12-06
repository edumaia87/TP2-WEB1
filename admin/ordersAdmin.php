<?php
require_once ('../DAO/DAOUser.php');
require_once ('../DAO/DAOBuys.php');

$daoOrders = new DAOBuys();
$listOrders = $daoOrders->seearchAllOrders(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'headerAdmin.php'; ?>
    <div class="orders">
        <table>
            <caption><i class="fa fa-cart-arrow-down"></i> Lista de Pedidos</caption>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Nome do cliente</th>
                <th>CPF do cliente</th>
            </tr>
            <?php
            foreach($listOrders as $orders) { 
            ?>
            <tr>
                <td><?= $listOrders['title'] ?></td>
                <td><?= $listOrders['price'] ?></td>
                <td><?= $listOrders['sale_date'] ?></td>
                <td><?= $listOrders['name'] ?></td>
                <td><?= $listOrders['cpf'] ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>
</body>
</html>