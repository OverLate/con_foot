<?php

use App\src\Stade;
use PHPUnit\Framework\TestCase; // On importe la classe TestCase de PHPUnit


class TestStade extends TestCase // On crée une classe qui hérite de TestCase
{
    public function testDonneTexte(): void
        // On crée une méthode qui teste la méthode donneTexte()
    {
        $PalaisDesSport = new Stade("PalaisDesSport"); // On crée un objet Stade
        // On teste la méthode donneTexte() de l'objet Stade
        // Faire une assertion = affirmer que quelque chose est vrai
        $this->assertEquals("StadePalaisDesSport", $PalaisDesSport->donneTexte());
    }


    public function testnom_stade(): void
    {
        $PalaisDesSport = new Stade("PalaisDesSport");
        $this->assertEquals("PalaisDesSport", $PalaisDesSport->getNom());
    }


    public function testAll(): void
    {
        $PalaisDesSport = new Stade("PalaisDesSport");
        $PalaisDesSport->setNom("PalaisDesSport2");
        $this->assertEquals("PalaisDesSport2", $PalaisDesSport->getNom());
    }

}
