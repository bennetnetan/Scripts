<?php
// Create a function to get the n number of palindromes after number num as input in the function
function get_n_palindromes($num, $n){
    // Initialize an empty array to store the palindromes
    $palindromes = [];
    // Loop through the numbers from num to num + n
    for ($i = $num; $i <= $num + $n; $i++) {
        // Convert the number to a string and check if it's equal to its reverse
        if (strrev((string)$i) == (string)$i) {
            $palindromes[] = strrev((string)$i);
        }
    }
    // Return the array of palindromes
    return $palindromes;
}
get_n_palindromes(2,233);
