<?php  
session_start();
if (!isset($_SESSION['camarero'])){
    header('Location: ../../index.php');
} else {
    require_once "../../controller/searchReserva.php";
}

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

	<link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/projecte2.css">

</head>
<body id="site-header" style="	background:url(../../img/pollo.gif) no-repeat center top;
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
                                    <img src="../../img/logo.png" alt="">
                                    </a> 
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="buscarReserva.php">Buscar reserva</a></li>
                                    <li><a href="home.php">HOME</a></li>
                                    <li><a href="filterBookings.php">Filtrar Mesa</a></li>
                                    <li><a href="../../services/logOut.php">Cerrar Sesion</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
	</div>
	<!-----------------------------------------------FIN MENU----------------------------------------->

	<!-----------------------------------------------INICIO RESERVAS----------------------------------------->
    <div> 
        <div class="fecha-busq">
            <p>Dia: <?php echo $fecha ?></p>
            <p>Capacidad: <?php echo $capacidad ?></p>
            <p>Hora: <?php echo $hora ?></p>
            <p>Sala: <?php echo $sala ?></p>
            <h1>MESAS DISPONIBLES</h1>
        </div>

    <?php
    foreach ($mesas as $mesa) {
    $id = $mesa['id_mesa'];
    // Comprobar por cada mesa si existe reserva
    $query = "SELECT * FROM tbl_reservas 
    WHERE dia_reserva = '$fecha'
    AND id_mesa = '$id'
    AND hora_entrada_reserva = '$hora' ";

    $sentencia = $pdo->prepare($query);
    $sentencia->execute();
    $reservas = $sentencia->rowCount(); 

    // Comprovamos si no existen reservas
    if ($reservas == 0) {    ?>
    <div class='three-column'>
        <form action='../../controller/hacerReserva.php' method='POST'>
            <p>ID mesa: <?php echo $mesa['id_mesa'] ?>  </p>
            <p>Capacidad: <?php echo $mesa['num_sillas_mesa'] ?> </p>
            <img src="../../img/mesa1.png" style="width: 15%;" /> <br><br>
            <input id='fecha' name='fecha' type='hidden' value='<?php echo $fecha ?>'> 
            <input id='hora' name='hora' type='hidden' value='<?php echo $hora ?>'> 
            <input id='id_mesa' name='id_mesa' type='hidden' value='<?php echo $mesa['id_mesa'] ?>'>     
            <button type='submit'>RESERVAR</button>
        </form>
    </div>
    <?php } 
    }
    ?> 
    </div>
<!-----------------------------------------------FIN DIV MESAS----------------------------------------->

</body>
</html>