<?php
// PHP Operators Demonstration

echo "<h2>PHP Operators Examples</h2>";

// 1. Arithmetic Operators
echo "<h3>Arithmetic Operators</h3>";
$a = 10;
$b = 3;
echo "Addition (a + b): " . ($a + $b) . "<br>";
echo "Subtraction (a - b): " . ($a - $b) . "<br>";
echo "Multiplication (a * b): " . ($a * $b) . "<br>";
echo "Division (a / b): " . ($a / $b) . "<br>";
echo "Modulus (a % b): " . ($a % $b) . "<br>";
echo "Exponentiation (a ** b): " . ($a ** $b) . "<br>";

// 2. Assignment Operators
echo "<h3>Assignment Operators</h3>";
$c = 5;
echo "Initial value of c: $c<br>";
$c += 3; // Add and assign
echo "After c += 3: $c<br>";
$c -= 2; // Subtract and assign
echo "After c -= 2: $c<br>";
$c *= 4; // Multiply and assign
echo "After c *= 4: $c<br>";
$c /= 2; // Divide and assign
echo "After c /= 2: $c<br>";
$c %= 3; // Modulus and assign
echo "After c %= 3: $c<br>";

// 3. Comparison Operators
echo "<h3>Comparison Operators</h3>";
$d = 5;
$e = "5";
echo "d == e: " . var_export($d == $e, true) . "<br>"; // Equal
echo "d === e: " . var_export($d === $e, true) . "<br>"; // Identical
echo "d != e: " . var_export($d != $e, true) . "<br>"; // Not equal
echo "d !== e: " . var_export($d !== $e, true) . "<br>"; // Not identical
echo "d > 3: " . var_export($d > 3, true) . "<br>"; // Greater than
echo "d <= 5: " . var_export($d <= 5, true) . "<br>"; // Less than or equal

// 4. Logical Operators
echo "<h3>Logical Operators</h3>";
$x = true;
$y = false;
echo "x && y: " . var_export($x && $y, true) . "<br>"; // AND
echo "x || y: " . var_export($x || $y, true) . "<br>"; // OR
echo "!x: " . var_export(!$x, true) . "<br>"; // NOT
echo "x xor y: " . var_export($x xor $y, true) . "<br>"; // XOR

// 5. String Operators
echo "<h3>String Operators</h3>";
$str1 = "Hello";
$str2 = " World";
echo "Concatenation (str1 . str2): " . ($str1 . $str2) . "<br>";
$str1 .= $str2; // Concatenation and assignment
echo "After str1 .= str2: $str1<br>";

// 6. Increment/Decrement Operators
echo "<h3>Increment/Decrement Operators</h3>";
$counter = 5;
echo "Initial counter: $counter<br>";
echo "Pre-increment (++counter): " . (++$counter) . "<br>";
echo "Post-increment (counter++): " . ($counter++) . "<br>";
echo "Counter after post-increment: $counter<br>";
echo "Pre-decrement (--counter): " . (--$counter) . "<br>";
echo "Post-decrement (counter--): " . ($counter--) . "<br>";
echo "Counter after post-decrement: $counter<br>";

// 7. Array Operators
echo "<h3>Array Operators</h3>";
$array1 = ["a" => 1, "b" => 2];
$array2 = ["b" => 3, "c" => 4];
$union = $array1 + $array2; // Union
echo "Union of arrays (array1 + array2): ";
print_r($union);
echo "<br>";
echo "Equality (array1 == array2): " . var_export($array1 == $array2, true) . "<br>";
echo "Identical (array1 === array2): " . var_export($array1 === $array2, true) . "<br>";

// 8. Null Coalescing Operator
echo "<h3>Null Coalescing Operator</h3>";
$name = null;
echo "Name is null, using ?? to set default: " . ($name ?? "Default Name") . "<br>";
$name = "John";
echo "Name is not null, using ??: " . ($name ?? "Default Name") . "<br>";

// 9. Type Operator
echo "<h3>Type Operator</h3>";
class MyClass {}
$obj = new MyClass();
echo "obj instanceof MyClass: " . var_export($obj instanceof MyClass, true) . "<br>";

// 10. Error Control Operator
echo "<h3>Error Control Operator</h3>";
@$undefinedVar; // Suppress error
echo "Using @ to suppress errors for undefinedVar.<br>";

?>
