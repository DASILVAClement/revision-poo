<?php

require_once "vendor/autoload.php";
use PHPUnit\Framework\TestCase;
use App\Validateur;

$validateur = new Validateur();
$nombre = 10;
$mdp = "Bonjour123";

if ($validateur->verifieNombre()($nombre)){
    echo "Le nombre $nombre est valide";
}else{
    echo "Le nombre $nombre est invalide";
}

echo PHP_EOL;
$nombre = -12;

//Avec gestion des Exceptions
try {
    //Code surveillé (susceptible de lancer une exception)
    $validateur->verifieNombre2($nombre);
    echo "Le nombre $nombre est valide";
}catch (\Exception $e){
    echo $e->getMessage();
}

echo PHP_EOL;

try {
    $validateur->verifieMotDePasse($mdp);
    echo "Le mot de passe est valide";
}catch (\Exception $e){
    echo $e->getMessage();
}
