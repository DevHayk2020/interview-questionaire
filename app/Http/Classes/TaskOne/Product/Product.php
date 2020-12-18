<?php

namespace App\Http\Classes\TaskOne\Product;

use App\Http\Classes\TaskOne\BasicProduct\BasicProduct;

class Product extends BasicProduct implements ProductInterface
{

    /**
     * getProductNameTitle
     *
     * @return string
     */
    public function getProductNameTitle(): string
    {
        return 'Title ' . $this->getProductName();
    }
}
