<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Drink.php";
    require_once __DIR__ . "/../Repository/DrinkRepository.php";
    require_once __DIR__ . "/../Service/DrinkService.php";
    require_once __DIR__ . "/../View/DrinkView.php";
    require_once __DIR__ . "/../Helper/CheckHelper.php";
    require_once __DIR__ . "/../Helper/InputHelper.php";

    use Config\Database;
    use Repository\DrinkRepositoryImpl;
    use Service\DrinkServiceImpl;
    use View\DrinkView;

    function testViewShowDrink(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinkView = new DrinkView($drinkService);
        $drinkView->showDrink();
    }

    function testViewAddDrink(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $drinkView = new DrinkView($drinkService);
        $drinkService->showDrink();
        $drinkView->addDrink();
        $drinkService->showDrink();
    }

    testViewAddDrink();