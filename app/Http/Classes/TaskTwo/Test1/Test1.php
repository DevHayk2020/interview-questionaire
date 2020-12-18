<?php

namespace App\Http\Classes\TaskTwo\Test1;

class Test1 implements Test1Interface
{
    private array $values = [];

    /**
     * addValue
     *
     * @param int $value
     * @return object
     */
    public function addValue(int $value): object
    {
        $this->values[] = $value;
        return $this;
    }

    /**
     * increaseAll
     *
     * @return object
     */
    public function increaseAll(): object
    {

        foreach ($this->values as $key => $val) {
            $this->values[$key]++;
        }

        return $this;
    }
    
    /**
     * getValues
     *
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }
}
