

<?php

require_once("alumno.php");
require_once("profesor.php");
require_once("profesortitular.php");
require_once("profesoradjunto.php");
require_once("curso.php");

$Alumno = new Alumno("juana","juana", 22);
$Alumno2 = new Alumno("diego","diego", 22);

$ProfeT = new ProfesorTitular("marketing",3,2345,"nombre","apellido");
$ProfeA = new ProfesorAdjunto(5,2345,"nombre","apellido");

//
$CursoFS = new Curso("fullstack", 0045,55);
$CursoFS->setAlumnos($Alumno2);
$CursoFS->setAlumnos($Alumno);
$CursoFS->setProfesoresTitulares($ProfeT);
$CursoFS->setProfesoresAdjuntos($ProfeA);
$CursoFS->setCapacidad(55);






echo "<pre>";
var_dump($Alumno, $ProfeA, $ProfeT,$CursoFS);
echo "</pre>";
