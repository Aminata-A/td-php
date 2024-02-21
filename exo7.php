<?php
function concatenerChaines($tableau) {
    $nouvelleChaine = implode('', $tableau); //implode permet de concaténer les éléments d'un tableau
    return $nouvelleChaine;
}

$mesChaines = array("Bonjour", "Amina", "Regarde", "Chanter_");
$resultat = concatenerChaines($mesChaines);

echo "La nouvelle chaîne est : " . $resultat;     // opérateur de concaténation (.)

?>
