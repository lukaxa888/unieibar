<?php
$w=[
    [1,12,53,4],
    [5,6,45,98],
    [9,55,11,32]
];
$suma = 0;

foreach($w as $v)
    {  foreach ($v as $x){
        $suma = $suma +$x;
    }
    
    }
   
  echo $suma;


?>