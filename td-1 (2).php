<?php
//Exercice 1
$tableau = array(2, 4, 6, 10);

$produit = 1;

foreach ($tableau as $element) {
    $produit *= $element;
}

echo "Le produit de tous les éléments du tableau est : " . $produit;

?>