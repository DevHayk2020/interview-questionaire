<?php

namespace App\Http\Controllers;

use App\Http\Classes\TaskOne\Product\Product;
use App\Http\Classes\TaskThree\ProductsDataset\ProductsDataset;
use App\Http\Classes\TaskTwo\Test1\Test1;
use App\Http\Services\UserService;

class TaskController extends Controller
{

    /**
     * @var object $userService
     */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * taskOne
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function taskOne(): \Illuminate\Http\JsonResponse
    {
        $product = new Product;
        $product->setProductName('Canned Beans')->setProductName('Potatos');
        return response()->json($product->getProductNameTitle(), 200);
    }

    /**
     * taskTwo
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function taskTwo(): \Illuminate\Http\JsonResponse
    {
        $test = new Test1;
        $test->addValue(10)->addValue(10)->addValue(5)->addValue(5);
        $test->increaseAll()->increaseAll();
        return response()->json($test->getValues(), 200);
    }

    /**
     * taskThree
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function taskThree(): \Illuminate\Http\JsonResponse
    {
        $product = new ProductsDataset(112233, 20);
        $product->addProduct();

        $p = new ProductsDataset(21312412, 20);
        $p->addProduct();

        $p = new ProductsDataset(21312412, 20);
        $p->addProduct();

        return response()->json(['instances' => $product->getInstances(), 'first_product_sku' => $product->getSku(), 'first_product_stock' => $product->getStock()], 200);
    }

    /**
     * taskFour
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function taskFour()
    {
        $users = $this->userService->getUsers();

        return response()->json($users, 200);
    }
}
