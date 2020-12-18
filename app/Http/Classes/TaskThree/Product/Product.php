<?php

namespace App\Http\Classes\TaskThree\Product;

use App\Http\Classes\TaskThree\Product\ProductInterface;

class Product implements ProductInterface
{

    /**
     * @var int $sku
     */
    public int $sku;

    /**
     * @var int $stock
     */
    public int $stock;

    /**
     * @var array $instances
     */
    protected static array $instances = [];

    /**
     * __construct
     *
     * @param int $sku
     * @param int $stock
     * @return void
     */
    public function __construct(int $sku, int $stock)
    {
        $this->sku = $sku;
        $this->stock = $stock;
    }
    
    /**
     * getSku
     *
     * @return int
     */
    public function getSku() : int
    {
        return $this->sku;
    }
    
    /**
     * getStock
     *
     * @return int
     */
    public function getStock() : int
    {
        return $this->stock;
    }
}
