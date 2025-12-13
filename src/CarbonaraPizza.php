<?php

declare(strict_types=1);

namespace Pizza;

class CarbonaraPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Карбонара';
        $this->sauce = 'Сливочный соус';
        $this->toppings = [
            'Бекон',
            'Шампиньоны',
            'Моцарелла',
            'Пармезан',
            'Яйцо',
            'Черный перец'
        ];
    }
}