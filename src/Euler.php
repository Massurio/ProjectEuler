<?php
namespace Code;

class Euler
{
    public function eulerThree($largest_prime_factor)
    {
        $factor = 2;

        while($factor * $factor < $largest_prime_factor)
        {
            while($largest_prime_factor % $factor)
            {
                $largest_prime_factor = $largest_prime_factor / $factor;
            }
            $factor = $factor + 1;
        }
        return $largest_prime_factor;
    }

    public function eulerTwo($max_value)
    {
        $sequence = [1,1,2];
        $sum = 0;

        while($sequence[2] < $max_value)
        {
            if($sequence[2] % 2 === 0)
            {
                $sum += $sequence[2];
            }
            $sequence[0] = $sequence[1];
            $sequence[1] = $sequence[2];
            $sequence[2] = $sequence[0] + $sequence[1];
        }
        return $sum;
    }

    public function eulerONe($limit)
    {
        $result = 0;
        $number = 1;

        while($number < $limit)
        {
            
            if($number % 3 === 0 || $number %  5 === 0)
            {
                $result +=  $number;
                
            }
            $number++;
        }
        return $result;
    }
}
