<?php 
    // session_start();

    require_once('../DAO/DAOBook.php');

    $daoBook = new DaoBook();
    $listBook = $daoBook->listBook();
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
    <main>
        <div class="banner">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button>Ver mais</button>
        </div>
        <h2>Produtos em destaque</h2>
        <section class="products">
            <?php
            foreach($listBook as $book) {
            ?>
                <div class="box-container">
                    <form id="formAddCart" method="POST" action="">
                        <input type="hidden" name="image" value="<?= $book['image']?>">
                        <input type="hidden" name="title" value="<?= $book['title']?>">
                        <input type="hidden" name="price" value="<?= $book['price']?>">
                        <img name="image" src="<?= $book['image'] ?>">
                        <p id="title" name="title"><?= $book['title'] ?></p>
                        <p id="price" name="price">R$ <?=$book['price']?></p>
                        <button id="buttonBuy" type="submit">Comprar</button>
                    </form>
                </div>
            <?php
            }
            ?>
        </section>
    </main>
    
    <?php include 'footer.php' ?>

    <script src="../js/addToCart.js"></script>
</body>
</html>