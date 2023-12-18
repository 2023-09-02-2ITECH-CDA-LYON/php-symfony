<?php

namespace Glodie\Algos;

use Error;

class ArraySearch {
    public function findValue(mixed $keySearch, array $data) : ?string {
        foreach($data as $key => $value) {
            if($key === $keySearch) {
                return $value;
            }
        }
        throw new Error("value not found");
    }

    public function findKey(mixed $valueSearch, array $data) : ?string {
        $result = null;
        foreach($data as $key => $value) {
            if($value === $valueSearch) {
                $result = $key;
                break;
            }
        }
        if($result === null) {
            throw new Error("key not found");
        }
        return $result;
    }

    public function countPopulation(array $countries) {
        $i = 0;
        $sum = 0;
        foreach($countries as $key => $value) {
            $sum += $value;
            $i++;
        }
        return [
            'population' => $sum,
            'countries' => $i
        ];
    }

    public function findValueFromRand(int $nb) : bool {
        $numbers = $this->generateNumbers(10, 0, 100);
        return in_array($nb, $numbers);
    }

    public function generateNumbers(int $total = 10, int $min = 0, int $max = 100) : array {
        return array_map(function () use ($min, $max) {
            return rand($min, $max);
        }, array_fill($min, $total, null));
    }

    public function slice(int $limit = 50) : array {
        $numbers = $this->generateNumbers(10, 0, 100);
        $less = [];
        $greater = [];
        foreach($numbers as $nb) {
            if($nb <= $limit) {
                $less[] = $nb;
            } else {
                $greater[] = $nb;
            }
        }
        return [$less, $greater];
    }
}