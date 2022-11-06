<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <h1 class="my-cart"><i class="fa fa-shopping-cart"></i> Meu carrinho</h1>
    <section class="cart-content">
        <div class="cart-products">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Produto</th>
                        <th>Qtd</th>
                        <th>Preço</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><a href="#envia-pro-produto"><img src="../img/led-zeppeling-icon.jpg" alt=""></a></th>
                        <td>Livro Led Zeppelin</td>
                        <td>1</td>
                        <td>1 x R$ 199.90</td>
                        <td><a href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                </tbody>
            </table>
            <button id="clear-cart" type="submit">Limpar carrinho</button>
        </div>

        <div class="shipping-discount">
            <div class="discount-coupon">
                <h3>Cupom de desconto:</h3>
                <div>
                    <input type="text" placeholder="Cupom">
                    <button><i class="fa fa-ticket"></i> Aplicar</button>
                </div>
            </div>
            <div class="shipping">
            <h3>Frete e prazos:</h3>
                <div>
                    <input type="text" placeholder="CEP*">
                    <button><i class="fa fa-truck-fast"></i> Calcular</button>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>