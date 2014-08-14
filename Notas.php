<?php
class Notas{
 private $id;
 private $nombre;
 private $parcial;
 private $finall;
 private $mejoramiento;
 
 function __construct($id,$nombre,$parcial, $final, $mejoramiento){
  $this->id = $id;
  $this->nombre = $nombre;
  $this->parcial = $parcial;  
  $this->finall = $final;  
  $this->mejoramiento = $mejoramiento;  
  
  }
  
  function setId($id){
       $this->id = $id;
     } 
 
  function getId(){
    return $this->idp;
  }  
  
 
   function setName($nombre){
       $this->nombre = $nombre;
     } 
  
  function getName(){
    return $this->nombre;
  }
 
     function setParcial($parcial){
       $this->parcial = $parcial;
     } 
  
  function getParcial(){
    return $this->parcial;
  }
  
   function setFinall($finall){
       $this->finall = $finall;
     } 
  
   function getFinall(){
    return $this->finall;
  }
  
   function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
  function getMejoramiento(){
    return $this->mejoramiento;
  }
  
  public function Calcular(){
  
  
 } 
 
 
?>
