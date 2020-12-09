<?php
require_once '../controller/validarConexion.php';
require_once '../services/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
<!-----------------------------------------------INICIO MENU----------------------------------------->
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
                                <div class="session">
                                <?php echo "Welcome: ".$_SESSION['camarero']?>
                                </div>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="../img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#banner">Inicio</a></li>
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
	</div>
	<!-----------------------------------------------FIN MENU----------------------------------------->

	<!-----------------------------------------------INICIO BANNER----------------------------------------->
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                        <h1>Bienvenido a Los Pollos Hermanos<span class="typer" id="some-id" data-delay="200"
                                    data-delim=":" data-words="Friends:Family:Officemates"
                                    data-colors="red"></span><span class="cursor" data-cursorDisplay="_"
                                    data-owner="some-id"></span></h1>
                            <h2>Famoso restaurante de la famosa serie Breaking Bad</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-----------------------------------------------FIN BANNER----------------------------------------->

<!-----------------------------------------------INICIO SALA 1-------------------------------------------->
    <div id="#sala1" class="sala1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> SALA 1. GOLD</h2>
                        <h3>Reserva en la sala premium y ten acceso a un Meet&Greet con el dueño del restaurante</h3><br><br>
                        <?php
                        $query="SELECT COUNT(disponibilidad_mesa) FROM tbl_mesas WHERE id_sala=1 AND disponibilidad_mesa='disponible'";
                        $result = mysqli_query($conexion,$query);
                        $mesa1 = $result->fetch_array()[0] ?? '';
                        $query="SELECT COUNT(tbl_incidencias.dispo) FROM tbl_mesas INNER JOIN tbl_incidencias ON tbl_mesas.id_mesa=tbl_incidencias.id_mesa WHERE tbl_mesas.id_sala=1 AND tbl_incidencias.dispo='no'";
                        $result = mysqli_query($conexion,$query);
                        $mesa2 = $result->fetch_array()[0] ?? '';
                        $mesa = $mesa1 - $mesa2;
                        echo "<h3> MESAS DISPONIBLES: $mesa </h3><br><br>";
                        ?>
						<div class="book-btn">
                            <a href="mostrarMesas.php?id=1" class="table-btn hvr-underline-from-center">Reservar mi mesa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="sala1-imagenes">
                            <img class="sala1" src="../img/sala1.jpg" alt="About Main Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
<!-----------------------------------------------FIN  SALA 1----------------------------------------->

<!-----------------------------------------------INICIO SALA 2----------------------------------------->
<div id="sala2" class="sala2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="sala2-imagenes">
                            <img class="sala2" src="../img/sala2.jpg" alt="About Main Image">
                        </div>
                    </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> SALA 2. SILVER</h2><br>
                        <h3>Reserva en la sala de plata con acceso directo a la barra de mostrador</h3><br><br>
						<?php
                        $query="SELECT COUNT(disponibilidad_mesa) FROM tbl_mesas WHERE id_sala=2 AND disponibilidad_mesa='disponible'";
                        $result = mysqli_query($conexion,$query);
                        $mesa1 = $result->fetch_array()[0] ?? '';
                        $query="SELECT COUNT(tbl_incidencias.dispo) FROM tbl_mesas INNER JOIN tbl_incidencias ON tbl_mesas.id_mesa=tbl_incidencias.id_mesa WHERE tbl_mesas.id_sala=2 AND tbl_incidencias.dispo='no'";
                        $result = mysqli_query($conexion,$query);
                        $mesa2 = $result->fetch_array()[0] ?? '';
                        $mesa = $mesa1 - $mesa2;
                        echo "<h3> MESAS DISPONIBLES: $mesa </h3><br><br>";
                        ?>
                        <div class="book-btn">
                            <a href="mostrarMesas.php?id=2" class="table-btn hvr-underline-from-center">Reservar mi mesa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
<!-----------------------------------------------FIN  SALA 2------------------------------------------>

<!-----------------------------------------------INICIO SALA 3----------------------------------------->
<div id="sala3" class="sala1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> SALA 3. BRONZE</h2>
                        <h3>Reserva mesa en nuestra sala de bronce. Más alejada, si, pero más tranquila</h3><br><br>
						<?php
                        $query="SELECT COUNT(disponibilidad_mesa) FROM tbl_mesas WHERE id_sala=3 AND disponibilidad_mesa='disponible'";
                        $result = mysqli_query($conexion,$query);
                        $mesa1 = $result->fetch_array()[0] ?? '';
                        $query="SELECT COUNT(tbl_incidencias.dispo) FROM tbl_mesas INNER JOIN tbl_incidencias ON tbl_mesas.id_mesa=tbl_incidencias.id_mesa WHERE tbl_mesas.id_sala=3 AND tbl_incidencias.dispo='no'";
                        $result = mysqli_query($conexion,$query);
                        $mesa2 = $result->fetch_array()[0] ?? '';
                        $mesa = $mesa1 - $mesa2;
                        echo "<h3> MESAS DISPONIBLES: $mesa </h3><br><br>";
                        ?>
                        <div class="book-btn">
                            <a href="mostrarMesas.php?id=3" class="table-btn hvr-underline-from-center">Reservar mi mesa</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="sala1-imagenes">
                            <img class="sala1" src="../img/sala3.jpg" alt="About Main Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
<!-----------------------------------------------FIN  SALA 3----------------------------------------->
    <a href="#" class="scrollup" style="display: none;">Scroll</a>
</body>
</html>