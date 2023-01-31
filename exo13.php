<h1>Exercice 13</h1>

<p>Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: marque,  modèle,  nbPorteset vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un véhicule. Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests  pour  vérifier  la  cohérence  de  la  classe Voiture. Vous  devez  afficher  les  tests  et  les éléments suivants.</p>

<h2>Résultat</h2>

<?php

class Voiture 
{
    public $_marque;
    public $_modele;
    public $_nbPortes;
    public $_vitesseActuelle=0;
    public $_acceleration=0;
    public $_ralentissement=0;


    public function __construct($_marque, $_modele, $_nbPortes)
    {
        $this->_marque = $_marque;
        $this->_modele = $_modele;
        $this->_nbPortes = $_nbPortes;
    } 

    public function getMarque()
    {
        return $this->_marque;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function getNbPortes(){
        return $this->_nbPortes;
    }

    public function infos(){
        echo "Nom et modèle du véhicule : ".$this->getMarque()." ".$this->getModele()."<br>";
        echo "Nombre de portes : ".$this->getNbPortes()."<br>";

        if($this->_vitesseActuelle==1){
            echo "Le véhicule ".$this->_marque." ".$this->_modele." est démarré. <br>";
        } else{
            echo "Le véhicule ".$this->_marque." ".$this->_modele." est à l'arrêt. <br>";
        }

        echo "Sa vitesse actuelle est de ".$this->_acceleration." km/h.";

    }

    public function demarrer()
    {
        if ($this->_vitesseActuelle==0){
            echo "Le véhicule ".$this->_marque." ".$this->_modele." démarre. <br>";
            echo $this->stopper();
        } else{
            echo "Le véhicule ".$this->_marque." ".$this->_modele." démarre. <br>";
        }
    }

    public function accelerer()
    {
        if($this->_vitesseActuelle==1){
            echo "Le véhicule ".$this->_marque." ".$this->_modele." accèlère de : ".$this->_acceleration." km/h. <br>";
        } else{
            echo "Le véhicule ".$this->_marque." ".$this->_modele." veut accélérer de : ".$this->_acceleration." km/h. <br> Pour accélérer, il faut démarrer le véhicule ".$this->_marque." ".$this->_modele." !<br>";
        }
    }

    public function stopper()
    {
        if ($this->_vitesseActuelle==0){
            echo "Le véhicule ".$this->_marque." ".$this->_modele." est stoppé. <br>";
        }
    }

    public function vitesse(){
        echo "La vitesse du véhicule ".$this->_marque." ".$this->_modele." est de : ".$this->_acceleration." km/h.<br>";
    }

    public function ralentirVitesse (){
        $_nouvelleVitesse= $this->_acceleration - $this->_ralentissement;
        $this->_acceleration=$_nouvelleVitesse;
        echo "Le véhicule ".$this->_marque." ".$this->_modele." ralentit de : ".$this->_ralentissement." km/hm. Sa nouvelle vitesse est de : ".$_nouvelleVitesse." km/h. <br>";
    }
}

$v1= new Voiture ("Peugeot","408",5);
$v1->_vitesseActuelle = 1;
$v1->_acceleration = 50;

$v2= new Voiture ("Citroën","C4",3);
$v2->_vitesseActuelle = 0;
$v2->_acceleration = 20;

echo $v1->demarrer();
echo $v1->accelerer();
echo $v2->demarrer();
echo $v2->accelerer();

$v2->_acceleration = 0;

echo $v1->vitesse();
echo $v2->vitesse();

$v1->_ralentissement = 20;
echo $v1->ralentirVitesse();

echo "<br><br> Infos véhicule 1 <br> ************** <br>";
echo $v1->infos()."<br>";

echo "<br><br> Infos véhicule 2 <br> ************** <br>";
echo $v2->infos()."<br>";