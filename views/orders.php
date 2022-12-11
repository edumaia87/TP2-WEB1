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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                <th>Cancelar pedido</th>
            </tr>
            <tr>
                <?php
                foreach($listBuys as $sale) { 
                ?>
                <tr>
                    <td><?= $sale['title'] ?></td>
                    <td><?= $sale['price'] ?></td>
                    <td><?= $sale['sale_date'] ?></td>d
                    <td>
                        <form class="cancel-order" method="POST" action="cancelOrder.php">
                            <input type="hidden" name="id" value="<?= $sale['id'] ?>">
                            <button type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
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