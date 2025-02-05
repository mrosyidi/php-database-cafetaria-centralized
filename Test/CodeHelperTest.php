<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Food.php";
    require_once __DIR__ . "/../Entity/Drink.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Entity/Payment.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Repository/PaymentRepository.php";
    require_once __DIR__ . "/../Service/OrderService.php";
    require_once __DIR__ . "/../Helper/CodeHelper.php";

    use Config\Database;
    use Entity\Food;
    use Entity\Drink;
    use Entity\Order;
    use Entity\Payment;
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
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $food = new Food("Mie Ayam", 6000);
        $orderRepository->save(new Order(1, $food->getName(), $food->getPrice(), 2));
        $orders = $orderRepository->findAll();
        $payments = $paymentRepository->findAll();
        $code = CodeHelper::code($orders, $payments, false);
        var_dump($code);
    }

    function testCodeHelperDifferentCode(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $food = new Food("Mie Ayam", 6000);
        $orderRepository->save(new Order(1, $food->getName(), $food->getPrice(), 2));
        $orders = $orderRepository->findAll();
        $payments = $paymentRepository->findAll();
        $code = CodeHelper::code($orders, $payments, true);
        var_dump($code);
    }

    function testCodeHelperOrderEmpty(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $payment = new Payment(2,48000,100000,52000);
        $paymentRepository->save($payment);
        $orders = $orderRepository->findAll();
        $payments = $paymentRepository->findAll();
        $code = CodeHelper::code($orders, $payments, false);
        var_dump($code);
    }

    function testCodeHelperOrderPaymentNotEmpty(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $food = new Food("Mie Ayam", 6000);
        $orderRepository->save(new Order(1, $food->getName(), $food->getPrice(), 2));
        $drink = new Drink("Es Oyen", 12000);
        $orderRepository->save(new Order(2, $drink->getName(), $drink->getPrice(), 2));
        $payment = new Payment(2,24000,50000,26000);
        $paymentRepository->save($payment);
        $orders = $orderRepository->findAll();
        $payments = $paymentRepository->findAll();
        $code = CodeHelper::code($orders, $payments, true);
        var_dump($code);
    }

    testCodeHelperOrderPaymentNotEmpty();