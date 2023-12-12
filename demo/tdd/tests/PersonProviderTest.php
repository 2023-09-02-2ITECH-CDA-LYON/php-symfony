<?php
namespace App\tests;

use App\Person;
use PHPUnit\Framework\TestCase;

class PersonProviderTest extends TestCase {

    public function ageProvider() {
        return [
            [10, 'Enfant'],// $age, $expected
            [17, 'Adolescent'],
            [18, 'Majeur'],
            [50, 'Senior'],
            [9, 'Enfant'],
            [13, 'Adolescent'],
            [25, 'Majeur'],
            [60, 'Senior'],
        ];
    }

    /**
     * @dataProvider ageProvider
     */
    public function testAge ($age, $expected) {
        // Arrange : fournir tout ce qui est nécessaire (état initial)
        $person = new Person();
        // Act : appel de votre fonction
        $result = $person->status($age);
        // Assert : vérifications
        $this->assertEquals($expected, $result);
    }

    public function testAgeNotBeChild() {
        $person = new Person();
        // Act : appel de votre fonction
        $result = $person->status(18);
        // Assert : vérifications
        $this->assertNotEquals('Enfant', $result);
    }
}