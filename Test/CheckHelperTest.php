<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Repository/FoodRepository.php";
    require_once __DIR__ . "/../Helper/CheckHelper.php";

    use Config\Database;
    use Repository\FoodRepositoryImpl;
    use Helper\CheckHelper;

    function testCheckHelperFoodNotFound(): void
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foods = $foodRepository->findAll();
        $result = CheckHelper::check($foods, "Nasi Kuning");
        var_dump($result);
    }

    function testCheckHelperFoodFound(): void
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foods = $foodRepository->findAll();
        $result = CheckHelper::check($foods, "Soto Ayam");
        var_dump($result);
    }

    testCheckHelperFoodFound();