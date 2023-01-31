<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php

$elements=array("Choix 1"=> 1, "Choix 2"=>0, "Choix 3"=>1);

function genererCheckbox($test){
    echo "<fieldset>
    <legend>Sélectionnez :</legend>";
    foreach($test as $element=>$check){
        if ($check==0){
            echo "<div>
            <input type='checkbox'>
            <label>".$element."</label>
            </div>";
        }else{
            echo "<div>
            <input type='checkbox' checked>
            <label>".$element."</label>
            </div>";
        }
    }
    echo "</fieldset>";
}

genererCheckbox($elements);

?>