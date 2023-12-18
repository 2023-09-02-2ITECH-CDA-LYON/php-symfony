<?php

namespace Glodie\Algos;

class Str {
  public function min(array $words) : string|array {
    $minLength = strlen($words[0]);
    foreach($words as $word) {
      $currentLength =  strlen($word);
      if($currentLength <= $minLength) {
        $minLength = $currentLength;
      }
    }

    $min = [];
    foreach($words as $word) {
      if(strlen($word) === $minLength) {
        $min[] = $word;
      }
    }

    if(count($min) === 1) {
      return $min[0];
    }
    return $min;
  }
}