<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Service/OrderService.php";
    require_once __DIR__ . "/../View/OrderView.php";
    require_once __DIR__ . "/../Helper/InputHelper.php";
   
    use Config\Database;
    use Repository\OrderRepositoryImpl;
    use Service\OrderServiceImpl;
    use View\OrderView;
   
    function testViewShowOrder(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $orderView = new OrderView($orderService);
        $orderView->showOrder();
    }

    testViewShowOrder();