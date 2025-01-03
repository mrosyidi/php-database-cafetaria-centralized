<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Drink.php";
    require_once __DIR__ . "/../Repository/DrinkRepository.php";

    use Config\Database;
    use Entity\Drink;
    use Repository\DrinkRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinks = $drinkRepository->findAll();
        var_dump($drinks);
    }

    function testSave(): void 
    {
        $connection = Database::getConnection();
        $drink = new Drink("Es Coklat", 12000);
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkRepository->save($drink);
        $drinks = $drinkRepository->findAll();
        var_dump($drinks);
    }

    testSave();