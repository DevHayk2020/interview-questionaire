<?php

namespace App\Http\Classes\TaskTwo\Test1;

interface Test1Interface
{    
    /**
     * addValue
     *
     * @param int $value
     * @return object
     */
    public function addValue(int $value) : object;
    
    /**
     * increaseAll
     *
     * @return object
     */
    public function increaseAll() : object;
    
    /**
     * getValues
     *
     * @return array
     */
    public function getValues() : array;
}
