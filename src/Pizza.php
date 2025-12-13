<?php

declare(strict_types=1);

namespace Pizza;


abstract class Pizza
{
    /** @var string Название пиццы */
    protected string $name;

    /** @var string Соус пиццы */
    protected string $sauce;

    /** @var array<int, string> Топпинги пиццы */
    protected array $toppings = [];

   
    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топики: " . implode(', ', $this->toppings) . "\n";
    }

   
    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }

    /**
     * Получить название пиццы
     *
     * @return string Название пиццы
     */
    public function getName(): string
    {
        return $this->name;
    }
}