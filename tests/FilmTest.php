<?php

use PHPUnit\Framework\TestCase;

class FilmTest extends TestCase {

    private \App\Film $film;

    protected function setUp() : void
    {
        $this->film = new \App\Film("Titanic","James Cameron",new DateTime("2000-10-10"));
    }

    public function testOK(){
        //Arrange

        //Act

        //Assert
        $this->assertTrue(true);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function verifieNom_NomPasDouble_Exception(){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Le nom est invalide");
        //Arrange
        $acteur = new \App\Acteur("Pierre","Paul");
        $this->film->ajouterActeur($acteur);
        //Act
        $this->film->ajouterActeur($acteur);
    }

    #[PHPUnit\Framework\Attributes\Test]
    public function getAnciennete_DifferenceDate_True() {
        // Arrange
        $dateDiff = 23;
        // Act
        $resultat = $this->film->getAnicennete();
        // Assert
        $this->assertEquals($dateDiff, $resultat);
    }
}