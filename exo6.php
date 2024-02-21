<?php
function elementsSansDoublons($tableau) {
    $tableauSansDoublons = array_unique($tableau);//  array_unique pour supprimer les doublons

    return $tableauSansDoublons;
}

$mesNombres = array(1, 2, 3, 2, 4, 5, 3);
$uniques = elementsSansDoublons($mesNombres);

print_r($uniques);
?>
