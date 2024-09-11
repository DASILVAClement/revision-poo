<?php

use PHPUnit\Framework\TestCase;

class ValidateurTest extends TestCase {

    private \App\Validateur $validateur;
    protected function setUp() : void
    {
        //Cette méthode est appelé lors de l'exécution de chaque test
        $this->validateur = new \App\Validateur();
    }


    public function testOK(){
        //Arrange

        //Act

        //Assert
        $this->assertTrue(true);
    }

    #[\PHPUnit\Framework\Attributes\Test]

    public function verifierNombre2_NombrePositif_true() {
        //Arrange
        $validateur = new \App\Validateur();
        $nombre = 10;
        //Act
        $resultat = $this->validateur->verifieNombre2($nombre);
        //Assert
        $this->assertTrue($resultat);
    }

    #[\PHPUnit\Framework\Attributes\Test]

    public function verifierNombre2_NombreNegatifZero_Exception() {
        //Vérification de l'Exception
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Le nombre est invalide");
        //Arrange
        $validateur = new \App\Validateur();
        $nombre = -5;
        //Act
        $resultat = $this->validateur->verifieNombre2($nombre);
        //Assert
        $this->assertTrue($resultat);
    }
}