<?php

// Definimos una interfaz para representar diferentes tipos de promociones
interface PromotionProvider
{
    public function getPromotions();
}

// Implementación concreta para obtener promociones actuales
class CurrentPromotions implements PromotionProvider
{
    public function getPromotions()
    {
        // Lógica para obtener y mostrar las promociones actuales
        // ...
    }
}

// Implementación concreta para obtener promociones futuras
class FuturePromotions implements PromotionProvider
{
    public function getPromotions()
    {
        // Lógica para obtener y mostrar las promociones futuras
        // ...
    }
}

// La clase Promo utiliza la interfaz para obtener promociones
class Promo
{
    private $promotionProvider;

    public function __construct(PromotionProvider $promotionProvider)
    {
        $this->promotionProvider = $promotionProvider;
    }

    public function getPromociones()
    {
        return $this->promotionProvider->getPromotions();
    }
}
