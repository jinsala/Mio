<?php

include_once('Notas.php');
include_once('Collecto1.php');

class NotasCollector extends Collector1
{
  
  function show() {
    $rows = self::$db->getRows("SELECT * FROM Calificacion ");        
    $arrayNota= array();        
    foreach ($rows as $c){
      $aux = new Notas($c{'id'},$c{'nombre'}, $c{'parcial'}, $c{'final'}, $c{'mejoramiento'});
      array_push($arrayNota, $aux);
    }
    return $arrayNota;        
  }

}
?>

