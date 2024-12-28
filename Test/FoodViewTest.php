<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Repository/FoodRepository.php";
    require_once __DIR__ . "/../Service/FoodService.php";
    require_once __DIR__ . "/../View/FoodView.php";
    require_once __DIR__ . "/../Helper/InputHelper.php";

    use Config\Database;
    use Repository\FoodRepositoryImpl;
    use Service\FoodServiceImpl;
    use View\FoodView;

    function testViewShowFood(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $foodView = new FoodView($foodService);
        $foodView->showFood();
    }

    testViewShowFood();