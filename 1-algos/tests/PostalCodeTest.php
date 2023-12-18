<?php
declare(strict_types=1);

namespace Glodie\Algos\Tests;

use Glodie\Algos\PostalCode;
use PHPUnit\Framework\TestCase;

/**
 * @covers Glodie\Algos\PostalCode
 */
class PostalCodeTest extends TestCase {
  private $_pc;

  public function setUp(): void {
    parent::setUp(); 
    $this->_pc = new PostalCode(69);
  }
  
  public function testGetAllIsArray() {
    // Assert
    $this->assertIsArray($this->_pc->getAll());
  }

  public function testGetAllSize() {
    // Assert
    $this->assertEquals(100, count($this->_pc->getAll()));
  }

  public function testShowCps() {
    // Assert
    $this->assertStringContainsString('6900', $this->_pc->showAll());
  }

  public function testShowCpsNotcontains7000() {
    // Assert
    $this->assertStringNotContainsString('7000', $this->_pc->showAll());
  }
}