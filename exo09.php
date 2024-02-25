<?php
function calculer_frequence($texte) {
    $frequence = [];
    $texte = strtolower($texte); // Convertir en minuscules pour éviter les doublons
    $caracteres_ignores = [' ', ',', ':', ';', '.', "'", '-', '!', '?'];

    for ($i = 0; $i < strlen($texte); $i++) {
        $caractere = $texte[$i];
        if (!in_array($caractere, $caracteres_ignores)) {
            if (!array_key_exists($caractere, $frequence)) {
                $frequence[$caractere] = 1;
            } else {
                $frequence[$caractere]++;
            }
        }
    }
    return $frequence;
}

$texte_poeme = file_get_contents('albatros.txt'); // Remplacez par votre propre texte
$resultats = calculer_frequence($texte_poeme);

foreach ($resultats as $lettre => $frequence) {
    echo "$lettre : $frequence\n";
}
?>
