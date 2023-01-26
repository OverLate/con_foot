<?php

namespace App\src;



class Stade
{
    //Liste des propriétés
    private string $nom_stade;

    //Constructeur => Sert à créer l’objet
    public function __construct(string $nom_stade)
    {
        //On initialise les propriétés
        //$this signifie “cette instance”, donc l'objet en cours
        $this->nom_stade = $nom_stade; //$this->nom est la propriété nom de l'objet en cours
        //$nom est le paramètre de la fonction
    }

    //Liste des méthodes
    // Comment modifier des propriétés privées ?
    // => On crée des méthodes qui s'appelle des accesseurs (getters) et des mutateurs (setters)
    // Les assesseurs permettent de lire les propriétés privées

    public function getNom(): string
    {
        return $this->nom_stade;
    }
    //Les mutateurs permettent de modifier les propriétés privées
    public function setNom(string $nom_stade): void
    {
        $this->nom_stade = $nom_stade;
    }


    // => On peut aussi créer des méthodes qui ne modifient pas les propriétés mais qui les utilisent
    public function donneTexte(): string
    {
        return "Stade" . $this->nom_stade;
    }
}