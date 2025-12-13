<?php

declare(strict_types=1);

namespace Pizza;


class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони'; // Используем английские названия
        $this->sauce = 'Томатный соус';
        $this->toppings = [
            'Пепперони',
            'Моцарелла',
            'Орегано',
        ];
    }
}