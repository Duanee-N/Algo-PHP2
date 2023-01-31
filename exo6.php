<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($test){
    echo "<label for='pet-select'>Sélectionnez : </label>
    <select>";
    foreach($test as $select){
        echo "<option>".$select."</option>";
    }
    echo "</select>";
}

alimenterListeDeroulante($elements);

?>