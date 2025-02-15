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

    public function test_name(){

        $result = name("simeon", "franklin");
        $this->assertSame($result, "Simeon Franklin");
    }

    public function test_rgb(){
        $result = rgb(200, 100, 0);
        $this->assertSame($result, "rgb(200, 100, 0)");
        $result = rgb(200, 400, 0);
        $this->assertSame($result, "rgb(200, 255, 0)");
    }

    public function test_wrap(){
        $text = "This is a long piece of text";
        $result = wrap($text, 15);
        $this->assertSame($result, "This is a long piece \nof text");
        $text = "This is a an even longer piece of text which might repeat.";
        $result = wrap($text, 15);
        $this->assertSame($result, "This is a an ev\nen longer piece\n of text which\nmight repeat.");
    }

   public function test_more_e(){
        $result = more_e("Old McDonald had a Farm");
        $this->assertSame($result, "");
        $result = more_e("EIEIO!");
        $this->assertSame($result, "EIEIO!");
    }
}