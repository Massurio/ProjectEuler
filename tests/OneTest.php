<?php
use Code\Euler;

class OneTest extends PHPUnit\Framework\TestCase
{

    public function testThree()
    {
        $euler = new Euler();
        $out = $euler->eulerThree(600851475143);

        $this->assertSame(0.2606286166780229, $out);        
    }

    public function testTwo()
    {
        $euler = new Euler();
        $out = $euler->eulerTwo(4000000);

        $this->assertSame(4613732 , $out);

        
    }

    public function testEulerResult(){
        $euler = new Euler();
        $out = $euler->eulerONe(1000);
        
        $this->assertSame(233168,$out);
        
    }

    public function testEuler(){
        $euler = new Euler();
        $out = $euler->eulerONe(10);
        
        $this->assertSame(23,$out);
        
    }
}