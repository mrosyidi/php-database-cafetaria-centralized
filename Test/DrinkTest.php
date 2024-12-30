<?php 

    require_once __DIR__ . "/../Entity/Drink.php";

    use Entity\Drink;

    function testInstanceDrinkConstruct(): void
    {
        $drink = new Drink("Es Teh", 3000);
        echo "Nama : " . $drink->getName() . PHP_EOL;
        echo "Harga : " . $drink->getPrice() . PHP_EOL;
    }

    testInstanceDrinkConstruct();