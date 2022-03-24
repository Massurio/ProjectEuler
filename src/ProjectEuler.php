<?php
namespace Code;

class ProjectEuler
{
    public function eulerThree($number)
    {
        $prime = 2;
        while ($prime * $prime < $number) {
            while ($number % $prime === 0) {
                $number /= $prime;
            }
            $prime ++;
        }
        return $number;
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

    public function eulerOne($limit)
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
// echo ProjectEuler::eulerThree(6);