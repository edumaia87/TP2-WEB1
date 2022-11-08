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
    
    <h1 class="my-cart"><i class="fa fa-shopping-cart"></i> Meu carrinho</h1>

    <section id="cart-container">
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
                    <tr>
                        <td><i class="fa fa-trash"></i></td>
                        <td><img src="../img/led-zeppeling.jpg"></td>
                        <td>Led Zeppelin</td>
                        <td>RS$199.99</td>
                        <td><input type="number" name="qtd" value="1" id="qtd-products"></td>
                        <td>RS$199.99</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="coupon-total">
            <div id="coupon-table">
                <table>
                    <thead>
                        <tr>
                            <td>Cupom de desconto</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" placeholder="Digite seu cupom">
                                <button>Calcular</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="total-table">
                <table>
                    <thead>
                        <tr><th colspan="2">Preço total</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td>199.99</td>
                        </tr>
                        <tr>
                            <td>Frete</td>
                            <td>29.99</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
</body>
</html>