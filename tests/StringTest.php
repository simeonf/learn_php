<?php
namespace simeon\PhpTest;

include "src/strings.php";

use PHPUnit\Framework\TestCase;

final class StringTest extends TestCase
{
    public function test_add2strings(){
        $result = add2strings("Simeon", "Franklin");
        $this->assertSame($result, "SimeonFranklin");
        $result = add2strings("Andrew", "Franklin");
        $this->assertSame($result, "AndrewFranklin");
    }
}