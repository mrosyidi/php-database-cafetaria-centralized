<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Entity/Drink.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Repository/PaymentRepository.php";
    require_once __DIR__ . "/../Service/OrderService.php";
    require_once __DIR__ . "/../Helper/CodeHelper.php";

    use Config\Database;
    use Entity\Food;
    use Entity\Drink;
    use Entity\Order;
    use Repository\OrderRepositoryImpl;
    use Repository\PaymentRepositoryImpl;
    use Service\OrderServiceImpl;
    use Helper\CodeHelper;

    function testCodeHelperEmpty(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $orders = $orderRepository->findAll();
        $payments = $paymentRepository->findAll();
        $code = CodeHelper::code($orders, $payments, false);
        var_dump($code);
    }

    function testCodeHelperSameCode(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $food = new Food("Mie Ayam", 6000);
        $orderRepository->save(new Order(1, $food->getName(), $food->getPrice(), 2));
        $orders = $orderRepository->findAll();
        $code = CodeHelper::code($orders, false);
        var_dump($code);
    }

    function testCodeHelperDifferentCode(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $food = new Food("Mie Ayam", 6000);
        $orderRepository->save(new Order(1, $food->getName(), $food->getPrice(), 2));
        $orders = $orderRepository->findAll();
        $code = CodeHelper::code($orders, true);
        var_dump($code);
    }

    testCodeHelperEmpty();