<?php

// Original string
$str = " Hello World! ";

// 1. strlen() - Get string length
echo "1. Length: " . strlen($str) . "\n";

// 2. trim() - Remove whitespace from beginning and end
echo "2. Trimmed: '" . trim($str) . "'\n";

// 3. ltrim() - Remove whitespace from start
echo "3. Left Trimmed: '" . ltrim($str) . "'\n";

// 4. rtrim() - Remove whitespace from end
echo "4. Right Trimmed: '" . rtrim($str) . "'\n";

// 5. strtolower() - Convert to lowercase
echo "5. Lowercase: " . strtolower($str) . "\n";

// 6. strtoupper() - Convert to uppercase
echo "6. Uppercase: " . strtoupper($str) . "\n";

// 7. ucfirst() - Capitalize first letter
echo "7. ucfirst: " . ucfirst(strtolower($str)) . "\n";

// 8. lcfirst() - Lowercase first letter
echo "8. lcfirst: " . lcfirst($str) . "\n";

// 9. ucwords() - Capitalize each word
echo "9. ucwords: " . ucwords(strtolower($str)) . "\n";

// 10. strrev() - Reverse a string
echo "10. Reversed: " . strrev($str) . "\n";

// 11. strpos() - Find position of substring
echo "11. Position of 'World': " . strpos($str, "World") . "\n";

// 12. str_replace() - Replace substring
echo "12. Replace 'World' with 'PHP': " . str_replace("World", "PHP", $str) . "\n";

// 13. substr() - Extract substring
echo "13. Substring from index 1, length 5: " . substr($str, 1, 5) . "\n";

// 14. str_split() - Convert string to array
print_r(str_split("PHP"));

// 15. explode() - Split string into array
echo "15. Exploded string: ";
print_r(explode(" ", trim($str)));

// 16. implode() - Join array elements to string
$arr = ["Hello", "PHP", "World"];
echo "16. Imploded array: " . implode(" ", $arr) . "\n";

// 17. str_pad() - Pad string
echo "17. Padded String: " . str_pad("PHP", 10, "*") . "\n";

// 18. strcmp() - Compare two strings
echo "18. String Compare: " . strcmp("Hello", "hello") . "\n";

// 19. strcasecmp() - Case insensitive comparison
echo "19. Case Insensitive Compare: " . strcasecmp("Hello", "hello") . "\n";

// 20. str_repeat() - Repeat string
echo "20. Repeated String: " . str_repeat("Hello ", 3) . "\n";

// 21. htmlspecialchars() - Convert special characters
echo "21. HTML Special Chars: " . htmlspecialchars("<b>Bold</b>") . "\n";

// 22. htmlentities() - Convert all applicable characters
echo "22. HTML Entities: " . htmlentities("<b>Bold</b>") . "\n";

// 23. addslashes() - Add backslashes before quotes
echo "23. Add Slashes: " . addslashes("It's a PHP string") . "\n";

// 24. stripslashes() - Remove slashes
echo "24. Strip Slashes: " . stripslashes(addslashes("It's a PHP string")) . "\n";

// 25. md5() - Generate MD5 hash
echo "25. MD5 Hash: " . md5("password") . "\n";

// 26. sha1() - Generate SHA1 hash
echo "26. SHA1 Hash: " . sha1("password") . "\n";

// 27. number_format() - Format number
echo "27. Number Format: " . number_format(1234567.891, 2) . "\n";

// 28. wordwrap() - Wrap string with a given width
echo "28. Wordwrap: " . wordwrap("This is a long sentence that needs wrapping.", 10, "\n") . "\n";

// 29. str_shuffle() - Randomly shuffle a string
echo "29. Shuffled: " . str_shuffle("abcdef") . "\n";

// 30. strstr() - Find first occurrence of a string
echo "30. strstr: " . strstr($str, "World") . "\n";

?>
