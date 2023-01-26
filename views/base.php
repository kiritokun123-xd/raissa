<!-- <?php
    if(!isset($_SESSION)){
        session_start();
    }

    $autenticado = $_SESSION['login'] ?? null;

    if(!isset($inicio)){
        $inicio = false;
    }
?> -->
<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <!--===BOX ICONS===-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="../build/css/app4.css">
<body id="body-pd" >
    
    <header class="header" id="header">
        <div class="header__toogle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <div class="header__img">
            <img src="../imagenes/perfil.png" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon' ></i>
                    <span class="nav__logo-name">RAISSAMOTOR'S</span>
                </a>
            </div>

            <div class="nav__list">
                <a href="#" class="nav__link active">
                    <i class="bx bx-grid-alt nav__icon"></i>
                    <span class="nav__name">Dashboard</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-user nav__icon'></i>
                    <span class="nav__name">Usuarios</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-message-square-detail nav__icon'></i>
                    <span class="nav__name">Pedidos</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-bookmark nav__icon'></i>
                    <span class="nav__name">Cotizaciones</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-folder nav__icon'></i>
                    <span class="nav__name">Almacen</span>
                </a>
                
                <a href="#" class="nav__link">
                    <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
                    <span class="nav__name">Proveedores</span>
                </a>
            </div>

            <a href="#" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Salir</span>
            </a>
        </nav>
    </div>
    <?php echo $contenido; ?>

    

    <script src="../build/js/bundle3.min.js"></script>
</body>
</html>