<?php

require_once __DIR__ . '/vendor/autoload.php';

use PizzaProject\MyPizzaStore;

$store = new MyPizzaStore();

echo "Заказ пиццы Маргарита:" . PHP_EOL;
$store->orderPizza('margherita');

echo PHP_EOL . "Заказ пиццы Пепперони:" . PHP_EOL;
$store->orderPizza('pepperoni');

echo PHP_EOL . "Заказ пиццы Карбонара:" . PHP_EOL;
$store->orderPizza('carbonara');

echo PHP_EOL . "Заказ несуществующей пиццы:" . PHP_EOL;
$store->orderPizza('hawaiian');