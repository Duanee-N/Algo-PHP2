<h1>Exercice 10</h1>

<p>En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ». Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<h2>Résultat</h2>

<?php

$nomsInput = array("Nom","Prénom","Adresse e-mail", "Ville");

function afficherInput($test){
    echo "<form>";
    foreach ($test as $infos){
        echo "<div>
            <label for='name'>".$infos." : <br> </label>
            <input type='text'>
        </div><br>";
    }
    echo "</form>";
}

afficherInput($nomsInput);

$elements = array("Homme","Femme");

function alimenterListeDeroulante($test){
    echo "<label for='pet-select'>Sexe : </label>
    <select>";
    foreach($test as $select){
        echo "<option>".$select."</option>";
    }
    echo "</select>";
}

alimenterListeDeroulante($elements);

echo "<br><br>";

$nomsRadio=array("Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet");

function afficherRadio($test){
    echo "<legend>Formation :</legend>";
    foreach ($test as $element){
        echo "<div>
          <input type='radio' name='drone'>
          <label>".$element."</label>
        </div>";
    }
}

afficherRadio($nomsRadio);

$submitButton="Submit";

function button($test){
    echo "<button type='button'>".$test." </button>";
}

echo "<br><br>";

button($submitButton);

?>