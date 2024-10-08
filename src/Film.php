<?php

namespace App;

class Film {
    // Attributs
    private string $titre;
    private string $realisateur;
    private \DateTime $dateSortie;
    private array $acteurs = [];

    //Méthodes
    //Constructeur permettant de créer des instances d'une classe
    //INSTANCIATION
    public function __construct(string $titre, string $realisateur, \DateTime $dateSortie)
    {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;
    }

    // Accesseurs (getters)
    public function getTitre() : string
    {
        return $this->titre;
    }

    public function getRealisateur() : string
    {
        return $this->realisateur;
    }

    public function getdateSortie() : \DateTime
    {
        return $this->dateSortie;
    }

    public function getAnicennete() : int
    {

        $dateJour = new \DateTime();
        $intervalle = $dateJour->diff(($this->dateSortie));
        return $intervalle->y;
    }

    public function ajouterActeur(Acteur $acteur) : void {
        foreach ($this->acteurs as $act) {
            if ($acteur == $act){
                throw new \Exception("Le nom est invalide");
            }
        }
        $this->acteurs[] = $acteur;
    }

    /**
     * @return Acteur[]
     */
    public function getActeurs(): array
    {
        return $this->acteurs;
    }
}