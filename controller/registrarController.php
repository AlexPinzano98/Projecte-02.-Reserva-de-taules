<?php
require_once "../services/conexion.php";
// Recogemos los datos enviados del formulario
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = md5($_POST['password']); // Encriptamos con hash md5 la contraseña
$perfil   = $_POST['perfil'];
echo "$name, $email, $password, $perfil";

try {
    // Consulta para saber si el email introducido ya existe
    $query = "SELECT Email FROM tbl_camareros WHERE Email='$email'";
    $sentencia = $pdo->prepare($query);
    $sentencia->execute();
    if($sentencia->rowCount()!=0){ // Si existe un registro con el email introducido volvemos al registro
        echo "Email ya registrado en la base de datos";
    }else{ //Si no existe un registro con ese email creamos uno
        $pdo->beginTransaction(); // Inicia una transacción
        $query= "INSERT INTO tbl_camareros (Name,Email,Passwd,Profile) VALUES (?,?,?,?)";
        $sentencia= $pdo->prepare($query);
        $sentencia->bindParam(1,$name);
        $sentencia->bindParam(2,$email);
        $sentencia->bindParam(3,$password);
        $sentencia->bindParam(4,$perfil);
        $sentencia->execute();
        $pdo->commit(); // Establece la conexion actual para la base de datos
        //header("Location: ../view/login.php");
    }
}catch (PDOException $e){
    $pdo->rollBack(); /* Reconocer un error y revertir los cambios */
    echo $e->getMessage(); /* Mostrar el error */
}

?>   