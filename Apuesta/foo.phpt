--TEST--
foo() function - A basic test to see if it works. :)
--FILE--
<?php
include 'lib.php'; // might need to adjust path if not in the same dir
$bar = 'Hello World';
var_dump(foo($bar));
?>
--EXPECT--
string(11) "Hello World"