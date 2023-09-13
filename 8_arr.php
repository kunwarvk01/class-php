<?php
// Create an array
$fruits = ["apple", "banana", "cherry"];

// 1. array_push() - Add an element to the end of an array
array_push($fruits, "date");

// 2. array_pop() - Remove and return the last element of an array
$lastFruit = array_pop($fruits);

// 3. array_unshift() - Add an element to the beginning of an array
array_unshift($fruits, "avocado");

// 4. array_shift() - Remove and return the first element of an array
$firstFruit = array_shift($fruits);

// 5. count() - Count the number of elements in an array
$fruitCount = count($fruits);

// 6. in_array() - Check if a value exists in an array
$isCherryExist = in_array("cherry", $fruits);

// 7. array_merge() - Merge two or more arrays
$moreFruits = ["grape", "kiwi"];
$allFruits = array_merge($fruits, $moreFruits);

// 8. array_slice() - Extract a portion of an array
$slicedFruits = array_slice($allFruits, 2, 2);

// 9. array_splice() - Remove a portion of an array and replace it with something else
array_splice($allFruits, 2, 2, ["orange", "pear"]);

// 10. array_reverse() - Reverse the order of elements in an array
$reversedFruits = array_reverse($allFruits);

// 11. array_search() - Search for a value and return the corresponding key
$keyOfBanana = array_search("banana", $allFruits);

// 12. array_keys() - Return all the keys of an array
$keys = array_keys($allFruits);

// 13. array_values() - Return all the values of an array
$values = array_values($allFruits);

// 14. ksort() - 


// Display the results
echo "Original Fruits: " . implode(", ", $fruits) . "\n";
echo "Last Fruit Removed: $lastFruit\n";
echo "First Fruit Removed: $firstFruit\n";
echo "Total Fruits: $fruitCount\n";
echo "Is Cherry in Fruits: " . ($isCherryExist ? "Yes" : "No") . "\n";
echo "Merged Fruits: " . implode(", ", $allFruits) . "\n";
echo "Sliced Fruits: " . implode(", ", $slicedFruits) . "\n";
echo "Reversed Fruits: " . implode(", ", $reversedFruits) . "\n";
echo "Key of Banana: $keyOfBanana\n";
echo "Keys: " . implode(", ", $keys) . "\n";
echo "Values: " . implode(", ", $values) . "\n";
?>
