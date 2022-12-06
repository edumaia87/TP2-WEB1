<?php
session_start();
$userId =  $_SESSION['id'];

require_once ('../DAO/DAOBuys.php');
$daoBuys = new DAOBuys();
$listBuys = $daoBuys->searchOrders($userId);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="order-table">
        <table>
            <caption>Lista de Pedidos</caption>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
            <tr>
                <?php
                foreach($listBuys as $sale) { 
                ?>
                <tr>
                    <td><?= $sale['title'] ?></td>
                    <td><?= $sale['price'] ?></td>
                    <td><?= $sale['sale_date'] ?></td>
                </tr>
                <?php 
                }
                ?>
            </tr>
        </table>
    </div>

    </table>
    <?php include 'footer.php'; ?>
</body>
</html>