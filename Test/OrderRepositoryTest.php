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

    function testSave(): void 
    {
        $connection = Database::getConnection();
        $order = new Order(1, "Es Oyen", 12000, 2);
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderRepository->save($order);
        $orders = $orderRepository->findAll();
        var_dump($orders);
    }

    function testRemove(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderRepository->remove(1);
        $orders = $orderRepository->findAll();
        var_dump($orders);
    }

    testRemove();