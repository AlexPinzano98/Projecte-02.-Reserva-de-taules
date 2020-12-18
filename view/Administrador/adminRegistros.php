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
    <div class="form modal-body contenedor">
        <h1>CREAR REGISTRO</h1>
        <form action="../../controller/newEmpleado.php" method="POST" id="formulario" onsubmit="return validacionForm()">
            <div class="input-contenedor">	<!-- Campo: NOM -->
                <label for="nom">Nombre:</label> 
                <input type="text" name="name" id="name">
            </div>
            <div class="input-contenedor">	<!-- Campo: EMAIL -->
                <label for="correo">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input-contenedor">	<!-- Campo: PASSWORD 1 -->
                <label for="passwd">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="input-contenedor">	<!-- Campo: PASSWORD 2 -->
                <label for="passwd2">Password:</label>
                <input type="password" name="password2" id="password2">
            </div>
            <div class="input-contenedor">	<!-- Campo: Profile -->
                <label for="perfil">Perfil</label>
                <select name="perfil">
                    <option value="1" selected>Camarero</option> 
                    <option value="2">Mantenimiento</option>
                    <option value="3">Administrador</option>
                </select>
            </div>
            <button type="submit">Enviar</button>
            <div class="div-msg">
                <p class="msg-error"></p>
            </div>
        </form>
    </div>
<!-----------------------------------------------FIN DIV MESAS----------------------------------------->

</body>
</html>