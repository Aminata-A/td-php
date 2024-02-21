<?php

function calculerMediane(array $tableau) : int {
  sort($tableau);

  $longueur = count($tableau);

  if ($longueur === 0) {
    return 0;
  }

  if ($longueur % 2 === 0) {
    $milieu1 = $longueur / 2 - 1;
    $milieu2 = $milieu1 + 1;
    return ($tableau[$milieu1] + $tableau[$milieu2]) / 2;
  }

  else {
    $milieu = ($longueur - 1) / 2;
    return $tableau[$milieu];
  }
}

$tableau = [1, 3, 5, 7, 9];
$mediane = calculerMediane($tableau);

echo "La médiane du tableau est : $mediane";

?>
