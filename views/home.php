<?php 

if(!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantinho da leitura</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="products">
        <div class="box-container">
            <form action="" method="post" class="box">
                <img class="image" src="../img/led-zeppeling-icon.jpg" alt="">
                <div class="name">Led Zeppelin</div>
                <div class="price">499.99</div>
                <input type="number" min="1" name="product_quantity" value="1" class="qty">
                <input type="hidden" name="product_name" value="">
                <input type="hidden" name="product_price" value="">
                <input type="hidden" name="product_image" value="">
                <input type="submit" value="Adicionar ao carrinho" name="add_to_cart" class="btn">
             </form>
            <form action="" method="post" class="box">
                <img class="image" src="../img/led-zeppeling-icon.jpg" alt="">
                <div class="name">Led Zeppelin</div>
                <div class="price">499.99</div>
                <input type="number" min="1" name="product_quantity" value="1" class="qty">
                <input type="hidden" name="product_name" value="">
                <input type="hidden" name="product_price" value="">
                <input type="hidden" name="product_image" value="">
                <input type="submit" value="Adicionar ao carrinho" name="add_to_cart" class="btn">
             </form>
            <form action="" method="post" class="box">
                <img class="image" src="../img/led-zeppeling-icon.jpg" alt="">
                <div class="name">Led Zeppelin</div>
                <div class="price">499.99</div>
                <input type="number" min="1" name="product_quantity" value="1" class="qty">
                <input type="hidden" name="product_name" value="">
                <input type="hidden" name="product_price" value="">
                <input type="hidden" name="product_image" value="">
                <input type="submit" value="Adicionar ao carrinho" name="add_to_cart" class="btn">
             </form>
        </div>
    </section>
</body>
</html>