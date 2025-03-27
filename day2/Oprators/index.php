<?php
echo "<h2>PHP Operators with Examples</h2>";

echo "<h3>1. Arithmetic Operators</h3>";
$a = 10;
$b = 5;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Exponentiation: " . ($a ** $b) . "<br>";

echo "<h3>2. Assignment Operators</h3>";
$c = 20;
$c += 5;
echo "Addition Assignment: " . $c . "<br>";

$c -= 5;
echo "Subtraction Assignment: " . $c . "<br>";

$c *= 2;
echo "Multiplication Assignment: " . $c . "<br>";

$c /= 2;
echo "Division Assignment: " . $c . "<br>";

echo "<h3>3. Comparison Operators</h3>";
$x = 10;
$y = "10";
echo "Equal (==): " . var_export($x == $y, true) . "<br>";
echo "Identical (===): " . var_export($x === $y, true) . "<br>";
echo "Not Equal (!=): " . var_export($x != $y, true) . "<br>";
echo "Greater than (>): " . var_export($x > $y, true) . "<br>";
echo "Less than (<): " . var_export($x < $y, true) . "<br>";

echo "<h3>4. Logical Operators</h3>";
$bool1 = true;
$bool2 = false;
echo "AND (&&): " . var_export($bool1 && $bool2, true) . "<br>";
echo "OR (||): " . var_export($bool1 || $bool2, true) . "<br>";
echo "NOT (!): " . var_export(!$bool1, true) . "<br>";

echo "<h3>5. Bitwise Operators</h3>";
$p = 6; // 110
$q = 3; // 011
echo "Bitwise AND (&): " . ($p & $q) . "<br>";
echo "Bitwise OR (|): " . ($p | $q) . "<br>";
echo "Bitwise XOR (^): " . ($p ^ $q) . "<br>";
echo "Left Shift (<<): " . ($p << 1) . "<br>";
echo "Right Shift (>>): " . ($p >> 1) . "<br>";

echo "<h3>6. String Operators</h3>";
$str1 = "Hello";
$str2 = " World!";
echo "Concatenation (.): " . ($str1 . $str2) . "<br>";
$str1 .= " PHP!";
echo "Concatenation Assignment (.=): " . $str1 . "<br>";

echo "<h3>7. Ternary & Null Coalescing Operators</h3>";
$age = 20;
echo "Ternary Operator: " . ($age >= 18 ? "Adult" : "Minor") . "<br>";

$username = null;
echo "Null Coalescing Operator: " . ($username ?? "Guest") . "<br>";
?>
