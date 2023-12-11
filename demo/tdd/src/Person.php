<?php

namespace App;
class Person {
    public function status(int $age) : string {
        if ($age <= 10) {
            return 'Enfant';
        } elseif ($age <= 17) {
            return 'Adolescent';
        }
        elseif ($age >= 50) {
            return 'Senior';
        }
        elseif ($age >= 17) {
            return 'Majeur';
        }
    }
}