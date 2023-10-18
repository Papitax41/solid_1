<?php

class CoffeeShop
{
    protected $products = [];

    public function __construct($products = [])
    {
        $this->products = $products;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function removeProducts($id)
    {
        // Lógica para borrar un producto
    }
}

