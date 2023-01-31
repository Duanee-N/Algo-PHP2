<h1>Exercice 8</h1>

<p>Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg. Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.</p>

<h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($url, float $a){
    $repeterImage=0;
    while ($repeterImage<$a){
       echo "<img src='".$url."'>";
       $repeterImage++;
    }
}

repeterImage($url,4);

?>