<?php

abstract class  Profesor {

  protected $nombre;
  protected $apellido;


  public function __construct(string $elNombre,string $elApellido) {
    $this->nombre = $elNombre;
    $this->apellido = $elApellido;

  }

  public function setNombre(string $elNombre) {

    $this->nombre = $elNombre;

  }

  public function setApellido(string $elApellido) {

      $this->apellido = $elApellido;
  }



  public function getNombre() {

    	return $this->nombre;
  }

  public function getApellido() {

      return $this->apellido;
  }





}
