<?php

class Alumno {

  private $nombre;
  private $apellido;
  private $codigo;

  public function __construct() {

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