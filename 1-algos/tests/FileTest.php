<?php
declare(strict_types=1);

namespace Glodie\Algos\Tests;

use PHPUnit\Framework\TestCase,
    org\bovigo\vfs\vfsStream,
    Glodie\Algos\File;
/**
 * @covers Glodie\Algos\File
 */
class FileTest extends TestCase {

  /**
   * @dataProvider getContentProvider
   */
  public function testGetCSV($strContent, $aContent) {
    // Arrange
    $csv = new File(vfsStream::url('test/test.csv'));
    $root = vfsStream::setup('test');
    $filename = basename($csv->getFilename());
    vfsStream::newFile($filename, 0777)
      ->withContent($strContent)
      ->at($root);
    // Act
    $res = $csv->getCSVContent();
    // Assert
    $this->assertIsArray($res);
    $this->assertEquals($aContent, $res);
  }

  /**
   * @dataProvider createProvider
   */
  public function testCreateCSV(array $aContent, string $rgx) {
    // Arrange
    $root = vfsStream::setup('test');
    $csv = new File(vfsStream::url('test/test.csv'), $aContent);
    // Act
    $csv->createCSV();
    // Assert
    $this->assertMatchesRegularExpression(
      $rgx,
      $root->getChild(basename($csv->getFilename()))->getContent()
    );
  }
  
  /**
   * @codeCoverageIgnore
   */
  public function getContentProvider () {
    return array(
      array(
        '
        a;b;c;d;
        1;2;3;4;',
        array(
          array('a', 'b', 'c', 'd'),
          array('1', '2', '3', '4'),
        )
      ),
      array(
        '
        e;f;g;h
        10;20;30;40',
        array(
          array('e', 'f', 'g', 'h'),
          array('10', '20', '30', '40'),
        )
      ),
      array(
        '
        aa;bb;cc;dd
        11;22;33;44',
        array(
          array('aa', 'bb', 'cc', 'dd'),
          array('11', '22', '33', '44'),
        )
      ),
      array(
        '
        a;b;c;d;;',
        array(
          array('a', 'b', 'c', 'd', ''),
        )
      )
    );
  }

  /**
   * @codeCoverageIgnore
   */
  public function createProvider () {
    return array(
      array(
        [
          ['a', 'b', 'c']
        ],
        '/a;b;c/'
      ),
      array(
        [
          ['d'],
          ['e'],
          ['f']
        ],
        '/d\s?e\s?f\s?/m'
      ),
      array(
        [
          ['1', '2'],
          ['3']
        ], 
        '/1;2\s?3\s?/m'
      )
    );
  }
}