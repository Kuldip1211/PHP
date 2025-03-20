<?php

/**
 * PHP Data Types Demonstration
 *
 * This script explains and demonstrates various data types in PHP.
 */

// 1. String
$stringVar = "Hello, PHP!";
echo "String: " . $stringVar . "\n";

// 2. Integer
$intVar = 100;
echo "Integer: " . $intVar . "\n";

// 3. Float (Double)
$floatVar = 10.5;
echo "Float: " . $floatVar . "\n";

// 4. Boolean
$boolVar = true;
echo "Boolean: " . ($boolVar ? 'true' : 'false') . "\n";

// 5. Array
$arrayVar = array("Apple", "Banana", "Cherry");
echo "Array: " . implode(", ", $arrayVar) . "\n";

// 6. Object
class Car {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
}
$carVar = new Car("Toyota");
echo "Object: " . $carVar->brand . "\n";

// 7. NULL
$nullVar = NULL;
echo "NULL: " . ($nullVar === NULL ? 'NULL' : 'Not NULL') . "\n";

// 8. Resource (Example: Database connection simulation)
$file = fopen("php://temp", "r");
echo "Resource: " . (is_resource($file) ? 'Valid Resource' : 'Not a Resource') . "\n";
fclose($file);

?>
