<?php
    session_start();

    require_once "../DAO/DAOCart.php";
    $daoCart = new DAOCart();
    $listCart = [];
    $listCart = $daoCart->searchCart($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <h1 id="my-cart"><i class="fa fa-shopping-cart"></i> Meu carrinho</h1>

    <section id="cart-container">
        <form id="checkout" method="POST" action="">
            <div id="products">
                <table>
                    <thead>
                        <tr>
                            <th>Remover</th>
                            <th>Imagem</th>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($listCart as $cart) { //Entender por que tá mostrando mais de um produto.
                        ?>
                        <tr>
                            <td><i class="fa fa-trash"></i></td>
                            <td><img src="<?= $listCart['image'] ?>"></td>
                            <td><?= $listCart['name'] ?></td>
                            <td><?= $listCart['price'] ?></td>
                            <td><input type="number" name="qtd" min="1" value="<?= $listCart['quantity'] ?>" id="qtd-products"></td>
                            <td><?= $listCart['total'] ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="coupon-total">
                <div id="coupon-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Cupom de desconto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input id="coupon-input" type="text" placeholder="Digite seu cupom">
                                    <button id="calculate-coupon">Calcular</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="total-table">
                    <table>
                        <thead>
                            <tr><th colspan="2">Preço</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Preço total</td>
                                <td><?= $listCart['total'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <button id="checkout-button">Finalizar compra</button>
                </div>
            </div>
        </form>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>