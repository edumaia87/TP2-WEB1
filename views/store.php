<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

        <main>
        <h2>Nossa loja</h2>
        <section class="products">
            <?php
                if(!isset($_SESSION)) {
                    session_start();
                    $userId = $_SESSION['id'];
                }
                
                require_once('../DAO/DAOBook.php');
                $daoBook = new DaoBook();
                $listBook = $daoBook->listBook();

            
                $date = date('y-m-d');
                
                foreach($listBook as $book) {
            ?>
                    <div class="box-container">
                        <form method="POST" action="./checkoutPage.php">
                        <input type="hidden" name="bookId" value="<?= $book['id'] ?>">
                        <input type="hidden" name="userId" value="<?= $userId ?>">
                        <input type="hidden" name="price" value="<?= $book['price'] ?>">
                        <input type="hidden" name="saleDate" value="<?= $date ?>">
                        <img src="<?= $book['image'] ?>">
                        <p><?= $book['title'] ?></p>
                        <p id="price">R$ <?= $book['price'] ?></p>
                        <button id="submit-button" type="submit">Comprar</button>
                    </div>
            <?php
                }
            ?>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>