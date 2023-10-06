<?php
#variables numericas
$numero=5;
echo"Esto es una variable de tipo numerico $numero";
echo "<br></br>";
var_dump($numero);

#variable de texto
$texto = "Angie";
echo"Esto es una variable de tipo numerico $texto";
echo "<br></br>";
var_dump($texto);

#variables boleana
$boleana = true;
echo "Variable boleana $boleana";
echo "<br></br>";
var_dump($boleana);

#variable de tipo arreglo
$colores = array("Azul","Morado");
echo"Esto es una variable de tipo numerico $colores[0],$colores[1]";
echo "<br></br>";
var_dump($colores);

#variables de tipo arreglo con propiedades
$carnes = array("carne1"=>"res", "carne2"=>"cerdo");
echo "variable de arreglo con propiedades: $carnes[carne1]";
echo "<br></br>";
var_dump($carnes);

#variables de tipo objeto
$frutas = (object) ["fruta1"=>"Pera","fruta2"=>"Manzana"];
echo "Esto es una variable de tipo objeto $frutas->fruta1";
echo "<br></br>";
var_dump($frutas);

#function sin parámetros
function saludo(){
    echo"Hola Mundo tardes <br>";
}
saludo();

#function con parámetros
function despedida($adios){
    echo $adios."<br>";
}
despedida("Hasta el lunes aprendices adso");

#function de retorno
function retorno($retornar){
    return $retornar;
}
echo retorno("lo que quiera retornar");
echo "<br></br>";

#condiciones

$a=5;
$b=10;

if($a>$b){
    echo "El numero $a es mayor que el numero$b";
}

else if($a==$b){
    echo "El numero $a es igual que el numero$b";
}
else{
    echo " a es menor que b";
}
echo "<br></br>";

#switch: se manejan por medio de casos (comillas sencilas para casos)
$dia="Lunes"; 

switch($dia){
    case 'Domingo';
    echo "Voy a descansar";
    break;

    case 'Viernes';
    echo "Voy a jugar";
    break;

    case 'Sabado';
    echo "Voy a trabajar";
    break;

    default: echo "Voy a estudiar al sena y a jugar";
}
echo "<br></br>";
#ciclos
#while
$m=1;

while($m<=5){
    echo $m;
    $m++;
}
#do while
$s=1;

do{
    echo $s;
    $s++;
}
while($s<5);
echo "<br></br>";

#ciclo for

for($i=1; $i<=5; $i++){
    echo $i;
}



?>


