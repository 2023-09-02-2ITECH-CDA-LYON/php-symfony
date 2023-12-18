<?php
declare(strict_types=1);

namespace Glodie\Algos\Tests;

use Glodie\Algos\Date;
use PHPUnit\Framework\TestCase;

/**
 * @covers Glodie\Algos\Date
 */
class DateTest extends TestCase {
  /**
   * @dataProvider datesProvider
   */
  public function testGetMoment(string $dt, string $expected) {
    // Arrange
    $d = new Date($dt);
    // Assert
    $this->assertEquals($expected, $d->getMoment());
  }

  /**
   * @codeCoverageIgnore
   */
  public function datesProvider() {
    return [
      ['2023-12-11 08:00:00', 'Matin'],
      ['2023-12-11 12:00:00', 'Après-midi'],
      ['2023-12-11 18:00:00', 'Soirée'],
      ['2023-12-11 00:00:00', 'Nuit']
    ];  
  }
}