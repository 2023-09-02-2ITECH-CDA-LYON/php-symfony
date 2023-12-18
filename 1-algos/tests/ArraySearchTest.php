<?php
declare(strict_types=1);

namespace Glodie\Algos\Tests;

use PHPUnit\Framework\TestCase;
use Glodie\Algos\ArraySearch;

/**
 * @covers Glodie\Algos\ArraySearch
 */
class ArraySearchTest extends TestCase {

    /**
     * @dataProvider searchValuesProvider
     */
    public function testFindValue($key, $data, $expected) {
        $this->assertEquals($expected, ((new ArraySearch())->findValue($key, $data)));
    }

    public function testFindValueException() {
        $this->expectException(\Error::class);
        (new ArraySearch())->findValue(10, ["1", "1" => "1"]);
    }

    /**
     * @dataProvider searchKeysProvider
     */
    public function testFindKey($v, $data, $expected) {
        $this->assertEquals($expected, ((new ArraySearch())->findKey($v, $data)));
    }

    public function testFindKeyException() {
        $this->expectException(\Error::class);
        (new ArraySearch())->findKey(1, ["1", "1" => "1", 3]);
    }

    public function testPopulation() {
        // Arrange
        $data = array(
            'france' => 350,
            'belgique' => 100,
            'allemagne' => 250,
            'italie' => 200,
            'pays-bas' => 100
        );
        //Assert
        $this->assertSame(['population' => 1000, 'countries' => 5], (new ArraySearch())->countPopulation($data));
    }

    /**
     * @dataProvider numbersProvider
     *
     * @return void
     */
    public function testFindValueFromRand(int $nb, bool $expected) {
        $arraySearch = $this->getMockBuilder(ArraySearch::class)
            ->onlyMethods(['findValueFromRand'])
            ->getMock();
        $arraySearch->method('findValueFromRand')
        ->with($nb)
        ->willReturn($expected);
        $result = $arraySearch->findValueFromRand($nb);
        // Assert
        $this->assertEquals($expected, $result);
    }

    public function testGenerateNumbers() {
        $this->assertEquals(10, count((new ArraySearch())->generateNumbers()));
    }

    public function testSliceNumbersMin() {
        $result = (new ArraySearch())->slice(50);
        $this->assertLessThanOrEqual(50, max($result[0]));
    }

    public function testSliceNumbersMax() {
        $result = (new ArraySearch())->slice(10);
        $this->assertGreaterThanOrEqual(10, max($result[1]));
    }

    public function testGenerateNumbersMaxNumber() {
        $this->assertLessThanOrEqual(999, max((new ArraySearch())->generateNumbers(10, 0, 999)));
    }

    public function testGenerateNumbersMinNumber() {
        $this->assertGreaterThanOrEqual(999, max((new ArraySearch())->generateNumbers(10, 999, 10000)));
    }

    public function testGenerateTenNumbers() {
        // Assert
        $this->assertEquals(15, count((new ArraySearch())->generateNumbers(15)));
    }
    public function numbersProvider() {
        return [
            [25, true],
            [100, false],
            [101, false],
            [0, true],
            [78, true]
        ];
    }

    /**
    * @codeCoverageIgnore
    */
    public function searchValuesProvider() {
        return [
            ['age', array('major' => true, 'age' => 36, 'name' => 'fatou'), 36],
            ['email', array('major' => true, 'age' => 36, 'email' => 'Email'), 'Email']
        ];
    }

    /**
    * @codeCoverageIgnore
    */
    public function searchkeysProvider() {
        return [
            [true, array('major' => true, 'age' => 36, 'name' => 'fatou'), 'major'],
            [36, array('major' => true, 'age' => 36), 'age']
        ];
    }
}