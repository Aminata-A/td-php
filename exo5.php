<?php
function trouverElementsCommuns($tableau1, $tableau2) {
   
    $elementsCommuns = array_intersect($tableau1, $tableau2);  // Utilise array_intersect pour trouver les éléments communs
    return $elementsCommuns;
}

$tableauA = array(1, 2, 3, 4, 5);
$tableauB = array(3, 4, 5, 6, 7);
$resultat = trouverElementsCommuns($tableauA, $tableauB);

echo "Les éléments communs sont : ";
print_r($resultat);
?>
