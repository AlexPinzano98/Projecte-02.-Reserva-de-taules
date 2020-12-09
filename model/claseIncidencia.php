<?php
 Class Incidencias {
     private $id_inc;
     private $id_mesa;
     private $descrip;
     private $dispo;

     public function __construct(){ 
     }

     /**
      * Get the value of id_inc
      */ 
     public function getId_inc()
     {
          return $this->id_inc;
     }

     /**
      * Set the value of id_inc
      *
      * @return  self
      */ 
     public function setId_inc($id_inc)
     {
          $this->id_inc = $id_inc;

          return $this;
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
      * Get the value of descrip
      */ 
     public function getDescrip()
     {
          return $this->descrip;
     }

     /**
      * Set the value of descrip
      *
      * @return  self
      */ 
     public function setDescrip($descrip)
     {
          $this->descrip = $descrip;

          return $this;
     }
   

     /**
      * Get the value of dispo
      */ 
     public function getDispo()
     {
          return $this->dispo;
     }

     /**
      * Set the value of dispo
      *
      * @return  self
      */ 
     public function setDispo($dispo)
     {
          $this->dispo = $dispo;

          return $this;
     }
 }
?>