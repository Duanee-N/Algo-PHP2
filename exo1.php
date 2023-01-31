<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge</p>

<h2>Résultat</h2>

<?php

$txt="Mon texte en paramètre";

function convertirMajRouge($texte){
    $texte=mb_strtoupper($texte);
    echo "<span style='color:red;'>".$texte."</span>";
}

convertirMajRouge($txt);

?>