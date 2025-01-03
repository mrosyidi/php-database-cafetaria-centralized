<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Drink.php";
    require_once __DIR__ . "/../Repository/DrinkRepository.php";
    require_once __DIR__ . "/../Service/DrinkService.php";

    use Config\Database;
    use Entity\Drink;
    use Repository\DrinkRepositoryImpl;  
    use Service\DrinkServiceImpl;

    function testShowDrink(): void
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinkService->showDrink();
    }

    function testAddDrink(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinkService->showDrink();
        $drinkService->addDrink("Es Campur", 10000);
        $drinkService->showDrink();
    }

    testAddDrink();