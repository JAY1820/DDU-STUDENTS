<!DOCTYPE html>
<html>

<head>
    <title>Array Function Demonstrations</title>
</head>

<body>
    <?php

    // Define an array with input, output, and purpose for each array function
    $dummy = [1, 2, 3, 4, 5];
    $dummy2 = ["Name" => "Mohal", "Age" => 21];
    function dump()
    {
        global $dummy;
        shuffle($dummy);
        return $dummy;
    }
    function currSort()
    {
        global $dummy2;
        arsort($dummy2);
        return $dummy2;
    }
    $functions = [
        [
            "function" => "array_change_key_case",
            "input" => $dummy2,
            "output" => array_change_key_case($dummy2, CASE_LOWER),
            "purpose" => "Changes the case of keys in an array."
        ],
        [
            "function" => "array_chunk",
            "input" => $dummy,
            "output" => array_chunk($dummy, 2),
            "purpose" => "Splits an array into chunks of a specified size."
        ],
        [
            "function" => "array_combine",
            "input" => ["Name", "Age"],
            "output" => array_combine(["Name", "Age"], ["John", 30]),
            "purpose" => "Combines two arrays into one, using one array for keys and another for values."
        ],
        [
            "function" => "array_diff",
            "input" => $dummy,
            "output" => array_diff($dummy, [3, 4, 5, 6, 7]),
            "purpose" => "Computes the difference between arrays."
        ],
        [
            "function" => "array_diff_assoc",
            "input" => $dummy2,
            "output" => array_diff_assoc($dummy2, ["Name" => "Jane", "Age" => 30]),
            "purpose" => "Computes the difference between arrays with additional index check."
        ],
        [
            "function" => "array_diff_key",
            "input" => $dummy2,
            "output" => array_diff_key($dummy2, ["Age" => 30]),
            "purpose" => "Computes the difference between arrays using keys."
        ],
        [
            "function" => "array_fill",
            "input" => [0, 5, "Hello"],
            "output" => array_fill(0, 5, "Hello"),
            "purpose" => "Fill an array with values."
        ],
        [
            "function" => "array_intersect",
            "input" => $dummy,
            "output" => array_intersect($dummy, [3, 4, 5, 6, 7]),
            "purpose" => "Computes the intersection of arrays."
        ],
        [
            "function" => "array_key_exists",
            "input" => $dummy2,
            "output" => array_key_exists("Name", $dummy2),
            "purpose" => "Checks if a specified key exists in an array."
        ],
        [
            "function" => "array_keys",
            "input" => $dummy2,
            "output" => array_keys($dummy2),
            "purpose" => "Return all the keys of an array."
        ],
        [
            "function" => "array_merge",
            "input" => $dummy, [4, 5, 6],
            "output" => array_merge($dummy, [4, 5, 6]),
            "purpose" => "Merge two or more arrays."
        ],
        [
            "function" => "array_merge_recursive",
            "input" => ["Name" => "Meera"], ["Name" => "Raddha"],
            "output" => array_merge_recursive(["Name" => "Meera"], ["Name" => "Raddha"]),
            "purpose" => "Merge two or more arrays recursively."
        ],
        [
            "function" => "array_pop",
            "input" => $dummy,
            "output" => array_pop($dummy),
            "purpose" => "Remove and return the last element from an array."
        ],
        [
            "function" => "array_push",
            "input" => [$dummy, 4, 5],
            "output" => array_push($dummy, 4, 5),
            "purpose" => "Push one or more elements onto the end of an array."
        ],
        [
            "function" => "array_rand",
            "input" => $dummy2,
            "output" => array_rand($dummy2),
            "purpose" => "Pick one or more random keys from an array."
        ],
        [
            "function" => "array_shift",
            "input" => $dummy,
            "output" => array_shift($dummy),
            "purpose" => "Shift an element off the beginning of an array."
        ],
        [
            "function" => "array_slice",
            "input" => $dummy,
            "output" => array_slice($dummy, 2, 2),
            "purpose" => "Extract a slice of an array."
        ],
        [
            "function" => "array_sum",
            "input" => $dummy,
            "output" => array_sum($dummy),
            "purpose" => "Calculate the sum of values in an array."
        ],
        [
            "function" => "array_walk",
            "input" => $dummy,
            "output" => array_walk($dummy, function (&$value, $key) {
                $value = $value * 2;
            }),
            "purpose" => "Apply a user-defined function to each element of an array."
        ],
        [
            "function" => "arsort",
            "input" => $dummy2,
            "output" => currSort(),
            "purpose" => "Sort an array in reverse order and maintain index association."
        ],
        [
            "function" => "current",
            "input" => $dummy,
            "output" => current($dummy),
            "purpose" => "Return the current element in an array."
        ],
        [
            "function" => "end",
            "input" => $dummy,
            "output" => end($dummy),
            "purpose" => "Set the internal pointer of an array to its last element."
        ],
        [
            "function" => "krsort",
            "input" => $dummy2,
            "output" => krsort($dummy2),
            "purpose" => "Sort an array by key in reverse order."
        ],
        [
            "function" => "next",
            "input" => $dummy,
            "output" => next($dummy),
            "purpose" => "Advance the internal pointer of an array and return the next element."
        ],
        [
            "function" => "pos",
            "input" => $dummy,
            "output" => pos($dummy),
            "purpose" => "Alias of current() function."
        ],
        [
            "function" => "prev",
            "input" => $dummy,
            "output" => prev($dummy),
            "purpose" => "Rewind the internal pointer of an array and return the previous element."
        ],
        [
            "function" => "range",
            "input" => [1, 5],
            "output" => range(1, 5),
            "purpose" => "Create an array containing a range of elements."
        ],
        [
            "function" => "reset",
            "input" => $dummy,
            "output" => reset($dummy),
            "purpose" => "Set the internal pointer of an array to its first element."
        ],
        [
            "function" => "shuffle",
            "input" => $dummy,
            "output" => dump(),
            "purpose" => "Shuffle the elements in an array randomly."
        ],
    ];

    // Display the information for each array function
    foreach ($functions as $functionInfo) {
        echo "<p><b>{$functionInfo['function']}()</b> - {$functionInfo['purpose']}</p>";
        echo "<p>Input: " . json_encode($functionInfo['input']) . "</p>";
        echo "<p>Output: " . json_encode($functionInfo['output']) . "</p><br>";
    }

    ?>
</body>

</html>