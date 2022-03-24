<?php

namespace Code;

class ProjectEuler
{
    public function eulerFour()
    {
        $palindrome = 0;

        for ($i = 100; $i <= 999; $i++) {
            for ($y = 100; $y <= 999; $y++) {
                $x = $i * $y;

                if ($x > $palindrome && $x == strrev($x)) {
                    $palindrome = $x;
                }
            }
        }
        return $palindrome;
    }
    
    public function eulerThree($number)
    {
        $prime = 2;
        while ($prime * $prime < $number) {
            while ($number % $prime === 0) {
                $number /= $prime;
            }
            $prime++;
        }
        return $number;
    }

    public function eulerTwo($max_value)
    {
        $sequence = [1,1,2];
        $sum = 0;

        while ($sequence[2] < $max_value) {
            if ($sequence[2] % 2 === 0) {
                $sum += $sequence[2];
            }
            $sequence[0] = $sequence[1];
            $sequence[1] = $sequence[2];
            $sequence[2] = $sequence[0] + $sequence[1];
        }
        return $sum;
    }

    public function eulerOne($limit)
    {
        $result = 0;
        $number = 1;

        while ($number < $limit) {
            if ($number % 3 === 0 || $number % 5 === 0) {
                $result +=  $number;
            }
            $number++;
        }
        return $result;
    }
}
