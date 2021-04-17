<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use netnaveed\debugger\console;

// write string to console
console::log("A simple PHP debugger");

// write array to console in json format
console::log( [ 1, 2, 3 ] );

?>