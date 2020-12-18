<?php
namespace App\Http\Classes\TaskOne\BasicProduct;

class BasicProduct implements BasicProductInterface
{
    /**
     * @var string $productName
     */
    private $productName;
    
    /**
     * setProductName
     *
     * @param string $name
     * @return object
     */
    public function setProductName(string $name) : object
    {
        $this->productName = $name;
        return $this;
    }
    
    /**
     * getProductName
     *
     * @return string
     */
    public function getProductName() : string
    {
        return $this->productName;
    }
}
