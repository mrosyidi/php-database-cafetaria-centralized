<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Repository/FoodRepository.php";
    require_once __DIR__ . "/../Service/FoodService.php";
    require_once __DIR__ . "/../View/FoodView.php";
    require_once __DIR__ . "/../Helper/CheckHelper.php";
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

    function testViewAddFood(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $foodView = new FoodView($foodService);
        $foodService->showFood();
        $foodView->addFood();
        $foodService->showFood();
    }

    function testViewRemoveFood(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $foodView = new FoodView($foodService);
        $foodService->showFood();
        $foodView->removeFood();
        $foodService->showFood();
    }

    testViewRemoveFood();