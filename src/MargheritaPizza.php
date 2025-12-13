<?php

declare(strict_types=1);

namespace Pizza;


class MargheritaPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Маргарита';
        $this->sauce = 'Томатный соус';
        $this->toppings = [
            'Свежие помидоры',
            'Моцарелла',
            'Базилик',
            'Оливковое масло'
        ];
    }
}