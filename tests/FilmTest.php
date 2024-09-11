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

    public function verifieDateFilm_DifferenceDate_
}