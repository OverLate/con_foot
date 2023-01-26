<?php

use App\src\Selectionneur;
use PHPUnit\Framework\TestCase;

class TestSelectionneur extends TestCase
{
    public function testDonneTexte(): void
        // On crée une méthode qui teste la méthode donneTexte()
    {
        $Deschamps = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15")); // On crée un objet Humain
        // On teste la méthode donneTexte() de l'objet Humain
        // Faire une assertion = affirmer que quelque chose est vrai
        $this->assertEquals("Selectionneur Deschamps Didier date de naissance 15/10/1968", $Deschamps->donneTexte());
    }

    public function testGetNom(): void
    {
        $Deschamps = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"));
        $this->assertEquals("Deschamps", $Deschamps->getNom());
    }

    public function testGetPrenom(): void
    {
        $Deschamps = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"));
        $this->assertEquals("Didier", $Deschamps->getPrenom());
    }

    public function testGetDateNaissance(): void
    {
        $Deschamps = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"));
        $this->assertEquals("1968-10-15", $Deschamps->getDateNaissance()->format("Y-m-d"));
    }

    public function testSetNom(): void
    {
        $Deschamps = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"));
        $Deschamps->setNom("Deschamps2");
        $this->assertEquals("Deschamps2", $Deschamps->getNom());
    }

    public function testSetPrenom(): void
    {
        $Deschamps = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"));
        $Deschamps->setPrenom("Didier2");
        $this->assertEquals("Didier2", $Deschamps->getPrenom());
    }

    public function testSetDateNaissance(): void
    {
        $Deschamps = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"));
        $Deschamps->setDateNaissance(new DateTime("1968-10-15"));
        $this->assertEquals("1968-10-5", $Deschamps->getDateNaissance()->format("Y-m-d"));
    }

    public function testAll(): void
    {
        $Deschamps = new Selectionneur("Deschamps", "Didier", new DateTime("1968-10-15"));
        $Deschamps->setNom("Deschamps2");
        $this->assertEquals("Deschamps2", $Deschamps->getNom());
        $Deschamps->setPrenom("Didier2");
        $this->assertEquals("Didier2", $Deschamps->getPrenom());
        $Deschamps->setDateNaissance(new DateTime("1968-10-15"));
        $this->assertEquals("1968-10-15", $Deschamps->getDateNaissance()->format("Y-m-d"));
        $this->assertEquals("Selectionneur Deschamps2 Didier2 date de naissance 15/10/1968", $Deschamps->donneTexte());
    }
}