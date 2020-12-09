<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="./js/code.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body style="background-color: #666666;">
	
	<div class="principal-form">
		<div class="content-form">
			<div class="row-form">
				<form class="formulario" action="./controller/validarLogin.php" method="POST" onsubmit="return validacionForm('label','input')">
					<span class="formulario-titulo">
						Inicia Sesión para continuar
					</span>
					
					<div class="botonesform">
						<input class="campoform" type="email" name="email" id="email">
						<span class="focus-campoform"></span>
						<span class="label-campoform">Correo Electrónico</span>
					</div>
					
					<div class="botonesform validate-input">
						<input class="campoform" type="password" name="psswd" id="psswd">
						<span class="focus-campoform"></span>
						<span class="label-campoform">Contraseña</span>
					</div>

					<div class="olvidarpass">
						<div>
							<a href="" class="txt-olvidar-pass">
								¿Has olvidado la contraseña?
							</a>
						</div>
					</div>

					<div class="container-login">
					<input type="submit" class="login-boton" id="ingresar" value="Ingresar">
					</div>
					<div id="message"></div>
				</form>

				<div class="imagen-fondo-login" style="background-image: url('./img/bg_login.jpg');">
				</div>
			</div>
		</div>
	</div>

</body>
</html>

