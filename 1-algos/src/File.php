<?php

namespace Glodie\Algos;
use Exception;

class File {
  private string $_filename;
  private array $_content;

  public function __construct(?string $filename = null, array $content = array()) {
    $this->_filename = $filename;
    $this->_content = $content;
  }

  public function getCSVContent(string $separator = ';') : array {
    $splCsv = new \SplFileObject($this->_filename);
    $res = [];
    while (($data = $splCsv->fgetcsv($separator)) !== false){
      if($data && ($data[0] != null)) {
        $last = count($data) - 1;
        if($data[$last] == '') {
          unset($data[$last]);
        }
        $res[] = array_map('trim', $data);
      }
    }
    $this->_content = $res;
    return $this->_content;
  }

  /**
   * Create new CSV file with content
   *
   * @param string $mode
   * 
   * @return void
   * @throws Exception
   */
  public function createCSV(string $mode = 'w', ?string $separator = ';') : void {
    $handle = fopen($this->_filename, $mode);
    foreach($this->_content as $line) {
      fputcsv($handle, $line, $separator);
    }
    fclose($handle);
    $handle = fopen($this->_filename, 'r');
    if(!is_array(fgetcsv($handle, null, $separator))){
      throw new Exception('Can\'t write content');
    }
    fclose($handle);
  }

  /**
   * Set data
   * 
   * @codeCoverageIgnore
   * @param array $content
   * 
   * @return self
   */
  public function setCSVContent(array $content) : self {
    $this->_content = $content;
    return $this;
  }

  /**
   * Get filename
   *
   * @codeCoverageIgnore
   * 
   * @return  string
   */ 
  public function getFilename() : string
  {
    return $this->_filename;
  }

  /**
   * Set the value of filename
   * @codeCoverageIgnore
   * 
   * @return self
   */ 
  public function setFilename(string $filename) : self
  {
    $this->_filename = $filename;

    return $this;
  }
}