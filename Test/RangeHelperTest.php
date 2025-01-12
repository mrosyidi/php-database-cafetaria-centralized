<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Repository/FoodRepository.php";
    require_once __DIR__ . "/../Repository/DrinkRepository.php";
    require_once __DIR__ . "/../Helper/RangeHelper.php";

    use Config\Database;
    use Entity\Food;
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

    testRangeHelperOutOfRangeMinus();