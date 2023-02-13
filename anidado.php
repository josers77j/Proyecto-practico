<?php 
$peso = 80.5;
$altura = 1.75;
if($peso <= 80 && $altura < 1.80)
echo "no cumples los requisitos";
else if($peso > 80 && $altura > 1.80){
    echo "bienvenido al equipo";
}
else if($peso = 80 && $altura = 1.80){
    echo "bienvenido al equipo";
}
else{
echo "no estas apto para jugar en el equipo";
}

?>