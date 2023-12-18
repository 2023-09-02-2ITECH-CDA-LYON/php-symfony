<?php

namespace Glodie\Algos;

class PostalCode {
  private $_code;
  private $_post_codes;

  public function __construct(int $code)
  {
    $this->_code = $code;
    $this->_post_codes = [];
  }

  public function getAll() : array {
    $min = $this->_code * 100;
    $max = $min + 100;
    $i = $min;
    while($i < $max) {
      $this->_post_codes[$max-$i] = $i;
      $i++;
    }
    return $this->_post_codes;
  }
  
  public function showAll() : string {
    $this->getAll();
    return implode(';', $this->_post_codes);
  }
}