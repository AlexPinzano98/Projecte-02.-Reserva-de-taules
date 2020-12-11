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
    <div style="text-align: center; color: black;">
        <h1>CREAR REGISTRO</h1>
        <form action="../controller/registrarReservaController.php" method="POST" class="formulario" id="formulario" onsubmit="return validacionForm()">
        <div>	<!-- Campo: FECHA -->
            <label for="fecha">Fecha</label>
            <div>
            <input type="date" name="fecha" id="fecha">
            </div>
        </div>
        <div>	<!-- Campo: Nº PERSONAS -->
            <label for="num">Nº PERSONAS</label>
            <div>
            <input type="number" name="capacidad" id="capacidad" max="6" min="1">
            </div>
        </div>
        <div>	<!-- Campo: Hora -->
            <label for="hora">Hora de la reserva</label>
            <div>
            <select name="hora">
                <option value="12:00" selected>12:00</option> 
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="20:00">20:00</option> 
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
                <option value="23:00">23:00</option>
            </select>
            </div>
        </div>
        <div>	<!-- Campo: Sala -->
            <label for="sala">Sala</label>
            <div>
            <select name="sala">
                <option value="1" selected>1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
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