<header id = "main-header">

    <!-- <ul class="nav">
            <li><a href="index.php">
                     Home  
                    </a></li>
            <li><a href="#">
                 About   
                </a></li>
            <li><a href="#">
                  Services   
                </a></li>
            <li><a href="#">
                 Portfolio   
                </a></li>
            <li><a href="#">
             Contact   
             </a></li>
    </ul> -->

    <img class="header-element logo" src="img/logo_baguettes_of_iron.jpg" alt="Logo de baguettes of iron">
    <h1 class="header-element">Baguettes of Iron</h1>
    <nav class="header-element">
        <a href="index.php">Inicio</a>
        <a href="forum.php?pag=1">Foros</a>
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