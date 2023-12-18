<?php
declare(strict_types=1);

namespace Glodie\Algos\Tests;
use Glodie\Algos\User;
use PHPUnit\Framework\TestCase;

/**
 * @covers Glodie\Algos\User
 */
class UserTest extends TestCase {
  /**
   * @dataProvider generationProvider
   */
  public function testGetGeneration($age, $expected) {
    // Act
    $user = new User($age);
    // Assert
    $this->assertEquals($expected, $user->getGeneration());
  }

  /**
   * @dataProvider emailsProviders
   */
  public function testCheckEmail($expected, $email) {
    $this->assertEquals($expected, (new User())->checkEmail($email));
  }

  /**
   * @codeCoverageIgnore
   */
  public function emailsProviders() {
    return [
      [true, 'contact@tshimini.fr'],
      [false, '@tshimini.fr'],
      [false, 'contacttshimini.fr'],
      [false, 'contact@tshimini.'],
      [false, 'contact@tshiminifr']
    ];
  }

  /**
   * @codeCoverageIgnore
   */
  public function generationProvider() {
    return [
      [10, 'Enfant'],
      [11, 'Adolescent'],
      [18, 'Majeur'],
      [50, 'Senior']
    ];
  }
}