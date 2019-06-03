<?php



class ProfesorAdjunto extends Profesor {

protected $horas;
protected $codigoAdjunto;

public function __construct(int $lasHoras, int $ElCodigoAdjunto) {

}

public function setHoras(int $lasHoras) {

 $this->horas= $lasHoras;

}
public function setCodigoAdjunto(int $ElCodigoAdjunto) {

 $this->codigoAdjunto= $ElCodigoAdjunto;

}

public function getHoras() {

    return $this->horas;
}

public function getCodigoAdjunto() {

    return $this->codigoAdjunto;
}

}



 ?>
