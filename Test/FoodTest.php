<?php

    require_once __DIR__ . "/../Entity/Food.php";

    use Entity\Food;

    function testInstanceFoodConstruct(): void
    {
        $mieGoreng = new Food("Mie Goreng", 7000);
        echo "Nama : " . $mieGoreng->getName() . PHP_EOL;
        echo "Harga : " . $mieGoreng->getPrice() . PHP_EOL;
    }

    testInstanceFoodConstruct();