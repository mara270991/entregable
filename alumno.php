<?php

class Alumno {

  private $nombre;
  private $apellido;
  private $codigo;


  public function __construct(string $elNombre,string $elApellido,int $elCodigo) {
      $this->nombre = $elNombre;
      $this->apellido= $elApellido;
      $this->codigo= $elCodigo;

  }

  public function setNombre(string $elNombre) {

    $this->nombre = $elNombre;

  }

  public function setApellido(string $elApellido) {

      $this->apellido = $elApellido;
  }

  public function setCodigo(int $elCodigo) {

      $this->codigo = $elCodigo;

  }

  public function getNombre() {

    	return $this->nombre;
  }

  public function getApellido() {

      return $this->apellido;
  }

  public function getCodigo() {

      return $this->codigo;
}

}
