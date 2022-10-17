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


    for ($i = 0; $i < 5; $i++) {

       escribeTexto($i);
        esPar($i, true, null, null);
       echo "\n\n";
    }

echo "ahora imprimos la llamada a 7 y 8 \n";
     esPar(8, null, null, 3);
     esPar(7 , null, null, 3);
    echo "\n\n\n\n\n";
 


    function saluda () {
        echo "Hola!\n";
    }

    function escribeTexto ($texto) {
        echo $texto . "\n";
       
    }
    
    
    //function esPar ($i) {}
    /**
     * 
     * 
     * Doc de función
     * @param $i es un número
     * @pintar $pintar es booleano de si pinto o no
     */
    function esPar ($i, $pintar = null) {
       
        $ret = false;
        if ($i % 2 == 1) {
            // echo "es impar \n";
            $ret = false;
        }
        else {      
            //echo "es par \n";
            $ret = true;
        }


        
        
        if ($pintar == true){ // Pinto si es impar o no
            if ($ret == false) {
                echo "es impar \n";
                return false;
            }
            else {
                echo "es par \n";
                return true;
            }
            
        }
        else {
            return $ret;
        }
        //return $ret; 
    }  
     

    // Una funcion que una dos palabras con " y "
    // "alto" "bajo" -> "alto y bajo"

    function unirPalabras ($palabra1, $palabra2) {
        return "$palabra1 y $palabra2"; 
        
    }

  
     $texto = unirPalabras ("alto", "bajo");
     echo "Mi texto es " . $texto .  "!\n\n" ;

     echo strpos("String", "t");
     
     echo  "\n\n" ;






    $numero1 = 3;
    $numero2 = 5; 
    function cuadrados ($num1, $num2) {
        $num1 += 8;
        echo "Numero (dentro de la funcion) $num1 \n";
        return [$num1 * $num1, $num2 * $num2];
    }

    function cuadrados2 (&$num1, &$num2) {
        //return [$num1 * $num1, $num2 * $num2];
        $num1 *= $num1;
        $num2 *= $num2;
        return true; // Devuelvo OK porque todo ha ido bien
    }

    $cuadrados = cuadrados2($numero1, $numero2 );
    echo "Numero (fuera de la funcion) $numero1 \n";
      
    var_dump ($cuadrados);
    echo "Despues de Var_dump \n\n";
    echo "Numeros $numero1 y $numero2 \n";

    cuadrados (3, 8);
   // cuadrados2 (3, 8);

   function sumatorio (...$num) {
    // array asociativo
    $suma = 0;

    foreach ($num as $numero) {
        $suma += $numero;
    }
    return $suma;

   }
   echo "\nDos numeros ". sumatorio (1,3);
   echo "\nMuchos numeros ". sumatorio (1,3, 5, 7, 9, 11 ,13);
   echo "\n\n";

  if (isset($cuadrados))  { // compruebo si la variable está definida
    echo " Variable existe\n";
  }
  else {
    echo "Variable no existe\n";
  }

  unset ($cuadrados);

  //echo $cuadrados;

  if (empty ($texto)) { // $texto == '' || $texto == null
    echo "Está vacía\n";
  }
  else {
    echo "Tiene valor\n";
  }

  echo strtolower ("A MINñúsclas\n");
  echo strtoupper ("A MAYñúsclas\n");

  echo ucwords("david martinez\n");
  echo ucfirst ("david martinez\n");

  var_dump (explode(";", "nombre;apellido;telefono;edad"));

  echo sprintf("Mi nombre es %s \n", "David"); // %s =  strings %d = entero %g = con decimales 

  echo str_replace("MiAcademia", "Aulab",  "Bienvenidos a MiAcademia, donde ofrecemos el curso de PHP específico de MiAcademia porque MiAcademia es mejor.\n");

  echo "$texto longitud " . strlen($texto) .  "\n";

  echo " La cuarta posición de $texto es ". $texto[3] . "\n";

  echo getcwd() . "\n\n";
  echo rand(0, 100) . "\n";
  echo rand(0, 100) . "\n";
  echo rand(0, 100) . "\n";
  echo rand(0, 100) . "\n";
  echo rand(0, 100) . "\n";
  echo rand(0, 100) . "\n";
  echo rand(0, 100) . "\n";
  echo rand(0, 100) . "\n";

  $nombres = ['Ivan', 'Adrian', 'Manuel', 'Jeiny', 'Fayna'];

  function aleatorio (&$nombres = []) {
    if (is_array($nombres)) {
        $longitud = sizeof($nombres);
        if ($longitud <= 0) {
            return "Se ha recibido un array vacío";
        
        }
         elseif (array_values($nombres)  !== $nombres) {
            return "Se ha recibido un array asociativo";
        } 
        else {
            return $nombres[rand(0, $longitud - 1)]; 
        }
        
    }
    else {
        return "No se ha recibido un array";
    }

  }

for ($i= 0; $i < 20; $i++) {
    echo aleatorio ($nombres) . "\n";
}

echo aleatorio (3) . "\n";

echo aleatorio ([]) . "\n";

$otroArray = array (
    "nombre" => "david",
    "apellidos" => "martinez"
);


echo aleatorio ($otroArray) . "\n";
//var_dump (array_values($otroArray));
//var_dump ($nombres);
?>