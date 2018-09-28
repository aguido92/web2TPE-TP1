<?php
/**
 *
 */
class CatedraModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_web2_tp1;charset=utf8'
    , 'root', '');
  }

  function get(){
      $sentencia = $this->db->prepare( "select * from catedra");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function agregar($nombre,$link, $cant_alumnos, $id_carrera){
    $sentencia = $this->db->prepare("INSERT INTO catedra(nombre, link, cant_alumnos, id_carrera) VALUES(?,?,?,?)");
    $sentencia->execute(array($nombre,$link, $cant_alumnos, $id_carrera));
  }

  function eliminar($id){
    $sentencia = $this->db->prepare( "delete from catedra where id=?");
    $sentencia->execute(array($id));
  }

  function getOne($id){

      $sentencia = $this->db->prepare( "select * from catedra where id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function guardarEditar($nombre,$link,$cant_alumnos,$id_carrera,$id){
    $sentencia = $this->db->prepare( "update catedra set nombre = ?, link = ?, cant_alumnos = ?, id_carrera = ? where id=?");
    $sentencia->execute(array($nombre,$link, $cant_alumnos, $id_carrera, $id));
  }

}


 ?>
