<?php
namespace simeon\PhpTest;

include "src/arrays.php";

use PHPUnit\Framework\TestCase;

final class ArrayTests extends TestCase
{
    public function test_add_numbers(){
        $result = add_numbers([1,2,3,4]);
        $this->assertSame(10, $result);
        $result = add_numbers([3,4,10]);
        $this->assertSame(17, $result);
    }

    public function test_add_only_numbers(){
        $result = add_only_numbers([1,"bob", 3]);
        $this->assertSame(4, $result );
    }

    public function test_add_rows_ab(){
        $row1 = [1,2,3];
        $row2 = [10, 20, 30];
        $result = add_rows_ab($a, $b);
        $this->assertSame($result, [11, 22, 33]);
    }

    public function test_total_rows_ab(){
        $row1 = [1,2,3];
        $row2 = [10, 20, 30];
        $result = total_rows_ab($a, $b);
        $this->assertSame($result, [6, 60]);
    }

    public function test_total_ab(){
        $row1 = [1,2,3];
        $row2 = [10, 20, 30];
        $result = total_ab($a, $b);
        $this->assertSame($result, 66);
    }

    public function test_total_rows(){
        $matrix = [[1,2,3],
                   [4,5,6],
                   [7,8,9]];
        $result = total_rows($matrix);
        $this->assertSame($result, [6, 15, 24]);
    }


    public function test_column(){
        $matrix = [[1,2,3],
                   [4,5,6],
                   [7,8,9]];
        $result = column($matrix, 0);
        $this->assertSame($result, [1,4,7]);
        $result = column($matrix, 2);
        $this->assertSame($result, [3, 6, 9]);
    }

    public function test_sum_column(){
        $matrix = [[1,2,3],
                   [4,5,6],
                   [7,8,9]];
        $result = column($matrix, 0);
        $this->assertSame($result, 12);
        $result = column($matrix, 2);
        $this->assertSame($result, 18);
    }



}
