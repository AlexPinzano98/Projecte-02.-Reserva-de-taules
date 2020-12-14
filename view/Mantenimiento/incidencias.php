<?php
require_once '../controller/validarConexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Filtro de reservas</title> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form.css">
    
</head>

<body style="	background:url(../img/bg_filtro.jpg) no-repeat center top;
	background-attachment:fixed;
	background-size:cover;
	height:100vh;
	min-height:100%;">

    <!-----------------------------------------------INICIO MENU----------------------------------------->
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
    </div>
    <!-----------------------------------------------FIN MENU----------------------------------------->
    <!-----------------------------------------------INICIO BANNER----------------------------------------->
    <div id="banner-3" class="banner-3 full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h4 class="h4-filtro">Incidencias Restaurante</h4><br><br>
                            <div class="formulario1">
                                <form action="../controller/actualizarIncidencias.php" method="POST" class="form1">
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="id_mesa">Número de la Mesa</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="number" id="id_mesa" name="id_mesa"
                                               min="1" max="18" placeholder="Nº..">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="descrip">Descripción</label>
                                        </div>
                                        <div class="col-75">
                                            <textarea id="descrip" name="descrip" placeholder="Descripción de la incidencia.."
                                                style="height:150px"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="descrip">Disponibilidad</label>
                                        </div>
                                        <div class="col-75">
                                            <textarea id="dispo" name="dispo" placeholder="Escribe si o no.."
                                                style="height:50px"></textarea>
                                        </div>
                                    </div>
                                    <div class="row botonform">
                                        <input type="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                            <div class="div-filtro-mesas">


                                <div class="div-tabla-filtro-mesas">
                                    <table class="table-filtro">
                                        <thead class="thead">
                                            <?php                
                                    require_once './incidenciasTabla.php';             
                                ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------------------------FIN DIV MESAS----------------------------------------->


</body>

</html>