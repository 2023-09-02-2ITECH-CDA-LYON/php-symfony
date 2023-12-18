<?php

namespace Glodie\Algos;

use Error;

class Math {
  public function min (array $numbers) : string {
    $min = $numbers[0];
    foreach($numbers as $number) {
      if($number < $min) {
        $min = $number;
      }
    }
    return $min;
  }

  public function max (array $numbers) : string {
    $max = $numbers[0];
    foreach($numbers as $number) {
      if($number > $max) {
        $max = $number;
      }
    }
    return $max;
  }

  public function permutation(int $coca, int $water) : array {
    $empty = $coca;
    $coca = $water;
    $water = $empty;
    unset($empty);
    return [$coca, $water];
  }

  public function fibonacci(?int $max = 89) : array {
    $values = [1, 2];
    $next = 1;
    for($i = 0; $next < $max; $i++) {
      $next = $values[$i] + $values[$i+1];
      if($next <= $max) {
        $values[] = $next;
      }
    }
    return $values;
  }

  public function multiply(int $table, int $end = 10) : string {
    $results = [];
    for ($i = 1; $i <= $end; $i++) {
      $result = $table * $i; 
      $results[$i] = "$table*$i=$result";
    }
    return implode(';', $results);
  }

  public function calcTTC(float $ht, float $rate) : float {
    return $ht *(1 + ($rate/100));
  }
  public function tree(int $nb) : string {
    $result = '';
    for($i = 1; $i <= $nb; $i++) {
      for($j = 0; $j < $i; $j++) {
        $result .= $i;
      }
    }
    return $result;
  }

  public function calcAvg(int $nb1, int $nb2) : float {
    $params = func_get_args();
    $nbParams = func_num_args();
    $sum = 0;
    for($i = 0; $i < $nbParams; $i++) {
        $sum += $params[$i];
    }
    return ($sum / $nbParams);
  }

  public function calcAvgArray( array $params) : int {
    $sum = 0;
    foreach($params as $param => $value) {
        unset($param);
        $sum += $value;
    }
    return $sum / count($params);
  }

  public function divide(int $nb1, int $nb2) {
    if($nb2 === 0) {
      throw new Error('impossible to divide by 0');
    }
    return $nb1 / $nb2;
  }
}