<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="profile-info">
        <span class="profile-circle"><i class="fa fa-user"></i></span>
        <h2><?= $_SESSION['name'] ?></h2>
    </div>

    <div class="profile-content">
        <div class="my-data">
            <span class="profile-circle"><i class="fa fa-user"></i></span>
            <a href="myData.php">Meus dados</a>
        </div>
        <div class="addresses">
            <span class="profile-circle"><i class="fa fa-location-arrow"></i></span>
            <a href="myAddresses.php">Endereços</a>
        </div>
        <div class="delete-account">
            <span class="profile-circle"><i class="fa fa-eraser"></i></span>
            <a href="#">Deletar conta</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>