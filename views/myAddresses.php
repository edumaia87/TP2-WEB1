<?php
require_once ('../DAO/DAOAddress.php');
if(!isset($_SESSION)) {
    session_start();
}
$id = $_SESSION['id'];

$dao = new DaoAddress();
$data = $dao->listAddress($id);

foreach($data as $address) {
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereços</title>
</head>
<body>
    <?php include 'header.php' ?>

    <div class="data-content">
        <h2>Meus dados</h2>
        <h3>Dados da conta</h3>
        <div class="address-data">
            <?php
                if($data != null) {
                    echo '<div class="data">';
                        echo "<p>Rua:" . $address['street'] . "</p>";
                    echo '</div>';
                    echo '<div class="data">';
                        echo "<p>Bairro:" . $address['district'] . "</p>";
                    echo '</div>';
                    echo '<div class="data">';
                        echo "<p>Número:" . $address['number'] . "</p>";
                    echo "</div>";
                    echo '<div class="data">';
                        echo "<p>Cidade:" . $address['city'] . "</p>";
                    echo "</div>";
                    echo '<div class="data">';
                        echo "<p>Estado:" . $address['state'] . "</p>";
                    echo "</div>";
                } else {
                    echo "<h2>Parece que você não tem endereço cadastrado</h2>";
                    echo '<a href="addAddress.php" id="edit-data">Adicionar endereço</a>';
                }
            ?>
        </div>
        <div class="actions">
            <a href="editAddress.php" id="edit-data">Editar dados</a>
            <form class="delete-address" method="POST" action="deleteAddress.php">
                <input type="hidden" name="id" value="<?= $address['id'] ?>">
                <input type="submit" id="delete-data" value="Deletar endereço">
            </form>
            <a href="editUser.php" id="edit-data">Voltar</a>
        </div>
    </div>

    <?php include 'footer.php' ?>
</body>
</html>