<?php

declare(strict_types=1);

namespace PizzaProject;

use PizzaStore\PizzaStore;
use PizzaStore\Pizza;
use PizzaProject\Pizzas\MargheritaPizza;
use PizzaProject\Pizzas\PepperoniPizza;
use PizzaProject\Pizzas\CarbonaraPizza;

class MyPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): ?Pizza
    {
        return match ($type) {
            'margherita' => new MargheritaPizza(),
            'pepperoni' => new PepperoniPizza(),
            'carbonara' => new CarbonaraPizza(),
            default => null,
        };
    }
}