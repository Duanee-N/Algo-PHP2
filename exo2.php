<h1>Exercice 2</h1>

<p>Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée. Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales); </p>

<h2>Résultat</h2>

<?php

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

function afficherTableHTML($test){
    ksort($test);
    echo "<table border=1 style='border-collapse:collapse;'>
    <tr>
    <th>Pays</th>
    <th>Capitales</th>
    </tr>";
    foreach($test as $pays=>$capitale){
        echo "<tr>
          <td>".mb_strtoupper($pays)."</td>
          <td>$capitale</td>
          </tr>";
        }
        echo "</table>";
}

afficherTableHTML($capitales);

?>