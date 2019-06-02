<?php

class Curso {

  private $nombre;
  private $codigo;


  public function __construct() {
  }

  public function setNombre(string $elNombre) {

    $this->nombre = $elNombre;

  }


  public function setCodigo(int $elCodigo) {

      $this->codigo = $elCodigo;

  }

  public function getNombre() {

    	return $this->nombre;
  }


  public function getCodigo() {

      return $this->codigo;
}

public function agregarUnAlumno(Alumno $unAlumno){
  
}

}
