<?php
function rotationDroite($tableau, $positions) {
    $taille = count($tableau);
    $positions %= $taille; 

    for ($i = 0; $i < $positions; $i++) {
        $dernierElement = array_pop($tableau);
        array_unshift($tableau, $dernierElement);
    }

    return $tableau;
}

$monTableau = array(1, 2, 3, 4, 5);
$positionsARotater = 2;
$resultat = rotationDroite($monTableau, $positionsARotater);

print_r($resultat);
?>
