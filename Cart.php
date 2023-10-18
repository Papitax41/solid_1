<?php
// Definimos una interfaz para representar diferentes formas de manejar un carrito de compras
interface CartHandler
{
    public function addToCart($id, $cantidad);
    public function getTotalCart();
}

// Implementación concreta para manejar un carrito de compras
class DefaultCartHandler implements CartHandler
{
    private $cart = [];

    public function addToCart($id, $cantidad)
    {
        // Lógica para agregar un producto al carrito de compras
        // ...
    }

    public function getTotalCart()
    {
        // Lógica para calcular el total a pagar del carrito
        // ...
    }
}

// La clase Cart utiliza la interfaz para manejar el carrito de compras
class Cart
{
    private $cartHandler;

    public function __construct(CartHandler $cartHandler)
    {
        $this->cartHandler = $cartHandler;
    }

    public function addToCart($id, $cantidad)
    {
        $this->cartHandler->addToCart($id, $cantidad);
    }

    public function getTotalCart()
    {
        return $this->cartHandler->getTotalCart();
    }
}
