<?php

class ProfesorTitular extends Profesor {

protected $especialidad;

public function __construct() {

}

public function setEspecialidad(string $laEspecialidad) {

 $this->especialidad = $laEspecialidad;

}

public function getEspecialidad() {

    return $this->especialidad;
}

}



 ?>
