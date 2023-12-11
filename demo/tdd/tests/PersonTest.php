<?php
namespace App\tests;

use App\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase {
    public function testAgeUnder10 () {
        // Arrange : fournir tout ce qui est nécessaire (état initial)
        $person = new Person();
        // Act : appel de votre fonction
        $result = $person->status(10);
        // Assert : vérifications
        $this->assertEquals('Enfant', $result);
    }

    public function testAgeAdo () {
        // Arrange : fournir tout ce qui est nécessaire (état initial)
        $person = new Person();
        // Act : appel de votre fonction
        $result = $person->status(15);
        // Assert : vérifications
        $this->assertEquals('Adolescent', $result);
    }

    public function testAgeMajeur () {
        // Arrange : fournir tout ce qui est nécessaire (état initial)
        $person = new Person();
        // Act : appel de votre fonction
        $result = $person->status(18);
        // Assert : vérifications
        $this->assertEquals('Majeur', $result);
    }

    public function testAgeSenior () {
        // Arrange : fournir tout ce qui est nécessaire (état initial)
        $person = new Person();
        // Act : appel de votre fonction
        $result = $person->status(50);
        // Assert : vérifications
        $this->assertEquals('Senior', $result);
    }
}