<?php 
/* 
Comentario 
Multilínea

*/

// Una sola línea

/**
 * Documentación
 * 
 * 
 */

 
 /*
 Asignación (variables)
 Condicionales (if / case)
 Bucles (for / while)

 Reutilización de código
 */

 // Const 

 const PI = 3.14; 
 define ('PI2', 3.14); 



 $miVariable = "2";


 echo PI . "$miVariable\n";

 echo ('$miVariable \n');

var_dump ($miVariable);

// if ($miVariable != 2) {
if ($miVariable == 2) {
    echo "Es un dos\n";
} 
elseif ($miVariable == 3){
    echo "Es un tres\n";
}
elseif ($miVariable == 6){
    echo "Es un tres\n";
}


switch ($miVariable) {
    case 2: 
        echo "es un dos";
        break;
    case 3:
        echo "es un tres";
        break;
    default:
        "es otro numero";
}

$miArray [] = 0;
$miArray[0] = 1;

$miArray = [0, 4, 5, 8, 2];

var_dump(
   $miArray 
);
for ($i = 0; $i < 5; $i++){
    $otroArray[] = $i + $i;
}

echo "\n\n";
print_r ($otroArray);

var_dump ($otroArray);

echo "\n\nAsociativos\n";

$persona = array (
    "nombre" => 'David' ,
    "apellido" => 'Martinez',
    "localidad" => 'Ponferrada'
);

echo $persona['nombre'];
echo "\n\n";
foreach ($persona as $clave => $campo) {
    echo $clave . " = " . $campo . "\n";
}


$miArray = [0, 4, 5, 8, 2];

$miArray[0] = [2,4,6];
$miArray[1] = [2,3,5, 7,11];
$miArray[2] = [1,3,5];
$miArray[3] = [ 3, 6, 9];
$miArray[4] = [10,20,30,40];


var_dump( $miArray);

$clase = [];
$clase[] = array (
    "nombre" => "Eduardo",
    "nota" => 8
);

$clase[] = array (
    "nombre" => "Antonio",
    "nota" => 3
);
$clase[] = array (
    "nombre" => "María",
    "nota" => 5
);
$clase[] = array (
    "nombre" => "Patricia",
    "apellido" => "Sanz",
    "nota" => 9
);

var_dump($clase);

echo "con FOR \n\n";

for ($i = 0; $i < sizeof($clase); $i++) {
    //var_dump ($clase[$i]);
    echo "============== Nombre del alumno: " . $clase[$i]['nombre'] . "\n";
    
    foreach ($clase[$i] as $clave => $valor) {
        echo "$clave : $valor \n";
    }
}
?>

