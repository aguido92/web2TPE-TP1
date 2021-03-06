<?php
/**
 *
 */
require_once "AbstractModel.php";

class CarreraModel extends AbstractModel
{
  const INSTANCE = "carrera";
 
  function __construct()
  {
    $this->db = $this->Connect();
  }
  
  function mostrar(){
    return $this->getAll(CarreraModel::INSTANCE);
  }

  function mostrarUno($id){
    return $this->getOne(CarreraModel::INSTANCE, $id);
  }

  function eliminar($id){
    $afectados = $this->delete(CarreraModel::INSTANCE, $id);
    printf("Registros borrados: %d\n", $afectados);
    return $afectados;
  }

  function agregar($nombre,$descripcion){
    $sentencia = $this->db->prepare("INSERT INTO carrera(nombre, descripcion) VALUES(?,?)");
    $sentencia->execute(array($nombre,$descripcion));
  }

  function guardarEditar($nombre,$descripcion,$id){
    $sentencia = $this->db->prepare( "update carrera set nombre = ?, descripcion = ? where id=?");
    $sentencia->execute(array($nombre,$descripcion,$id));
  }
}


 ?>
