<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Service/OrderService.php";
    require_once __DIR__ . "/../Helper/PayHelper.php";

    use Config\Database;
    use Repository\OrderRepositoryImpl;
    use Service\OrderServiceImpl;
    use Helper\PayHelper;

    function testPayHelperDataNotExist(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orders = $orderRepository->findAll();
        $total = PayHelper::pay($orders, 2);
        var_dump($total);
    }

    testPayHelperDataNotExist();