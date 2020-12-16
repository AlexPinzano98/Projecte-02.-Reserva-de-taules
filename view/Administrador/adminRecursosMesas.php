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
        <h1>sala <?php echo $_POST['id_sala'] ?></h1>
        <button class="new-mesa" onclick="abrirModal()">New Mesa</button>

        <!-- // Consultar las mesas y mostrar las mesas con opcion de eliminar -->
        <?php
            $sala = $_POST['id_sala'];
            $query = "SELECT * FROM tbl_mesas
            WHERE id_sala='$sala' ";

            $sentencia = $pdo->prepare($query);
            $sentencia->execute();
            $mesas = $sentencia->fetchAll();

            foreach ($mesas as $mesa) {
        ?>
            <div>
                <form action='../../controller/delSala.php' method='POST'>
                    <p>ID MESA:<?php echo $mesa['id_mesa'] ?>  </p>
                    <p>Capacidad: <?php echo $mesa['num_sillas_mesa'] ?> </p>
                    <img src="../../img/mesa1.png" style="width: 15%;" /> <br>
                    <input id="id_sala" name="id_sala" type="hidden" value="<?php echo $mesa['id_mesa'] ?>"> <br>
                    <button type='submit'>DELETE</button>
                </form>
            </div>
        <?php 
            }
        ?> 

    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Nueva mesa</h2>
            </div>
            <div class="modal-body">
                <form action="../../controller/crearMesa.php" method="POST">
                    Id de la sala: <br>
                    <input id="id_sala" name="id_sala" type="text" value="<?php echo $_POST['id_sala'] ?>" readonly> <br>
                    Numero de sillas para la mesa <br>
                    <select id="capacidad" name="capacidad">
                        <option value="2" selected>2</option>
                        <option value="4">4</option>
                        <option value="6">6</option>
                    </select> <br>
                    <button type="submit">CREAR</button>
                </form>
            </div>
        </div> <!-- Fin Modal content -->
    </div><!-- Fin The Modal -->
</body>
</html>