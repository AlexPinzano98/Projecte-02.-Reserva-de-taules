<?php
class CamareroDao{
    private $pdo;

    public function __construct(){
        include '../services/conexion.php';
        $this->pdo=$pdo;
    } 

    public function login($admin){
        try {  
            $email=$admin->getEmail();
            $password=$admin->getPasswd();
            // Comprobar si hay un registro con los datos introducidos (login)
            $query = "SELECT Email FROM tbl_camareros WHERE Email=?";
            $sentencia=$this->pdo->prepare($query);
            $sentencia->bindParam(1,$email);
            $sentencia->execute();
            if($sentencia->rowCount()!=0){ // Comprovamos si existe registro con esos datos
                $query= "SELECT Status from tbl_camareros where Email=? and Passwd=?";
                $sentencia= $this->pdo->prepare($query);
                $sentencia->bindParam(1,$email);
                $sentencia->bindParam(2,$password);
                $sentencia->execute();
                $status= $sentencia->fetch(); // Guardamos el status del usuario
                if ($status[0]==1) { //Si el usuario no esta bloqueado (1)
                    $query= "SELECT Profile from tbl_camareros where Email=? and Passwd=?";
                    $sentencia= $this->pdo->prepare($query);
                    $sentencia->bindParam(1,$email);
                    $sentencia->bindParam(2,$password);
                    $sentencia->execute();
                    $profile= $sentencia->fetch(); // Guardamos el profile del usuario (1-3)
                    $numRow=$sentencia->rowCount();

                    if($numRow==1){
                        session_start();
                        $_SESSION['camarero'] = $email;
                        switch ($profile[0]) { // Segun el profile nos dirigimos a su pagina correspondiente
                            case '1': // CAMARERO 
                                header("Location: ../view/Camarero/buscarReserva.php");
                                break;
                            case '2': // MANTENIMIENTO
                                header("Location: ../view/Mantenimiento/incidencias.php");
                                break;
                            case '3': // ADMINISTRADOR
                                header("Location: ../view/Administrador/adminHome.php");
                                break;
                        }
                    }else {
                        return false;
                    }
                } else { // Si el isuario esta bloqueado (0) o (!=1)
                    $error = "L'usuari es troba bloquejat actualment";
                    header("Location: ../index.php?error=$error");
                }
            }else{ // Si no existe un registro con los datos introducidos volvemos al login
                $error = "L'usuari no esta registrat";
                header("Location: ../index.php?error=$error");
            }

            
        }catch (PDOException $e){
            $this->pdo->rollBack(); /* Reconocer un error y revertir los cambios */
            echo $e->getMessage(); /* Mostrar el error */
        }
    }    
  
}

?>