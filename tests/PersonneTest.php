<?php

use PHPUnit\Framework\TestCase;
class PersonneTest extends TestCase {
    private \App\Personne $personne;

    protected function setUp() : void
    {
        parent::setUp();
        $this->personne = new \App\Personne("Emile");
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function likerPhoto_AjoutLikePhoto_True() {
        // Arrange
        $equipe = new \App\Entites\Equipe("PSG");
        $resultat = 1;
        // Act
        $this->personne->liker($equipe);
        // Assert
        $this->assertEquals($equipe->getNombreLikesPhoto(), $resultat);
    }
}