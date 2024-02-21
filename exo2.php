<?php
function supprimerDoublons($tableau) {
    $tableauSansDoublons = array_unique($tableau);
    return $tableauSansDoublons;
}

$langages = array("PHP", "Java", "PHP", "HTML", "CSS", "HTML");
$unique = supprimerDoublons($langages);

print_r($unique);
?>
