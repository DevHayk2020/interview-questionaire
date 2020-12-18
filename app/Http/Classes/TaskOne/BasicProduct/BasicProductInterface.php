<?php
namespace App\Http\Classes\TaskOne\BasicProduct;

interface BasicProductInterface
{    
    /**
     * setProductName
     *
     * @param object $name
     * @return object
     */
    public function setProductName(string $name): object;

    /**
     * getProductName
     *
     * @return string
     */
    public function getProductName(): string;
}
