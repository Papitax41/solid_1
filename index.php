<?php
include 'CoffeeShop.php';
include 'Menu.php';

$products = [
    ['id' => 1, 'name' => 'Negro', 'price' => '25'],
    ['id' => 2, 'name' => 'Latté', 'price' => '35'],
    ['id' => 3, 'name' => 'Capuchino', 'price' => '45'],
    ['id' => 4, 'name' => 'Expreso', 'price' => '55'],
];

$shop = new CoffeeShop($products); // Pasar los productos directamente a CoffeeShop

$menu = new Menu();

echo $menu->viewMenu($shop->getProducts());
?>