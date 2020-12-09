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

    <script src="../js/limitAlertBookings.js"></script>
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
	</div>
    <!-----------------------------------------------FIN MENU----------------------------------------->
    	<!-----------------------------------------------INICIO BANNER----------------------------------------->
        <div id="banner-3" class="banner-3 full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                        <h4 class="h4-filtro">Número de la Sala</h4>
                            
                        <div class="div-filtro-mesas">

                            <form action="" method="POST" class="formulario-filtro">

                                <select name="ubicacion" id="ubicacion" class="selecc-filtro">
                                    <option value="">Numero de sala</option>
                                    <option value="1">Sala 1</option>
                                    <option value="2">Sala 2</option>
                                    <option value="3">Sala 3</option>
                                </select>                                          
                                <select name="num_mesas" id="num_mesas" class="selecc-filtro">
                                    <option value="">Numero de mesa</option>
                                    <option value="1">Mesa 1</option>
                                    <option value="2">Mesa 2</option>
                                    <option value="3">Mesa 3</option>
                                    <option value="4">Mesa 4</option>
                                    <option value="5">Mesa 5</option>
                                    <option value="6">Mesa 6</option>
                                    <option value="7">Mesa 7</option>
                                    <option value="8">Mesa 8</option>
                                    <option value="9">Mesa 9</option>
                                    <option value="10">Mesa 10</option>
                                    <option value="11">Mesa 11</option>
                                    <option value="12">Mesa 12</option>
                                    <option value="13">Mesa 13</option>
                                    <option value="14">Mesa 14</option>
                                    <option value="15">Mesa 15</option>
                                    <option value="16">Mesa 16</option>
                                    <option value="17">Mesa 17</option>
                                    <option value="18">Mesa 18</option>
                                </select>
                                <input type="submit" value="Buscar" class="boton-filtro">

                            </form>

                            <div id="message"></div>         

                            <div class="div-tabla-filtro-mesas">           
                            <table class="table-filtro">
                                <thead class="thead">
                                    <?php                
                                    require_once './showRooms.php';             
                                ?>
                                </thead>
                            </table>
                                <a href="../controller/reloadFilterRooms.php"><input type="text" class="boton-filtro" value="Cargar todas las reservas"></a>
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