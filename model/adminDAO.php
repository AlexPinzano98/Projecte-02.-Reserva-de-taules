<?php
class AdminDao{
    private $pdo; 

    public function __construct(){
        include '../services/conexion.php';
        $this->pdo=$pdo;
    } 

    public function deleteEmpleado($id_emp){
        $query= "DELETE FROM tbl_camareros WHERE id_empleado = '$id_emp'";
        $sentencia= $this->pdo->prepare($query);
        $sentencia->execute();
        header("Location: ../view/Administrador/adminHome.php");
    }    

    public function updateEmpleado($id,$name,$email,$perfil){
        $query= "UPDATE tbl_camareros SET Name='$name', Email='$email', Profile='$perfil' WHERE id_empleado = '$id'";
        $sentencia= $this->pdo->prepare($query);
        $sentencia->execute();
        header("Location: ../view/Administrador/adminHome.php");
    } 

    public function changeStatus($id){
        $query = "SELECT status FROM users WHERE id = '$id'";
        $sentencia = $this->pdo->prepare($query);
        $sentencia->execute();
        $status = $sentencia->fetch(); // Guardamos el status del usuario: $status[0]

        if ($status[0]==1) { // Status=1 -> Hemos de bloquear al usuario (status=0)
            $query = "UPDATE users SET status='0' WHERE id = '$id'";
        } else {  // Status=0 -> Hemos de desbloquear al usuario (status=1)
            $query = "UPDATE users SET status='1' WHERE id = '$id'";
        }

        $sentencia = $this->pdo->prepare($query);
        $sentencia->execute();
        header('Location: ../view/admin.php');
    } 

    public function registrarEmpleado(){
        
    } 
  
}

?>