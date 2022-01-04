<?php
namespace App;

/**
 * Author -> Nadeem Shaikh
 * PHP Version -> 8.1.1
 */
class LinearSearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array and element to search as parameter
     * returns the index of element, if present
     * else returns false
     */
    public function search($linearSearchArray, $x)
    {
        for ($i = 0; $i < count($linearSearchArray); $i++) {
            if ($linearSearchArray[$i] == $x)
                return $i;
        }
        return false;
    }
}