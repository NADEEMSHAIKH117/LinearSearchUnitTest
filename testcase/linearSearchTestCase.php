<?php

use PHPUnit\Framework\TestCase;
use App\LinearSearch;

/**
 * Author -> Nadeem Shaikh
 * PHP Version -> 8.1.1
 */
class LinearSearchTest extends TestCase
{
    public $linearSearchArray = array(99, 1, 85, 10, 100, 2, 3, 20, 5, 4);

    public function testGivenDataFoundShouldReturnTrue()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->search($this->linearSearchArray, 20);
        $this->assertEquals(7, $result);
    }
    public function testGivenDataNotFoundShouldReturnFalse()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->search($this->linearSearchArray, 60);
        $this->assertEquals(true, $result);
    }
}