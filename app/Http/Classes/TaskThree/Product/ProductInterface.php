<?php

namespace App\Http\Classes\TaskThree\Product;

interface ProductInterface
{
    /**
     * getSku
     *
     * @return int
     */
    public function getSku(): int;

    /**
     * getStock
     *
     * @return int
     */
    public function getStock(): int;
}
