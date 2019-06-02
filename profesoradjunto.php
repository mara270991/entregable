<?php



class ProfesorAdjunto extends Profesor {

protected $horas;

public function __construct() {

}

public function setHoras(int $lasHoras) {

 $this->horas= $lasHoras;

}

public function getHoras() {

    return $this->horas;
}

}



 ?>
