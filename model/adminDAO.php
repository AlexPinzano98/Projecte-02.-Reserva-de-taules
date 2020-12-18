<?php
class AdminDao{
    private $pdo; 

    public function __construct(){
        include '../services/conexion.php';
        $this->pdo=$pdo;
    } 

    public function deleteEmpleado($id_emp){ 
        try {
            $query= "DELETE FROM tbl_camareros WHERE id_empleado=? ";
            $sentencia= $this->pdo->prepare($query);
            $sentencia->bindParam(1,$id_emp);
            $sentencia->execute();
            header("Location: ../view/Administrador/adminHome.php");
        }catch (PDOException $e){
            $this->pdo->rollBack(); /* Reconocer un error y revertir los cambios */
            echo $e->getMessage(); /* Mostrar el error */
        }
        
    }    

    public function updateEmpleado($id,$name,$email,$perfil){
        try{
            $query= "UPDATE tbl_camareros SET Name=?, Email=?, Profile=? WHERE id_empleado=?";
            $sentencia= $this->pdo->prepare($query);
            $sentencia->bindParam(1,$name);
            $sentencia->bindParam(2,$email);
            $sentencia->bindParam(3,$perfil);
            $sentencia->bindParam(4,$id);
            $sentencia->execute();
            header("Location: ../view/Administrador/adminHome.php");
        }catch (PDOException $e){
            $this->pdo->rollBack(); /* Reconocer un error y revertir los cambios */
            echo $e->getMessage(); /* Mostrar el error */
        }
    } 

    public function changeStatus($id){
        try{
            $query = "SELECT Status FROM tbl_camareros WHERE id_empleado=?";
            $sentencia = $this->pdo->prepare($query);
            $sentencia->bindParam(1,$id);
            $sentencia->execute();
            $status = $sentencia->fetch(); // Guardamos el status del usuario: $status[0]

            if ($status[0]==1) { // Status=1 -> Hemos de bloquear al usuario (status=0)
                $query = "UPDATE tbl_camareros SET Status='0' WHERE id_empleado=?";
            } else {  // Status=0 -> Hemos de desbloquear al usuario (status=1)
                $query = "UPDATE tbl_camareros SET Status='1' WHERE id_empleado=?";
            }

            $sentencia = $this->pdo->prepare($query);
            $sentencia->bindParam(1,$id);
            $sentencia->execute();
            header("Location: ../view/Administrador/adminHome.php");
        }catch (PDOException $e){
            $this->pdo->rollBack(); /* Reconocer un error y revertir los cambios */
            echo $e->getMessage(); /* Mostrar el error */
        }
    } 

    public function registrarEmpleado($name,$email,$password,$profile){
        try {
            // Consulta para saber si el email introducido ya existe
            $query = "SELECT * FROM tbl_camareros WHERE Email=?";
            $sentencia = $this->pdo->prepare($query);
            $sentencia->bindParam(1,$email);
            $sentencia->execute();
            if($sentencia->rowCount()!=0){ // Si existe un registro con el email introducido volvemos al registro
                $error = "Email ya registrado en la base de datos";
                header("Location: ../view/Administrador/adminRegistros.php?error=$error");
            }else{ //Si no existe un registro con ese email creamos uno
                $this->pdo->beginTransaction(); // Inicia una transacción
                $query= "INSERT INTO tbl_camareros (Name,Email,Passwd,Status,Profile) VALUES (?,?,?,?,?)";
                $sentencia= $this->pdo->prepare($query);
                $sentencia->bindParam(1,$name);
                $sentencia->bindParam(2,$email);
                $sentencia->bindParam(3,$password);
                $sentencia->bindValue(4,"1");
                $sentencia->bindParam(5,$profile);
                $sentencia->execute();
                $this->pdo->commit(); // Establece la conexion actual para la base de datos
                header("Location: ../view/Administrador/adminHome.php");
            }
        }catch (PDOException $e){
            $this->pdo->rollBack(); /* Reconocer un error y revertir los cambios */
            echo $e->getMessage(); /* Mostrar el error */
        }
        
    } 
  
}

?>