<?php
require_once '../src/Film.php';

//Instancier la classe Film
$film1 = new Film("Oblivion", "Dupond", DateTime::createFromFormat("d/m/Y","12/06/2011"));

echo $film1->getTitre();
echo PHP_EOL;
echo $film1->getAnicennete();
echo PHP_EOL;
$film1->ajouterActeur(new Acteur("AndySport", "Chyssley"));
$film1->ajouterActeur(new Acteur("MaximeMator", "Sermais pas trop fort "));
$film1->ajouterActeur(new Acteur("Hugoal", "Tableau"));
echo PHP_EOL;
print_r($film1->getActeurs());

//Afficher le nom des acteurs
foreach ($film1->getActeurs() as $acteur)
{
    echo $acteur->getNom();
    echo PHP_EOL;
}
