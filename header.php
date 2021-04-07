<header id = "main-header">
    <img class="header-element" src="img/logo_baguettes_of_iron.jpg" alt="Logo de baguettes of iron">
    <h1 class="header-element">Baguettes of Iron</h1>
    <nav class="header-element">
        <a href="index.php">Inicio</a>
        <a href="forum.php">Foros</a>
        <a href="wiki.php">Wiki</a>
        <a href="store.php">Tienda</a>
        <a href="about.php">Sobre nosotros</a>
        <a href="contact.php">Contacto</a>
    </nav>
    <div id = "user">
        <?php
            if(isValidSession()&&$_SESSION['login']){
                echo('<p class = "header-element"><a href="dashboard.php">'.$_SESSION['username'].'</a></p>');
                echo('<p class = "header-element"><a href="logout.php">Cerrar sesión</a></p>');
            }
            else{
                echo('<p class = "header-element"><a href="login.php">Login</a></p>');
                echo('<p class = "header-element"><a href="registro.php">Registro</a></p>');
            }
        ?>
        <img class = "header-element" src="img/user_placeholder.jpg" alt="Un placeholder para la imagen de usuario">
    </div>
</header>