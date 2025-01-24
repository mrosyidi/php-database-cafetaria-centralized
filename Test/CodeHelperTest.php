<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Entity/Drink.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Service/OrderService.php";
    require_once __DIR__ . "/../Helper/CodeHelper.php";

    use Config\Database;
    use Entity\Food;
    use Entity\Drink;
    use Entity\Order;
    use Repository\OrderRepositoryImpl;
    use Service\OrderServiceImpl;
    use Helper\CodeHelper;

    function testCodeHelperEmpty(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orders = $orderRepository->findAll();
        $code = CodeHelper::code($orders, false);
        var_dump($code);
    }

    testCodeHelperEmpty();