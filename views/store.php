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
                require_once('../DAO/DAOBook.php');
                $daoBook = new DaoBook();
                $listBook = $daoBook->listBook();
                foreach($listBook as $book) {
                    echo '<div class="box-container">';
                        echo '<img src="'. $book['image'] . '">';
                        echo "<p>" . $book['title'] . "</p>";
                        echo '<p id="price">R$' . $book['price'] . '</p>';
                        echo '<button>Comprar</button>';
                    echo '</div>';
                }
            ?>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>