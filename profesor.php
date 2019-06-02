<?php

abstract class  Profesor {

  protected $nombre;
  protected $apellido;
  protected $antiguedad;
  protected $codigo;

  public function __construct() {

  }

  public function setNombre(string $elNombre) {

    $this->nombre = $elNombre;

  }

  public function setApellido(string $elApellido) {

      $this->apellido = $elApellido;
  }

  public function setAntiguedad(int $LaAntiguedad) {

      $this->antiguedad = $LaAntiguedad;
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

  public function getAntiguedad() {

      return $this->antiguedad;
  }

  public function getCodigo() {

      return $this->codigo;
}

}
