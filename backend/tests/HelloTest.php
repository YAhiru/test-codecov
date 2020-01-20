<?php
declare(strict_types=1);
namespace Test;

use App\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testSay() : void
    {
        $hello = new Hello();
        $this->assertSame('Hello!', $hello->say());
    }
}
