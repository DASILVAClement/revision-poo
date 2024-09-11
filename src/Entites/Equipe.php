<?php

namespace App\Entites;

class Equipe{
    private string $nom;
    private int $nbLikes;


    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->nbLikes = 0;
    }


    public function getNom(): string
    {
        return $this->nom;
    }


    public function getNombreLikesPhoto(): int
    {
        return $this->nbLikes;
    }

    public function incrementerNbLikes() : void {
        $this->nbLikes ++;
    }

}