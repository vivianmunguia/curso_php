<?php
#Array de tipo escalar 
$estudiantes = ["Carlos", "Jose", "Vanessa", "Katy"];

#Array de tipo asociativo
$tutor = [
    "nombre"=>"Carlos", 
    "apellido"=>"Alfaro", 
    "edad"=>27
];

#Array de multiples dimensiones
$tutor_2 = [
    "nombre"=>"Vanessa",
    "apellido"=>"Calles",
    "edad"=>20,
    "cursos"=>["PHP", "Python", "CSS"]
    //"cursos"=>["curso1"=>"PHP", "curso2"=>"Python", "curso3"=>"CSS"]
];

$tutor["edad"]=19;

//echo $estudiantes[0];
//echo $tutor["edad"];

//$tutor_2["cursos"][1]="Javascript";
//echo $tutor_2["cursos"][1];

//$tutor_2["pais"]="El Salvador";
//echo $tutor_2["pais"];

echo count($tutor_2, COUNT_RECURSIVE);