<!-- <?php 
    session_start();
?>  -->

<header class="header">
    <div class="header-1">
        <a href="home.php" class="logo"> <i class="fas fa-book"></i> Cantinho da Leitura</a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="O que você procura?" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <ul id="user-options">
                <li>
                    <?php 
                        if(isset($_SESSION['name'])) {
                            echo "<p>Bem vindo(a), " . $_SESSION['name'] . "</p>";
                            echo '<ul id="sub-menu">';
                                echo '<li><a href="editUser.php">Meu perfil</a></li>';
                                echo '<li><a href="logout.php">Logout</a></li>';
                            echo '</ul>';
                        } else {
                            echo '<a href="login.php" class="fas fa-user"></a>';
                        }  
                    ?>
                </li>
            </ul>
        </div>
    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="about.php">Sobre</a>
            <a href="store.php">Loja</a>
            <a href="contact.php">Contato</a>
            <a href="orders.php">Pedidos</a>
        </nav>
    </div>
</header>