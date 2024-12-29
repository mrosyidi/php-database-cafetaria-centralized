<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Repository/FoodRepository.php";

    use Config\Database;
    use Entity\Food;
    use Repository\FoodRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foods = $foodRepository->findAll();
        var_dump($foods);
    }

    function testSave(): void 
    {
        $food = new Food("Ayam Panggang", 15000);
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodRepository->save($food);
        $foods = $foodRepository->findAll();
        var_dump($foods);
    }

    function testRemove(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $result = $foodRepository->remove("Gado-Gado");
        var_dump($result);
        $foods = $foodRepository->findAll();
        var_dump($foods);
    }

    testRemove();