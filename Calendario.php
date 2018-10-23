<?php
$dia = date("N");
$hora = date("H");

if ($dia==1)
{
    if ($hora ==8 )
    {   echo "Bases de Datos";
    } 
    if ($hora==9)
       { echo "EIE";}
    if ($hora==10)
       { echo "Administracion de Sistemas Operativos";}
    if ($hora==11)
       { echo "Administracion de Sistemas Operativos";}
    if ($hora==12)
      {  echo "Aplicaciones Web";}
    if ($hora==13)
     {   echo "Aplicaciones Web";}

else echo "No tienes clases";
            }   
if ($dia==2)
{
    if ($hora==8)
       { echo "Aplicaciones Web";}
    if ($hora==9)
        {echo "Seguridad";}
    if ($hora==10)
        {echo "Redes";}
    if ($hora==11)
        {echo "Redes";}
    if ($hora==12)
      {  echo "Bases de Datos";}
    if ($hora==13)
        {echo "Bases de Datos ";}
else echo "No tienes clases";

}   
if ($dia==3)
{
    if ($hora==8)
       { echo "Seguridad";}
    if ($hora==9)
        {echo "Seguridad";}
    if ($hora==10)
        {echo "Sistemas";}
    if ($hora==11)
        {echo "Sistemas";}
    if ($hora==12)
      {  echo "EIE";}
    if ($hora==13)
        {echo "EIE";}
else echo "No tienes clases";

}  
if ($dia==4)
{
    if ($hora==8)
       { echo "Redes";}
    if ($hora==9)
        {echo "Redes";}
    if ($hora==10)
        {echo "Sistemas";}
    if ($hora==11)
        {echo "Sistemas";}
    if ($hora==12)
      {  echo "Web";}
    if ($hora==13)
        {echo "Web";}
else echo "No tienes clases";

}  
if ($dia==5)
{
    if ($hora==8)
       { echo "Seguridad";}
    if ($hora==9)
        {echo "Seguridad";}
    if ($hora==10)
        {echo "Redes";}
    if ($hora==11)
        {echo "Redes";}
    if ($hora==12)
      {  echo "Ingles";}
    if ($hora==13)
        {echo "Ingles";}
else echo "No tienes clases";
}  

?>