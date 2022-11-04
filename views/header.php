<header class="header">
    <div class="header-1">
        <a href="#home.php" class="logo"> <i class="fas fa-book"></i> Cantinho da Leitura</a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="O que você procura?" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="login-btn">
                <!-- <ul id="user-options">
                    <li>
                        <?php 
                            if(isset($_SESSION)) {
                                echo"<p>Bem vindo, </p>"; 
                                echo  $_SESSION['email.'];
                            } else {
                                session_abort();
                            }
                        ?>
                        <p><a href="logout.php">Sair</a></p>
                        <ul>
                            <li>Editar perfil</li>
                            <li>logout</li>
                        </ul>
                    </li>
                </ul> -->
            </div>
            <a href="cart.php" class="fas fa-shopping-cart"></a>

        </div>
    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#about.php">Sobre</a>
            <a href="#store.php">Loja</a>
            <a href="#contact.php">Contato</a>
            <a href="#orders.php">Pedidos</a>
        </nav>
    </div>
</header>

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>