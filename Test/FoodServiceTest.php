<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Repository/FoodRepository.php";
    require_once __DIR__ . "/../Service/FoodService.php";

    use Config\Database;
    use Entity\Food;
    use Repository\FoodRepositoryImpl;  
    use Service\FoodServiceImpl;

    function testShowFood(): void
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $foodService->showFood();
    }

    function testAddFood(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $foodService->showFood();
        $foodService->addFood("Ayam Goreng", 9000);
        $foodService->showFood();
    }

    testAddFood();