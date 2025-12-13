<?php

declare(strict_types=1);

namespace Pizza;

/**
 * Абстрактный класс магазина пиццерии
 */
abstract class PizzaStore
{
    /**
     * Заказ пиццы
     *
     * @param string $type Тип пиццы
     * @return Pizza Созданная пицца
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();
        
        return $pizza;
    }

    /**
     * Создание пиццы
     *
     * @param string $type Тип пиццы
     * @return Pizza Созданная пицца
     */
    abstract protected function createPizza(string $type): Pizza;
}