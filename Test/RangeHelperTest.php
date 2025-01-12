<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Entity/Drink.php";
    require_once __DIR__ . "/../Repository/FoodRepository.php";
    require_once __DIR__ . "/../Repository/DrinkRepository.php";
    require_once __DIR__ . "/../Helper/RangeHelper.php";

    use Config\Database;
    use Entity\Food;
    use Entity\Drink;
    use Repository\FoodRepositoryImpl;
    use Repository\DrinkRepositoryImpl;
    use Helper\RangeHelper;

    function testRangeHelperOutOfRangeMinus(): void
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foods = $foodRepository->findAll();
        $result = RangeHelper::range($foods, -1);
        var_dump($result);
    }

    function testRangeHelperOutOfRangePlus(): void
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foods = $foodRepository->findAll();
        $result = RangeHelper::range($foods, 7);
        var_dump($result);
    }

    function testRangeHelperInRange(): void
    {
        $connection = Database::getConnection();
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinks = $drinkRepository->findAll();
        $result = RangeHelper::range($drinks, 2);
        var_dump($result);
    }

    testRangeHelperInRange();