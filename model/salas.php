<?php
 Class Salas {
     private $id_sala;
     private $num_mesas;
     private $num_sillas;

     public function __construct(){

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
      * Get the value of num_mesas
      */ 
     public function getNum_mesas()
     {
          return $this->num_mesas;
     }

     /**
      * Set the value of num_mesas
      *
      * @return  self
      */ 
     public function setNum_mesas($num_mesas)
     {
          $this->num_mesas = $num_mesas;

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
 }   

?>