<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Entity/Drink.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Repository/FoodRepository.php";
    require_once __DIR__ . "/../Repository/DrinkRepository.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Repository/PaymentRepository.php";
    require_once __DIR__ . "/../Service/FoodService.php";
    require_once __DIR__ . "/../Service/DrinkService.php";
    require_once __DIR__ . "/../Service/OrderService.php";
    require_once __DIR__ . "/../Service/PaymentService.php";
    require_once __DIR__ . "/../View/OrderView.php";
    require_once __DIR__ . "/../Helper/CodeHelper.php";
    require_once __DIR__ . "/../Helper/DataHelper.php";
    require_once __DIR__ . "/../Helper/InputHelper.php";
    require_once __DIR__ . "/../Helper/RangeHelper.php";
   
    use Config\Database;
    use Repository\FoodRepositoryImpl;
    use Repository\DrinkRepositoryImpl;
    use Repository\OrderRepositoryImpl;
    use Repository\PaymentRepositoryImpl;
    use Service\FoodServiceImpl;
    use Service\DrinkServiceImpl;
    use Service\OrderServiceImpl;
    use Service\PaymentServiceImpl;
    use View\OrderView;
   
    function testViewShowOrder(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $orderView = new OrderView($foodService, $drinkService, $orderService, $paymentService);
        $orderView->showOrder();
    }

    function testViewAddOrderFoodSameCode(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $orderView = new OrderView($foodService, $drinkService, $orderService, $paymentService);
        $orderView->addOrder(1, false);
        $orderService->showOrder();
    }

    function testViewAddOrderFoodDifferentCode(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $orderView = new OrderView($foodService, $drinkService, $orderService, $paymentService);
        $orderView->addOrder(1, true);
        $orderService->showOrder();
    }

    function testViewAddOrderDrinkSameCode(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $orderView = new OrderView($foodService, $drinkService, $orderService, $paymentService);
        $orderView->addOrder(2, false);
        $orderService->showOrder();
    }

    function testViewAddOrderDrinkDifferentCode(): void 
    {
        $connection = Database::getConnection();
        $foodRepository = new FoodRepositoryImpl($connection);
        $foodService = new FoodServiceImpl($foodRepository);
        $drinkRepository = new DrinkRepositoryImpl($connection);
        $drinkService = new DrinkServiceImpl($drinkRepository);
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $orderView = new OrderView($foodService, $drinkService, $orderService, $paymentService);
        $orderView->addOrder(2, true);
        $orderService->showOrder();
    }

    testViewAddOrderDrinkDifferentCode();