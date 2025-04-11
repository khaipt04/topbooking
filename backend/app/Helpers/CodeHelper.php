<?php

namespace App\Helpers;

class CodeHelper
{
    public static function createCode($prefix, $name){
        $initials = collect(explode(' ', $name))->filter()->map(fn($word) => strtoupper($word[0]))->implode('');
        return $prefix . rand(1000, 9999) . '-' . $initials . '-' . rand(1000, 9999);
    }
}
