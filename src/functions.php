<?php
/* Read
   - https://www.php.net/manual/en/functions.user-defined.php
   - https://www.php.net/manual/en/functions.arguments.php
   - https://www.php.net/manual/en/language.references.whatdo.php
*/

// Make a function that adds two numbers if passed but can be called with only one argument
// If only one argument is passed the second argument has the value of 1
function add_numbers($x, $y){
    return $x;
}


// Make a function that takes in an array and removes items from the
// array if they contain $substr
function filter($words, $needle){
    return $words;
}

//make a function that takes a lower case letter and returns the next one above it.
//If you give it "z", wrap around to "a"
function up_one_letter($x){
    $val = ord($x) + 1;
    return chr($val);
}

//make a function that takes a lower case letter and returns the one below it.
//If you give it "a", wrap around to "z"
function down_one_letter($x){
    $val = ord($x) - 1;
    return chr($val);
}

// Make a function that implements the ceasar cipher on a text
function ceasar_cipher($text, $key){
    $out = "";
    $in = str_split($text);
    return $out;
}

// Make a function that docodes ceasar ciphered text
function ceasar_uncipher($text, $key){
    $out = "";
    $in = str_split($text);
    return $out;
}
