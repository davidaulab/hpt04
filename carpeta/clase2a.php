<?php 

$numeroEncontrar = 7;
echo "con FOR\n";
for ($i = 0; $i < 10; $i++) {
    if ($i == $numeroEncontrar) {
        echo "Encontrado -> ";
       
    }
    if ($i % 2 == 1) {
        echo "es impar ";
    }
    elseif  (  (($i % 2 == 0)  ||   ($i != 0)) && ($i < 10)) {      
        echo "es par ";
    }
    else {
        echo "es otro numero ";
    }
    echo "$i \n";
    
}
/*
echo "con WHILE\n";
$i = 0;
$bEnc = false; 

while (($i < 10) && ($bEnc == false)) {
    if ($i == $numeroEncontrar) {
        $bEnc = true; 
        echo "Encontrado -> ";
    }

    switch ($i) {
        case 1: 
        case 3: 
        case 5: 
            echo "es impar ";
            break;
        case 2:
        case 4:
        case 6:
            echo "es par "; 
            break;
        default: 
            echo " es otro número ";                          
    }

    echo $i++ . "\n";
    
}
*/


$alumno = array(
    "nombre" => "XXX",
    "apellido" => "XXX",
    "asignaturas" => array (
        "html"      => array (7,8, 9),
        "php"       => array (7,9,6),
        "laravel"   => array (4,7,8)
    )
    );

?>