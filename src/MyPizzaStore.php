<?php

declare(strict_types=1);

namespace PizzaProject;

use PizzaStore\PizzaStore;
use PizzaStore\Pizza;
use PizzaStore\Pizzas\MargheritaPizza;
use PizzaStore\Pizzas\PepperoniPizza;
use PizzaStore\Pizzas\CarbonaraPizza;

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