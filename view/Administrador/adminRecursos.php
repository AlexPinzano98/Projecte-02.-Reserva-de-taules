<?php
require_once "../../controller/recuperarSalas.php";
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

    <script src="../../js/modal.js"></script>
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
                                    <li><a href="adminHome.php">HOME</a></li>
                                    <li><a href="adminRegistros.php">REGISTROS</a></li>
                                    <li><a href="adminRecursos.php">RECURSOS</a></li>
                                    <li><a href="../../services/logOut.php">Cerrar Sesion</a></li>
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
    <div style="text-align: center; color: black;">
        <h1>ADMINISTRAR RECURSOS</h1>
        <button class="new-sala" onclick="abrirModal()">New Sala</button>

        <?php 
        foreach ($salas as $sala) { ?>
        <div style="border: 2px black solid;">
            <p>ID: <b><?php echo $sala['id_sala'];?></b></p>
            <p>NUM MESAS: <b><?php echo $sala['num_mesas']?></b></p>
            <p>NUM SILLAS: <b><?php echo $sala['num_sillas']?></b></p>
            <form action="../../controller/delSala.php" method="POST">
                <input type="hidden" name="id_sala" value="<?php echo $sala['id_sala']?>">
                <button class="delete">Eliminar</button>
            </form>
            <form action="./adminRecursosMesas.php" method="POST">
                <input type="hidden" name="id_sala" value="<?php echo $sala['id_sala']?>">
                <button class="update">Modificar</button>
            </form>
        </div>
        <?php
        }
        ?>
        <!-- Mostrar las salas + Boton para registrar una nueva sala 
        En cada sala mostrar un boton de eliminar
        El boton de crear una nueva sala abrira un modal
        que dejara crear una nueva sala con todos los campos necesarios
        Nombre de la sala, num_mesas, num_sillas.
        De la mesa: guardar el id de sala, numero de sillas y diponibilidad
        -->

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>Nueva sala</h2>
                </div>
                <div class="modal-body">
                    <form action="../../controller/crearSala.php" method="POST">
                        Nombre de la sala: <br>
                        <input id="name" name="name" type="text" value=""> <br>
                        Numero de mesas de 2 sillas: <br>
                        <select id="2p" name="2p">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select> <br>
                        Numero de mesas de 4 sillas: <br>
                        <select id="4p" name="4p">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select> <br>
                        Numero de mesas de 6 sillas: <br>
                        <select id="6p" name="6p">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select> <br>
                        <button type="submit">CREAR</button>
                    </form>
                </div>
            </div> <!-- Fin Modal content -->
        </div><!-- Fin The Modal -->

    </div>
</body>
</html>