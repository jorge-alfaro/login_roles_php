<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url ?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url ?>assets/adminlte/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css">

</head>

<body>
    <div id="Bloque_container">

        <!-- CABECERA-->
        <header id="header">
            <div id="logo">
                <!-- <img src="<?= base_url ?>assets/img/R.jpg" alt="">
                <a href="<?= base_url ?>user/index">
                    Inicio
                </a> -->
            </div>
        </header>

        <!--MENU-->
        <nav id="menu">
            <ul>
                <?php if (isset($_SESSION['usuario'])) : ?>
                    <li><a href="<?= base_url ?>inicio/user">USUARIO</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['profesor'])) : ?>
                    <li><a href="<?= base_url ?>inicio/profesor">PROFESOR</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['admin'])) : ?>
                    <li><a href="<?= base_url ?>inicio/admin">ADMINISTRADOR</a></li>
                <?php endif; ?>

                <?php if (!isset($_SESSION['identity'])) : ?>
                    <li class="ingreso"><a href="<?= base_url ?>user/vistalogin">Login</a></li>
                <?php endif; ?>
                <li class="menu-button"><a href="<?= base_url ?>user/img1">Work</a></li>
                <li class="menu-button"><a href="<?= base_url ?>user/img2">Pending tasks</a></li>
                <li class="menu-button"><a href="<?= base_url ?>user/img3">About</a></li>
                <li class="menu-button"><a href="<?= base_url ?>user/img4">Help</a></li>

                <?php if (isset($_SESSION['admin'])) : ?>
                    <li><a href="<?= base_url ?>user/img5">imagen 5</a></li>
                <?php endif; ?>
            </ul>
        </nav>

        <div id="Contenido-info">