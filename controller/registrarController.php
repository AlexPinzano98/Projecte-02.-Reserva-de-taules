<?php
require_once "../services/conexion.php";
// Recogemos los datos enviados del formulario
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = md5($_POST['password']); // Encriptamos con hash md5 la contraseña

try {
    // Consulta para saber si el email introducido ya existe
    $query = "SELECT * FROM users WHERE email='$email'";
    $sentencia = $pdo->prepare($query);
    $sentencia->execute();
    if($sentencia->rowCount()!=0){ // Si existe un registro con el email introducido volvemos al registro
        $error = "Email ya registrado en la base de datos";
        header("Location: ../view/registrar.php?error=$error");
    }else{ //Si no existe un registro con ese email creamos uno
        $pdo->beginTransaction(); // Inicia una transacción
        $query= "INSERT INTO tbl_ (name,lastname,email,password,status,profile) VALUES (?,?,?,?,?,?)";
        $sentencia= $pdo->prepare($query);
        $sentencia->bindParam(1,$name);
        $sentencia->bindParam(2,$lastname);
        $sentencia->bindParam(3,$email);
        $sentencia->bindParam(4,$password);
        $sentencia->bindValue(5,"1");
        $sentencia->bindValue(6,"1");
        $sentencia->execute();
        $pdo->commit(); // Establece la conexion actual para la base de datos
        header("Location: ../view/login.php");
    }
}catch (PDOException $e){
    $pdo->rollBack(); /* Reconocer un error y revertir los cambios */
    echo $e->getMessage(); /* Mostrar el error */
}

?>   