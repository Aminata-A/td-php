<?php
function compterVoyelles($tableau) {
    $voyelles = array('a', 'e', 'i', 'o', 'u', 'y');
    $totalVoyelles = 0;

    foreach ($tableau as $chaine) {
        $chaineMinuscule = strtolower($chaine); //strtolower Convertit la chaîne en minuscules
        $voyellesDansChaine = array_intersect(str_split($chaineMinuscule), $voyelles);//array_intersect comparait deux tableaux  ou + et renvoie leurs correspondances ;  str_split divise une chaine en un tableau
        $totalVoyelles += count($voyellesDansChaine); //count Compte tous les éléments d'un tableau
    }

    return $totalVoyelles;
}

$mesChaines = array("Bonjour", "Recheche", "Compter", "Voyelles", "Resultat");
$nombreDeVoyelles = compterVoyelles($mesChaines);

echo "Le nombre total de voyelles dans le tableau est : " . $nombreDeVoyelles;
?>
