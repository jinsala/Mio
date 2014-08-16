<?php
class Notas{
 private $id;
 private $nombre;
 private $parcial;
 private $finall;
 private $mejoramiento;
 private $promedio;
 
 
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
    return $this->id;
  }  
  
 
   function setName($nombre){
    
       $this->nombre = $nombre;
     } 
  
  function getName(){
    return $this->nombre;
  }
 
     function setParcial($parcial){
      if(parcial > 0 && parcial <=100)
       $this->parcial = $parcial;
       else
       echo "Este valor no es valido";
     } 
  
  function getParcial(){
    return $this->parcial;
  }
  
   function setFinall($finall){
    if(finall > 0 && finall <=100)
       $this->finall = $finall;
       else
          echo "Este valor no es valido";
     } 
  
   function getFinall(){
    return $this->finall;
  }
  
   function setMejoramiento($mejoramiento){
    if(mejoraimiento > 0 && mejoraimiento <=100)
       $this->mejoramiento = $mejoramiento;
       else
          echo "Este valor no es valido";
     } 
  function getMejoramiento(){
    return $this->mejoramiento;
  }
  
  public function Calcular(n1,n2,n3){
  $this->n1 = $parcial;
  $this->n2 = $finall;
  $this->n3 = $mejoramiento;
  
  
  if (n1 >= n2 && n1 >= n3)
    if (n2 >= n3)
        $this->promedio = ($n1 +$n2) /2;
  else
   if (n2 > n1 && n2 > n3)
      if (n3 >= n1)
       $this->promedio =($n2 + $n3)/2;
    else
      $this->promedio = ($n1 + $n3)/2;
 } 
 
 
 
?>
