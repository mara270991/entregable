<?php

class Curso {

  private $nombre;
  private $codigo;
  private $alumnos = [];
  private $profesorTitular = [];
  private $profesorAdjunto = [];
  private $capacidad;



  // public function __construct(string $elNombre,int $elCodigo, Alumno $Alumnos) {
  // }

  public function __construct(string $elNombre,int $elCodigo, int $LaCapacidad ) {
    $this->nombre = $elNombre;
    $this->codigo = $elCodigo;
    $this->capacidad =$LaCapacidad;
  }

  public function setNombre(string $elNombre) {

    $this->nombre = $elNombre;

  }


  public function setCodigo(int $elCodigo) {

      $this->codigo = $elCodigo;

  }

  public function setAlumnos(Alumno $alumno) {

      $this->alumno[] = $alumno;

  }

  public function setProfesoresTitulares(ProfesorTitular $profesor) {

      $this->profesor[] = $profesor;

  }


    public function setProfesoresAdjuntos(ProfesorAdjunto $profesor) {

        $this->profesor[] = $profesor;

    }


    public function setCapacidad($LaCapacidad) {

        $this->capacidad = $LaCapacidad;

    }




  public function getNombre() {

    	return $this->nombre;
  }


  public function getCodigo() {

      return $this->codigo;
}

public function getAlumnos() {

    $this->alumno[] = $alumno;

}

public function getProfesoresTitulares() {

    $this->profesor[] = $profesor;

}


  public function getProfesoresAdjuntos() {

      $this->profesor[] = $profesor;

  }

public function agregarUnAlumno(Alumno $unAlumno){

}

}
