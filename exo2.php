<?php
//Exercice2:
function supprimerDoublons($tableau) {
    $tableauSansDoublons = array_unique($tableau);
    return $tableauSansDoublons;
}

$monTableau = array(1, 1, 2, 2, 3, 4);
$tableauSansDoublons = supprimerDoublons($monTableau);

echo "Tableau sans doublons : ";
foreach ($tableauSansDoublons as $element) {
    echo $element . " ";
}


echo "Tableau sans doublons :\n";
foreach ($tab as $value) {
    echo $value . "\n";
}
?>