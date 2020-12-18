<?php

namespace App\Http\Classes\TaskThree\ProductsDataset;

interface ProductsDatasetInterface
{
    /**
     * addProduct
     *
     * @return array
     */
    public function addProduct(): array;


    /**
     * getInstances
     *
     * @return array
     */
    public function getInstances(): array;
}
