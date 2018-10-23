<?php

echo "<table border=px><tr>";
$semanal = ["Lunes","Martes","Miercoles","Jueves","Viernes"];

$horario = array (
    array("BDD","EIE","SIS","SIS","WEB","WEB"), //Lunes 0
    array("WEB","SEG","RED","RED","BDD","BDD"), //Martes 1
    array("SEG","SEG","SIS","SIS","EIE","EIE"), //Miercoles 2
    array("RED","RED","SIS","SIS","WEB","WEB"), //Jueves 3
    array("SEG","SEG","RED","SEG","ING","ING"), //Viernes 4
);

$dia = date("N");
$hora = date("G");

    //echo  $horario[$dia-1][$hora-8]."<br>"; echo $semanal[$dia-1];

foreach ($horario as $dia){
    
    echo "<tr>";
  
    foreach ($dia as $asig){
        
        echo "<td>" . $asig . "</td>";
    }
    echo "</tr>";
    
}

echo " </tr></table>";
?>
