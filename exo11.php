<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaîne de caractère représentant une date.</p>

<h2>Résultat</h2>

<?php

$date=new DateTime();

function formaterDateFr($date){
    $date = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    $date->setPattern('EEEE dd MMMM YYYY');
    echo $date->format(new DateTime());
}

formaterDateFr($date);

?>