<?php

$dia = date ("N")-1;


$horario = (
    array("BDD","EIE","SIS","SIS","WEB","WEB"), //Lunes 0
    array("WEB","SEG","RED","RED","BDD","BDD"), //Martes 1
    array("SEG","SEG","SIS","SIS","EIE","EIE"), //Miercoles 2
    array("RED","RED","SIS","SIS","WEB","WEB"), //Jueves 3
    array("SEG","SEG","RED","SEG","ING","ING"), //Viernes 4
);
$dia = date("N");
$hora = date("G");


    //falta controlar las horas que no estamos en clase


    echo $horario[$dia -1][$hora-8];

    
    
    
    
    
   




?>