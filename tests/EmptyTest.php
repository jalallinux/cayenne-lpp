<?php

namespace JalalLinuX\CayenneLpp\Tests;

use JalalLinuX\CayenneLpp\Decoder;
use JalalLinuX\CayenneLpp\Encoder;
use PHPUnit\Framework\TestCase;

class EmptyTest extends TestCase
{
    public function testCreateEncoder()
    {
        $lpp = new Encoder;
        $this->assertInstanceOf(Encoder::class, $lpp);
    }

    public function testCreateDecoder()
    {
        $lpp = new Decoder('');
        $this->assertInstanceOf(Decoder::class, $lpp);
    }
}
