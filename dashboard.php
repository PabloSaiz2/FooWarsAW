<?php
   $tituloPagina = 'Baguettes of Iron - Dashboard';
   $contenido=<<<EOF
     
          
      
      <h1 style="text-align:center;margin:10px">Pantalla de Administrador</h1>
      <div class="container-admin">

            <div class="row">
                  <div class="col-s6">
                        <div style="padding: 35px;" align="center" class="card">
                              <div class="row">
                                    <div class="left card-title">
                                          <b>Usuarios</b>
                                    </div>
                              </div>

                              <div class="row">
                                    <a href="adminAddUser.php">
                                          <div style="padding: 30px;" class="col-s5 ">
                                                <i class="fas fa-user-plus"></i>
                                                <span ><h5>Añadir</h5></span>
                                          </div>
                                    </a>
                                    <div class="col s1">&nbsp;</div>
                                    <div class="col s1">&nbsp;</div>

                                    <a href="adminModifyUser.php">
                                          <div style="padding: 30px;" class="col-s5">
                                                <i class="fas fa-user-cog" ></i>      
                                                <span ><h5>Modificar </h5></span>
                                          </div>
                                    </a>
                              </div>
                        </div>
                  </div>

                  <div class="col-s6">
                        <div style="padding: 35px;" align="center" class="card">
                              <div class="row">
                                    <div class="left card-title">
                                          <b>Productos</b>
                                    </div>
                              </div>
                              <div class="row">
                                    <a href="insert.php">
                                          <div style="padding: 30px;" class=col-s5">
                                                <i class="fas fa-cart-plus"></i>
                                                <span ><h5>Añadir</h5></span>
                                          </div>
                                    </a>

                                    <div class="col s1">&nbsp;</div>
                                    <div class="col s1">&nbsp;</div>

                                    <a href="#!">
                                          <div style="padding: 30px;" class="col-s5 ">
                                                <i class="fas fa-cart-arrow-down"></i>
                                                <span ><h5>Eliminar</h5></span>
                                          </div>
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>
      </div>        
    EOF;
    require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
    require_once('includes/logincheck.php');