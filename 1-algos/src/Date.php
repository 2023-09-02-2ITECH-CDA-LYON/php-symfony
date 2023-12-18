<?php

namespace Glodie\Algos;

use DateTime;

class Date extends DateTime {

  public function __construct($dt = "now") {
    parent::__construct($dt);
  }
  public function getMoment() : string {
    $hour = $this->format('H');
    if ($hour > 6 && $hour < 12) {
      return 'Matin';
    } else if($hour >= 12 && $hour < 18) {
      return 'Après-midi';
    } else if($hour >= 18) {
      return 'Soirée';
    } 
    return 'Nuit';
  }
}