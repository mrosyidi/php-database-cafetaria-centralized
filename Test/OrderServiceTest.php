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

    function testAddOrder(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orderService->showOrder();
        $orderService->addOrder(1, "Soto Ayam", 12000, 1);
        $orderService->showOrder();
    }

    function testGetOrder(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orders = $orderService->getOrder();
        var_dump($orders);
    }

    function testRemoveOrder(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orderService->showOrder();
        $orderService->removeOrder(2);
        $orderService->showOrder();
    }

    testRemoveOrder();