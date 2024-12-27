<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Repository/FoodRepository.php";

    use Entity\Food;
    use Repository\FoodRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = \Config\Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foods = $foodRepository->findAll();
        var_dump($foods);
    }

    testFindAll();