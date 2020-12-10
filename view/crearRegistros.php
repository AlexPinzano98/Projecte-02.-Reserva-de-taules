<?php
require_once '../controller/validarConexion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROJECTE 1 | RESERVA DE TAULES</title>
	<!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">

    <script src="../js/changeImg.js"></script>
</head>
<body id="site-header" style="	background:url(../img/pollo.gif) no-repeat center top;
	background-attachment:fixed;
	background-size:cover;
	height:100vh;
	min-height:100%;">
	<div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                    <img src="../img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="home.php">Inicio</a></li>
                                    <li><a href="filterBookings.php">Filtrar Mesa</a></li>
                                    <li><a href="incidencias.php">Incidencias</a></li>
                                    <li><a href="../services/logOut.php">Cerrar Sesion</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
	</div><br><br><br><br>
	<!-----------------------------------------------FIN MENU----------------------------------------->

	<!-----------------------------------------------INICIO BANNER----------------------------------------->
    <!-- Para los registros hacer un modal para crear uno
        Tambien mostrar todos los usuarios con boton de eliminar y de modificar
        La opcion de modificar abre otro modal
     -->
    <div style="text-align: center; color: white;">
        <h1>CREAR REGISTRO</h1>
        <form action="../controller/registrarController.php" method="POST" class="formulario" id="formulario" onsubmit="return validacionForm()">
        <div>	<!-- Campo: NOM -->
            <label for="nom">Nombre</label>
            <div>
            <input type="text" name="name" id="name" placeholder="Nombre...">
            </div>
        </div>
        <div>	<!-- Campo: EMAIL -->
            <label for="correo">Email</label>
            <div>
            <input type="text" name="email" id="email" placeholder="Email...">
            </div>
        </div>
        <div>	<!-- Campo: PASSWORD 1 -->
            <label for="passwd">Password</label>
            <div>
            <input type="password" name="password" id="password">
            </div>
        </div>
        <div>	<!-- Campo: PASSWORD 2 -->
            <label for="passwd2">Password 2</label>
            <div>
            <input type="password" name="password2" id="password2">
            </div>
        </div>
       
        <div> <!-- Boton de enviar -->
            <button type="submit">Enviar</button>
        </div>
        </form>
    </div>
<!-----------------------------------------------FIN DIV MESAS----------------------------------------->

</body>
</html>