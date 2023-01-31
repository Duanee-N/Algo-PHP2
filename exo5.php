<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php

$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($test){
    echo "<form>";
    foreach ($test as $infos){
        echo "<div>
            <label for='name'>".$infos." : <br> </label>
            <input type='text'>
        </div>";
    }
    echo "</form>";
}

afficherInput($nomsInput);

?>