<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Helper/FindHelper.php";

    use Config\Database;
    use Repository\OrderRepositoryImpl;
    use Helper\FindHelper;

    function testFindHelperNotFound(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orders = $orderRepository->findAll();
        $found = FindHelper::find($orders, 2);
        var_dump($found);
    }

    function testFindHelperFound(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orders = $orderRepository->findAll();
        $found = FindHelper::find($orders, 1);
        var_dump($found);
    }

    testFindHelperFound();