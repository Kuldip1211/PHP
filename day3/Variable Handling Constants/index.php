<?php

// PHP Variables Example
$name = "John";
$age = 25;

// Display variables
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";

// Variable Scope
$globalVar = "I am a global variable";

function testScope() {
    global $globalVar;
    echo "Inside function: " . $globalVar . "<br>";
}
testScope();

echo "Outside function: " . $globalVar . "<br>";

// Static Variable Example
function counter() {
    static $count = 0;
    $count++;
    echo "Counter: " . $count . "<br>";
}
counter();
counter();

// Defining Constants
define("SITE_NAME", "MyWebsite");
const VERSION = "1.0.0";

echo "Website Name: " . SITE_NAME . "<br>";
echo "Version: " . VERSION . "<br>";

?>