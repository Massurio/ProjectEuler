<?php

namespace OneTest;

use Code\ProjectEuler;
use PHPUnit\Framework\TestCase;

class OneTest extends TestCase
{
    public function testSeven()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerSeven(6);
        $this->assertSame(13, $out);
    }

    public function testSixResult()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerSix(100);
        $this->assertSame(25164150, $out);
    }

    public function testSix()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerSix(10);
        $this->assertSame(2640, $out);
    }

    public function testFiveResult()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerFive(20);
        $this->assertSame(232792560, $out);
    }

    public function testFive()
    {
        $euler = new ProjectEuler();
        $out = $euler->eulerFive(10);
        $this->assertSame(2520, $out);
    }

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
}
