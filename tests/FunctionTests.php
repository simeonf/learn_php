<?php
namespace simeon\PhpTest;

include "src/functions.php";

use PHPUnit\Framework\TestCase;

final class FunctionTests extends TestCase
{
    public function test_add_numbers(){
        $this->assertSame(7, add_numbers(3,4));
        $this->assertSame(5, add_numbers(4));
    }

    public function test_filter(){
        $names = ["john", "bob", "jane"];
        $this->assertSame(filter($names, "j"), ["bob"]);
        $this->assertSame(filter($names, "o"), ["jane"]);
    }

    public function test_up_one_letter(){
        $this->assertSame("b", up_one_letter("a"));
        $this->assertSame("c", up_one_letter("b"));
        $this->assertSame("a", up_one_letter("z"));
    }


    public function test_down_one_letter(){
        $this->assertSame("a", down_one_letter("b"));
        $this->assertSame("c", down_one_letter("d"));
        $this->assertSame("z", down_one_letter("a"));
    }

    public function test_ceasar_cipher(){
        $result = ceasar_cipher("testing", 5);
        $this->assertSame($result, "yjxynsl");
    }

    public function test_ceasar_uncipher(){
        $result = ceasar_uncipher("yjxynsl", 5);
        $this->assertSame($result, "testing");
    }

}
