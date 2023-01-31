<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie). Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes.</p>

<h2>Résultat</h2>

<?php

class Voiture
{
    public $_marque;
    public $_modele;

    public function __construct($_marque, $_modele)
    {
        $this->_marque = $_marque;
        $this->_modele = $_modele;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function getInfos(){
        echo "Nom et modèle du véhicule : ".$this->getMarque()." ".$this->getModele()."<br>";
    }
}

class VoitureElec extends Voiture
{
    public $_autonomie=1;

    public function __construct($_marque, $_modele, $_autonomie)
    {
        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_autonomie = $_autonomie;
    }

    public function getInfos(){
        echo "Nom et modèle du véhicule : ".$this->getMarque()." ".$this->getModele()."<br>";
        if($this->_autonomie>0){
            echo "Autonomie : ".$this->_autonomie;
        }
    }
}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo "Infos véhicule 1 <br> ************** <br>";
echo $v1->getInfos()."<br>";

echo "<br><br> Infos véhicule 2 <br> ************** <br>";
echo $ve1->getInfos()."<br>";