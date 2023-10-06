<?php
$Automovil1=(object)["marca"=>"chevrolet", "modelo"=>"camaro"];
$Automovil2=(object)["marca"=>"toyota", "modelo"=>"prado"];

function mostrar($automovil){
    echo " Este es $automovil->marca, modelo $automovil->modelo";
}
mostrar($Automovil1);
echo "<br></br>";
mostrar($Automovil2);

?>
