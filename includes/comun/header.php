

<div class="header-app row">
    <div class="header-izda">
        <img class="header-element logo" src="img/logo_baguettes_of_iron.jpg" alt="Logo de baguettes of iron"></li>
    </div>
    <div class="header-izda">
        <h1>Baguettes of Iron</h1></li>        
    </div>
    <div id="header">
                <ul class="nav">
                     
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="forum.php?pag=1">Foro </a></li>
                    <li><a href="wiki.php">Wiki </a></li>
                    <li><a href="store.php">Tienda</a></li>
                    <li><a href="about.php">Sobre Nosotros</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                    <?php
                if(isValidSession()&&$_SESSION['login']){
                    ?>
                    <li><a href="dashboard.php">  <?php echo $_SESSION['username'].' ' ?><i class="fas fa-user"></i></a>
                        <ul>
                            <?php
                                if($_SESSION['rol']==1){
                                ?>
                                    <!-- <li><a class="text-center" href="dashboard.php"> <i class="fas fa-terminal"></i> Admin</a>
                                    <li><a class="text-center" href="dashboard.php"> <i class="fas fa-eye"></i> Admin</a> -->
                                    <li><a class="text-center" href="dashboard.php"> <i class="fas fa-desktop"></i> Admin</a>
                                        <!-- <ul>
                                            <li><a href="dashboard.php">Admin</a></li>
                                           
                                        </ul> -->
                                    </li>
                                <?php
                                }
                            ?>
                            
    
    
                            <li><a href="includes/logout.php"> Cerrar Sesion</a></li>
                        </ul>
                    </li>
                    <?php
                }
                else{
                    ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registro.php">Registro</a></li>
                    <?php
    
                }
                ?>
    
        </div>
      
       

</div>