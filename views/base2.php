
<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raissa Motor's</title>
    <link rel="icon" href="../imagenes/icono.ico">
    <!--===BOX ICONS===-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="../build/css/app6.css">
    <!--==SWEET ALERT-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="sweetalert2.all.min.js"></script> -->

    <script src="../build/js/bundle3.min.js"></script>
    <script src="../build/js/jquery-3.6.0.min.js"></script>
    <!--====CHARTJS===-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script >
        $(document).ready(function(){
            functionsAjax()
            
        })
        
    </script>

</head>
<body id="content">
    
    <div class="flex">
       <ul class="navbar-nav ocultar" id="navbar-nav">
            <a href="/dashboard" class="sidebar-brand">
                <div class="sidebar-brand-icon">
                    <img class="logo" src="../imagenes/logo.png" alt="">
                </div>
                <div class="sidebar-brand-text">
                    RAISSAMOTOR'S
                </div>
            </a>

            <hr class="siderbar-divider my-0">

            <li class="nav-item ">
                <a href="/dashboard" class="nav-link">
                    <i class='bx bxs-dashboard bx-icon'></i>
                    <span class="span">Dashboard</span>
                </a>
            </li>

            <li class="nav-item not-visible" <?php echo (noTienePermiso(1,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="" class="nav-link navlink"  data-paso="0">
                    <i class='bx bx-cart-alt bx-icon'></i>
                    <span class="span">Indicadores</span>
                    <i class='bx bxs-right-arrow bx-arrow'></i>
                </a>

                <div class="nav-caja t-2 caja-query" >
                    <div class="nav-caja-items">
                        <h6>Indicadores de:</h6>
                        <a href="/indicador/rot-mercancia">Rotación Mercancia</a>
                        <a href="/indicador/cost-uni-alma">C/U almacenada</a>
                    </div>
                </div>
            </li>

            <hr class="siderbar-divider">

            <div class="sidebar-heading" <?php echo (noTienePermiso(1,$arrayPermisos))? 'style="display: none"': ''; ?>>Logística</div>

            <li class="nav-item" <?php echo (noTienePermiso(1,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="" class="nav-link navlink"  data-paso="1">
                    <i class='bx bx-cart-alt bx-icon'></i>
                    <span class="span">Inventario General</span>
                    <i class='bx bxs-right-arrow bx-arrow'></i>
                </a>

                <div class="nav-caja t-3 caja-query" >
                    <div class="nav-caja-items">
                        <h6>Artículos y Motos:</h6>
                        <a href="/logistica/inventario-articulos">Inventario Artículos</a>
                        <a href="/logistica/inventario-motos">Inventario Motos</a>
                        <a href="/logistica/inventario-placas">Inventario Placas</a>
                    </div>
                </div>
            </li>

            <li class="nav-item" <?php echo (noTienePermiso(2,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="" class="nav-link navlink"  data-paso="2">
                    <i class='bx bx-cart-alt bx-icon'></i>
                    <span class="span">Gestionar Pedidos</span>
                    <i class='bx bxs-right-arrow bx-arrow'></i>
                </a>

                <div class="nav-caja t-4 caja-query" >
                    <div class="nav-caja-items">
                        <h6>Gestionar:</h6>
                        <a href="/logistica/pedido">Trimotos</a>
                        <a href="/logistica/pedidoE">Estructuras</a>
                        <a href="/logistica/pedidoTS">Tapiz Simple</a>
                        <a href="/logistica/pedidoT">Tapiz Hard</a>
                    </div>
                </div>
            </li>

            <li class="nav-item" <?php echo (noTienePermiso(2,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="/logistica/serie" class="nav-link">
                    <i class='bx  bxs-keyboard bx-icon'></i>
                    <span class="span">Series</span>
                </a> 
            </li>

            <li class="nav-item" <?php echo (noTienePermiso(2,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="/logistica/motor" class="nav-link">
                    <i class='bx  bx-chip bx-icon'></i>
                    <span class="span">Motores</span>
                </a> 
            </li>

            <li class="nav-item" <?php echo (noTienePermiso(2,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="/logistica/contrato" class="nav-link">
                    <i class='bx bxs-book bx-icon'></i>
                    <span class="span">Contratos</span>
                </a> 
            </li>

            <hr class="siderbar-divider">
            

            <div class="sidebar-heading" <?php echo (noTienePermiso(3,$arrayPermisos))? 'style="display: none"': ''; ?>>Almacén Tienda</div>

            <li class="nav-item" <?php echo (noTienePermiso(3,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="/tienda/inventario" class="nav-link">
                    <i class='bx bxs-store-alt bx-icon'></i>
                    <span class="span">Inventario</span>
                </a> 
            </li>
            
            <hr class="siderbar-divider ">

            <div class="sidebar-heading" <?php echo (noTienePermiso(3,$arrayPermisos))? 'style="display: none"': ''; ?>>Almacén Ensamblaje</div>

            <li class="nav-item" <?php echo (noTienePermiso(3,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="/ensamblaje/inventario" class="nav-link">
                    <i class='bx bxs-store-alt bx-icon'></i>
                    <span class="span">Inventario</span>
                </a> 
            </li>

            <hr class="siderbar-divider">

            <div class="sidebar-heading" <?php echo (noTienePermiso(3,$arrayPermisos))? 'style="display: none"': ''; ?>>Almacén Soldadura</div>

            <li class="nav-item" <?php echo (noTienePermiso(3,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="/soldadura/inventario" class="nav-link">
                    <i class='bx bxs-store-alt bx-icon'></i>
                    <span class="span">Inventario</span>
                </a> 
            </li>
            
            <hr class="siderbar-divider">

            <li class="nav-item" <?php echo (noTienePermiso(4,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="" class="nav-link navlink"  data-paso="3">
                    <i class='bx bx-laptop bx-icon'></i>
                    <span class="span">Administrar Página</span>
                    <i class='bx bxs-right-arrow bx-arrow'></i>
                </a>

                <div class="nav-caja t-3 caja-query" >
                    <div class="nav-caja-items">
                        <h6>Gestionar:</h6>
                        <a href="/administrar/motocicletas">Motocicletas</a>
                        <a href="/administrar/mototaxis">Mototaxis</a>
                        <a href="/administrar/cargueros">Cargueros</a>
                    </div>
                </div>
            </li>
            
            <hr class="siderbar-divider">

            <li class="nav-item" <?php echo (noTienePermiso(1,$arrayPermisos))? 'style="display: none"': ''; ?>>
                <a href="/acceso/usuario" class="nav-link">
                    <i class='bx bx-user bx-icon'></i>
                    <span class="span">Accesos y Usuarios</span>
                </a>
            </li>

            <hr class="siderbar-divider">

            <div class="lateral" >
                <i class='bx bx-arrow-from-right' id="lateral"></i>
            </div>
       </ul> <!--FIN NAVBAR-->

       <div class="contenedor" > <!--INCIO CONTENIDO-->

           <header class="header">
                <nav class="navbar">
                    <button id="menu" class="menu">
                        <i class='bx bx-menu'></i>
                    </button>
                    <ul class="navbar-ul">
                        <li class="nav-item-li">
                            <a href="" class="nav-link-li" id="nav-mensaje">
                                <i class='bx bxs-message-alt-detail bx-nav-icon'></i>
                                <span class="span-li">3</span>
                            </a>
                            <div class="mensajes" id="mensajes">
                                <h6>Centro de Mensaje</h6>
                                <a href="" class="mensaje-flex">
                                    <img src="/imagenes/autor.svg" alt="">
                                    <div class="info-mensajes">
                                        <div class="texto-truncado">Hola que tal! Te hablo para informarte sobre el pedido de....</div>
                                        <div class="autor">Angel</div>
                                    </div>
                                </a>
                                <a href="" class="mensaje-flex">
                                    <img src="/imagenes/autor2.svg" alt="">
                                    <div class="info-mensajes">
                                        <div class="texto-truncado">Hola Angel! Puedes revisar el pedido del señor...</div>
                                        <div class="autor">Raissa</div>
                                    </div>
                                </a>
                                <a href="" class="mensaje-flex">
                                    <img src="/imagenes/autor3.svg" alt="">
                                    <div class="info-mensajes">
                                        <div class="texto-truncado">Que tal! Tengo un pedido para entregar hoy a las ...</div>
                                        <div class="autor">Rene</div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <div class="bloque-nav"></div>
                        <li class="nav-item-li">
                            <a href="" id="nav-link-li" class="nav-link-li">
                                <span class="name-link"><?php echo $nick ?></span>
                                <img src="/imagenes/perfil.svg" class="img-perfil" alt="imagen del perfil">
                            </a>    
                            <div class="caja-perfil" id="caja-perfil">
                                <a href class="perfil-item">
                                    <i class='bx bxs-user'></i>
                                    <span>Perfil</span>
                                </a>
                                <a href class="perfil-item">
                                    <i class='bx bxs-wrench'></i>
                                    <span>Ajustes</span>
                                </a>
                                <a href class="perfil-item">
                                    <i class='bx bx-list-ul'></i>
                                    <span>Actividad</span>
                                </a>
                                
                                <div class="divider-perfil"></div>

                                <a href="/logout" class="perfil-item">
                                    <i class='bx bx-log-out'></i>   
                                    <span>Salir</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>


            <?php echo $contenido; ?>


       </div>
    </div>


    

    
</body>
</html>