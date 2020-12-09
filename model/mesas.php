<?php
class Mesas{
    private $id_mesa;
    private $id_sala;
    private $num_sillas;
    private $disponibilidad;

    public function __construct(){
        
    }

    /**
     * Get the value of id_mesa
     */ 
    public function getId_mesa()
    {
        return $this->id_mesa;
    }

    /**
     * Set the value of id_mesa
     *
     * @return  self
     */ 
    public function setId_mesa($id_mesa)
    {
        $this->id_mesa = $id_mesa;

        return $this;
    }

    /**
     * Get the value of id_sala
     */ 
    public function getId_sala()
    {
        return $this->id_sala;
    }

    /**
     * Set the value of id_sala
     *
     * @return  self
     */ 
    public function setId_sala($id_sala)
    {
        $this->id_sala = $id_sala;

        return $this;
    }

    /**
     * Get the value of num_sillas
     */ 
    public function getNum_sillas()
    {
        return $this->num_sillas;
    }

    /**
     * Set the value of num_sillas
     *
     * @return  self
     */ 
    public function setNum_sillas($num_sillas)
    {
        $this->num_sillas = $num_sillas;

        return $this;
    }

    /**
     * Get the value of disponibilidad
     */ 
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

    /**
     * Set the value of disponibilidad
     *
     * @return  self
     */ 
    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }
}

?>