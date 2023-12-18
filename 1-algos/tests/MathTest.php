<?php
declare(strict_types=1);

namespace Glodie\Algos\Tests;

use Error;
use PHPUnit\Framework\TestCase;
use Glodie\Algos\Math;

/**
 * @covers Glodie\Algos\Math
 */
class MathTest extends TestCase {

  /**
   * @dataProvider minProvider
   */
  public function testMin(int $expected, array $values) {
    // Assert
    $this->assertEquals(
      $expected,
      (new Math())->min($values)
    );
  }

  /**
   * @dataProvider maxProvider
   */
  public function testMax(int $expected, array $values) {
    // Assert
    $this->assertEquals(
      $expected,
      (new Math())->max($values)
    );
  }

  public function testPermutation() {
    // Assert
    $this->assertEquals([5,3], (new Math())->permutation(3,5));
  }

  public function testFibonacci() {
    // Assert
    $this->assertSame(
      [1, 2, 3, 5, 8, 13, 21, 34, 55, 89],
      (new Math())->fibonacci()
    );
  }

  public function testMultiplyTable5() {
    $res = (new Math())->multiply(5);
    $this->assertStringContainsString('5*1=5;5*2=10;5*3=15', $res);
  }

  public function testMultiplyTable10() {
    $res =(new Math())->multiply(10);
    $this->assertStringEndsWith('10*10=100', $res);
  }

  public function testcalcTTC() {
    // Assert
    $this->assertEquals(120, (new Math())->calcTTC(100,20));
  }

  public function testTree5() {
    $this->assertEquals('122333444455555', (new Math())->tree(5));
  }

  public function testAverageOf2Numbers() {
    $this->assertEquals(7.5, (new Math())->calcAvg(5,10));
  }

  public function testAverageOf3Numbers() {
    $this->assertEquals(10, (new Math())->calcAvg(5,5,20));
  }

  public function testAverageOf10Numbers() {
    $this->assertEquals(15.8, (new Math())->calcAvg(5, 5, 20, 12 , 4, 8, 15, 70, 9, 10));
  }

  public function testAverageWithNumericArrays() {
    $this->assertEquals(12, (new Math())->calcAvgArray([24,12,0]));
  }

  public function testAverageWithAssociativeArrays() {
    // Assert
    $this->assertEquals(50, (new Math())->calcAvgArray(['nb' => 40, 'nb2' => 10, 'nb3' => 100]));
  }

  public function testDivide() {
    $this->assertEquals(5, (new Math())->divide(100, 20));
  }

  public function testDivideThrowException() {
    $this->expectException(Error::class);
    (new Math())->divide(100, 0);
  }

  /**
   * @codeCoverageIgnore
   */
  public function minProvider() {
    return [
      [3, [20,14,9,3,4,3,7,19]],
      [-10, [20,114,-10,30,410,3,0,1]],
      [-5000, [2140,-1114,-1550,3100,-410,-5000,0,1000]]
    ];
  }

  /**
   * @codeCoverageIgnore
   */
  public function maxProvider() {
    return [
      [20, [20,14,9,3,4,3,7,19]],
      [410, [20,114,-10,30,410,3,0,1]],
      [3100, [2140,-1114,-1550,3100,-410,-5000,0,1000]],
      [-999, [-2140,-1114,-1550,-3100,-999,-5000]]
    ];
  }
}