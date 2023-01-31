<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat</h2>

<?php

$nomsRadio=array("Monsieur", "Madame", "Mademoiselle");

function afficherRadio($test){
    echo "<legend>Sélectionnez :</legend>";
    foreach ($test as $element){
        echo "<div>
          <input type='radio' name='drone'>
          <label>".$element."</label>
        </div>";
    }
}

afficherRadio($nomsRadio);

?>