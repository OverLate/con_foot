<?php
namespace App\src;

Use DateTime;

class Joueur
{
    //Liste des propriétés
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;

    //Constructeur => Sert à créer l’objet
    public function __construct(string $nom, string $prenom, DateTime $dateNaissance, int $numMaillot)
    {
        //On initialise les propriétés
        //$this signifie “cette instance”, donc l'objet en cours
        $this->nom = $nom; //$this->nom est la propriété nom de l'objet en cours
        //$nom est le paramètre de la fonction
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->numMaillot = $numMaillot;
    }

    //Liste des méthodes
    // Comment modifier des propriétés privées ?
    // => On crée des méthodes qui s'appelle des accesseurs (getters) et des mutateurs (setters)
    // Les assesseurs permettent de lire les propriétés privées

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    public function getNumMaillot(): int
    {
        return $this->numMaillot;
    }

    //Les mutateurs permettent de modifier les propriétés privées
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function setDateNaissance(DateTime $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function setNumMaillot(int $numMaillot): void
    {
        $this->numMaillot = $numMaillot;
    }

    // => On peut aussi créer des méthodes qui ne modifient pas les propriétés mais qui les utilisent
    public function donneTexte(): string
    {
        return "Joueur " . $this->nom . " " . $this->prenom . " date de naissance " . $this->dateNaissance->format('d/m/Y' ." numéro de maillot " . $this->numMaillot);
    }
}