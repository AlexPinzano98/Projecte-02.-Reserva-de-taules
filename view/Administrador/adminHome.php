<?php 
session_start();
if (!isset($_SESSION['camarero'])){
    header('Location: ../../index.php');
} else {
    require_once "../../controller/recuperarEmpleado.php";
}

//print_r($empleado);
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
    
    <script src="../../js/changeImg.js"></script>
    <script src="../../js/modal.js"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/bb115789bd.js" crossorigin="anonymous"></script>
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
                                    <img src="../img/logo.png" alt="">
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
	</div>
	<!-----------------------------------------------FIN MENU----------------------------------------->

	<!-----------------------------------------------INICIO BANNER----------------------------------------->
    <!-- Para los registros hacer un modal para crear uno
        Tambien mostrar todos los usuarios con boton de eliminar y de modificar
        La opcion de modificar abre otro modal
     -->
    <div class="row">
        <h1>EMPLEADOS</h1>
        <!-- <p>Usuario: <b><?php //echo $empleado[1]['Name'];?></b></p> -->
        <?php 
        foreach ($empleado as $emp) { ?>
        <div class='three-column'>
            <p>Usuario: <b><?php echo $emp['Name'];?></b></p>
            <p>Email: <b><?php echo $emp['Email']?></b></p>
            <p>Tipo: <b>
            <?php 
                switch ($emp['Profile']) {
                    case '1':
                    echo "Camarero";
                        break;
                    case '2':
                        echo "Mantenimiento";
                        break;
                    case '3':
                        echo "Administrador";
                        break;
                }
            ?></b></p>
            <div class="acciones">
                <form action="../../controller/delEmpleado.php" method="POST">
                    <input type="hidden" name="id_emp" value="<?php echo $emp['id_empleado']?>">
                    <button class="delete">ELIMINAR</button>
                </form>
                <button class="update" onclick="openModal('<?php echo $emp['id_empleado']?>','<?php echo $emp['Name'];?>','<?php echo $emp['Email']?>','<?php echo $emp['Passwd']?>','<?php echo $emp['Profile']?>')" >UPDATE</button>
                <form action="../../controller/blocEmpleado.php" method="POST">
                    <input type="hidden" name="id_emp"  value="<?php echo $emp['id_empleado']?>">
                    <button class="button">STATUS</button>
                </form>
            </div>
            
        </div>
        <?php
        } 
        ?>
        
    </div>
<!-----------------------------------------------FIN DIV EMPLEADOS---------------------------------------->
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Administrar empleado</h2>
            </div>
            <div class="modal-body contenedor">
                <form action="../../controller/updateEmpleado.php" method="POST">
                    <input id="id" name="id" type="hidden" value="">
                    <p>Nombre:</p> 
                    <div class="input-contenedor">
                        <i class="fas fa-user icon"></i>
                        <input id="name" name="name" type="text" value="">
                    </div>
                    <p>Email:</p> 
                    <div class="input-contenedor">
                        <i class="fas fa-envelope-square"></i>
                        <input id="correo" name="correo" type="email" value="">
                    </div>
                    <p>Tipo empleado:</p>
                    <div class="input-contenedor">
                        <i class="fas fa-users-cog"></i>
                        <select id="perfil" name="perfil">
                            <option id="camarero" value="1">Camarero</option>
                            <option id="mantenimiento" value="2">Mantenimiento</option>
                            <option id="administrador" value="3">Administrador</option>
                        </select>
                    </div>
                    <button type="submit">MODIFICAR</button>
                </form>
            </div>
        </div> <!-- Fin Modal content -->
    </div><!-- Fin The Modal -->
</body>
</html>