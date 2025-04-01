<?php
namespace App;

use PHPUnit\Framework\TestCase;

include "src/my_objects.php";

$data = <<<CSV
name,test1,test2,test3,test4,perfect_attendance
Bob,83,91,100,78,0
Alice,85,98,82,99,1
Charlie,70,65,78,82,0
David,88,90,85,93,1
Eve,62,75,80,68,0
Frank,81,94,88,96,1
Grace,77,82,73,79,0
Henry,85,89,95,87,1
Ivy,68,72,66,70,0
Jack,93,97,94,98,1
CSV;

final class ObjectTests extends TestCase
{
    public function test_make_row(){
        $row = new Row("Bob", 5, 6, 7, 0);
        $this->assertSame($row->first, 5);
        $this->assertSame($row->second, 6);
        $this->assertSame($row->third, 7);
        $this->assertSame($row->perfect_attendance, false);

    }

    public function test_load_data(){
        $sheet = new Sheet($data);
        $row = $sheet->rows[0];
        $this->assertTrue($row instanceof Row);
        $this->assertSame($row->first, 83);
    }

    public function test_row_average(){
        $row = new Row("Bob", 5, 6, 7, 0);
        $this->assertSame($row->average(), 5.67);
    }

    public function test_sheet_winner(){
        $sheet = new Sheet($data);
        $row = $sheet->top();
        $this->assertSame($row->name, "Jack");
    }
}
