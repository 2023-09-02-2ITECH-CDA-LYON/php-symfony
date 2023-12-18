<?php
declare(strict_types=1);

namespace Glodie\Algos\Tests;
use Glodie\Algos\Str;

use PHPUnit\Framework\TestCase;

/**
 * @covers Glodie\Algos\Str
 */
class StrTest extends TestCase {
  /**
   * @dataProvider wordsProvider
   */
  public function testMinWord($word, $words) {
    // Assert
    $this->assertEquals($word, (new Str())->min($words));
  }

  /**
   * @codeCoverageIgnore
   */
  public function wordsProvider() {
    return [
      [
        'hello',
        ['hello', 'hello world', 'mama mia']
      ],
      [
        'a',
        ['abcdef', 'a', 'gf']
      ],
      [
        'f',
        ['abcdef', 'af', 'f']
      ],
      [
        ['a','b'],
        ['abcdef', 'a', 'b', 'gf']
      ]
    ];
  }
}