<?php

namespace App\Http\Classes\TaskThree\ProductsDataset;

use App\Http\Classes\TaskThree\Product\Product;

class ProductsDataset extends Product implements ProductsDatasetInterface
{
    /**
     * addProduct
     *
     * @return array
     */
    public function addProduct(): array
    {

        $skus = [];

        if (count(static::$instances)) {
            foreach (static::$instances as $instance) {
                $skus[] = $instance->sku;
            }

            if (!in_array($this->sku, $skus)) {
                static::$instances[] = $this;
            }
        } else {
            $skus[] = $this->sku;
            static::$instances[] = $this;
        }

        return static::$instances;
    }

    /**
     * getInstances
     *
     * @return array
     */
    public function getInstances(): array
    {
        return self::$instances;
    }
}
