<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";

    use Config\Database;
    use Entity\Order;
    use Repository\OrderRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orders = $orderRepository->findAll();
        var_dump($orders);
    }

    testFindAll();