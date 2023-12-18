<?php

namespace Glodie\Algos;

class User {
  private $_age;
  
  public function __construct(?int $age = 0)
  {
    $this->_age = $age;
    
  }

  public function getGeneration() : string {
    if($this->_age <= 10) {
      return 'Enfant';
    } else if($this->_age > 10 && $this->_age < 18) {
      return 'Adolescent';
    } else if ($this->_age < 50) {
      return 'Majeur';
    } else {
      return 'Senior';
    }
  }

  public function checkEmail(string $email) {
    return preg_match('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i', $email) === 1;
  }
}