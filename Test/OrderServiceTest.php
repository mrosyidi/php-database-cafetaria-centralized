<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Service/OrderService.php";

    use Config\Database;
    use Entity\Order;
    use Repository\OrderRepositoryImpl;  
    use Service\OrderServiceImpl;

    function testShowOrder(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new orderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orderService->showOrder();
    }

    testShowOrder();