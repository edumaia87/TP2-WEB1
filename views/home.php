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
    <div class="banner">
        <img id="banner-image" src="../img/banner.jpg" alt="">
    </div>
    <section class="products">
        <div class="box-container">
            <img src="../img/led-zeppeling.jpg" alt="Livro Led Zeppelin">
            <p>Led Zeppelin</p>
            <p id="price">R$ 199.90</p>
            <button>Comprar</button>
        </div>
        <div class="box-container">
            <img src="../img/led-zeppeling.jpg" alt="Livro Led Zeppelin">
            <p>Led Zeppelin</p>
            <p id="price">R$ 199.90</p>
            <button>Comprar</button>
        </div>
        <div class="box-container">
            <img src="../img/led-zeppeling.jpg" alt="Livro Led Zeppelin">
            <p>Led Zeppelin</p>
            <p id="price">R$ 199.90</p>
            <button>Comprar</button>
        </div>
        <div class="box-container">
            <img src="../img/led-zeppeling.jpg" alt="Livro Led Zeppelin">
            <p>Led Zeppelin</p>
            <p id="price">R$ 199.90</p>
            <button>Comprar</button>
        </div>
    </section>

    <footer>
        <div class="footer"></div>
    </footer>
</body>
</html>