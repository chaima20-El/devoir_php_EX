<?php


$Commandes = file ("ex2.txt") ;

$NombreCommandes = count ($Commandes) ;

if ($NombreCommandes == 0)

{

echo "<p align='CENTER'> <font face='Arial' size='3' color='#FF0000'> <b> Il n'y a pas de commandes en attente.  </b> </font> </p>" ;

}

for ($i = 0; $i < $NombreCommandes ; $i ++)

{

echo '<span style="font-weight : bold">' . $Commandes[$i] . " </span> </p>" ;

}

?>