<?php
/* Read
   - https://www.geeksforgeeks.org/php-arrays/
   - https://www.php.net/manual/en/language.types.array.php
   - https://www.php.net/manual/en/language.operators.array.php
   - https://www.php.net/manual/en/function.array.php
*/

// Add the sum of the numbers in the array. Use a foreach loop.
function add_numbers($numbers){
    return $numbers[0] + $numbers[1];
}

// Add the numbers in the array - filter out the non-numeric values
// Use a foreach and an if statement
function add_only_numbers($numbers){
    return $numbers[0] + $numbers[1];
}


//Given two rows of equal length, return a single row with the sums of the columns
function add_rows_ab($a, $b){
    return $a + $b;
}

//Given two rows of equal length, return a value representing the sum of each row
function total_rows_ab($a, $b){
    return [1,2];
}

//Given two rows of equal length, return a value representing the sum of all the values
function total_ab($a, $b){
    return 2;
}

//Given an array of arrays return the sum of each row
function total_rows($a){
    return [1, 2, 3];
}

//Given an array of arrays return the index'th column
function column($a, $index){
    return [1, 2, 3];
}

//Given an array of arrays return the sum of the index'th column
function sum_column($a, $index){
    return 14;
}





?>
