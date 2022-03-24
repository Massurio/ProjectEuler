<?php

//namespace OneTest;

use Code\ProjectEuler;

class OneTest extends PHPUnit\Framework\TestCase
{
    public function testFour()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerFour();
        $this->assertSame(906609, $out);
    }

    public function testThree()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerThree(600851475143);
        $this->assertSame(6857, $out);
    }

    public function testTwo()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerTwo(4000000);
        $this->assertSame(4613732, $out);
    }

    public function testEulerResult()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerOne(1000);
        $this->assertSame(233168, $out);
    }

    public function testEuler()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerOne(10);
        $this->assertSame(23, $out);
    }
}
