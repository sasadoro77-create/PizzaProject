<?php

// Простая автозагрузка файлов

use PizzaProject\MargheritaPizza;

require_once __DIR__ . '/src/Pizza.php';
require_once __DIR__ . '/src/PizzaStore.php';
require_once __DIR__ . '/src/PepperoniPizza.php';
require_once __DIR__ . '/src/CarbonaraPizza.php';
require_once __DIR__ . '/src/MargheritaPizza.php';


// Тестовый магазин
class TestPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        if ($type === 'pepperoni') {
            return new PepperoniPizza();
        }
        if ($type === 'carbonara') {
            return new CarbonaraPizza();
        }
        if ($type === 'margherita') {
            return new MargheritaPizza();
        }
        
        throw new InvalidArgumentException("Неизвестный тип пиццы: {$type}");
    }
}

echo "=== ТЕСТ ПИЦЦЕРИИ ===\n\n";

// Создаем магазин
$store = new TestPizzaStore();

// Тестируем все типы пицц
$pizzaTypes = ['pepperoni', 'cheese', 'veggie'];

foreach ($pizzaTypes as $type) {
    echo "Заказ пиццы: {$type}\n";
    echo str_repeat("-", 40) . "\n";
    
    try {
        $pizza = $store->orderPizza($type);
        echo "✓ Пицца '{$pizza->getName()}' успешно приготовлена!\n\n";
    } catch (Exception $e) {
        echo "✗ Ошибка: " . $e->getMessage() . "\n\n";
    }
}

echo "=== ТЕСТ ЗАВЕРШЕН ===\n";