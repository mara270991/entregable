

<?php

require_once("alumno.php");
require_once("profesor.php");
require_once("profesortitular.php");
require_once("profesoradjunto.php");
require_once("curso.php");

$Alumno = new Alumno;
$Alumno->setNombre("juana");
$Alumno->setApellido("vega");
$Alumno->setCodigo(22);

$ProfeT = new ProfesorTitular;
$ProfeT->setNombre("juana");
$ProfeT->setApellido("vega");
$ProfeT->setCodigo(22);
$ProfeT->setAntiguedad(45);
$ProfeT->setEspecialidad("marketing");

$ProfeA = new ProfesorAdjunto;
$ProfeA->setNombre("juana");
$ProfeA->setApellido("vega");
$ProfeA->setCodigo(22);
$ProfeA->setAntiguedad(45);
$ProfeA->setHoras(6);


$Curso = new Curso("fullstack", 0045);
$Curso->setNombre("fullstacj");
$Curso->setCodigo(1556);




echo "<pre>";
var_dump($Alumno, $Curso, $ProfeA, $ProfeT);
echo "</pre>";
