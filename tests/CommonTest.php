<?php

namespace Tests;

use AyensoftGenel\Exception\AyensoftException;
use AyensoftGenel\Exception\InvalidConfiguration;
use PHPUnit\Framework\TestCase;

class CommonTest extends TestCase
{
    public function testConfigError()
    {
        $this->expectException(InvalidConfiguration::class);
        $this->expectException(AyensoftException::class);
    }

    public function testEnawereRequest()
    {

        $this->expectException(AyensoftException::class);
    }
}
