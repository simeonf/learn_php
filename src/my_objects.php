<?php
/* Read
   - https://www.w3schools.com/php/php_oop_what_is.asp
   - https://www.w3schools.com/php/php_oop_classes_objects.asp
   - https://www.w3schools.com/php/php_oop_constructor.asp
*/

namespace App;

class Row{
    public $name;
    public $first;
    public $second;
    public $third;
    public $perfect_attendance;

    function __construct($name, $first, $second, $third, $perfect_attendance){

    }

}

class Sheet{
    public $text_data;
    public $rows;

    function __construct($text_data){

    }
}
