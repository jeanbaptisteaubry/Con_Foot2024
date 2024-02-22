<?php


use App\class\Humain;
use PHPUnit\Framework\TestCase;

class TestHumain extends TestCase
{
    public function testNom()
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $this->assertEquals("Giroud", $giroud->getNom());
    }

    public function testPrenom()
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $this->assertEquals("Olivier", $giroud->getPrenom());
    }

    public function testDateNaissance()
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $this->assertEquals("30/09/1986", $giroud->getDateNaissance()->format("d/m/Y"));
    }

    public function testDonneTexte()
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $this->assertEquals("Prénom : Olivier Nom : Giroud Date de naissance 30/09/1986", $giroud->donneTexte());
    }

    public function testExceptionNom()
    {
        $this->expectException(Exception::class);
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $giroud->setNom("");
    }

    public function testExceptionPreNom()
    {
        $this->expectException(Exception::class);
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $giroud->setPrenom("");
    }

}
