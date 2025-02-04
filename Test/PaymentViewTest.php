<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Entity/Payment.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Repository/PaymentRepository.php";
    require_once __DIR__ . "/../Service/OrderService.php";
    require_once __DIR__ . "/../Service/PaymentService.php";
    require_once __DIR__ . "/../View/PaymentView.php";
    require_once __DIR__ . "/../Helper/FindHelper.php";
    require_once __DIR__ . "/../Helper/InputHelper.php";
    require_once __DIR__ . "/../Helper/PayHelper.php";

    use Config\Database;
    use Repository\OrderRepositoryImpl;
    use Repository\PaymentRepositoryImpl;
    use Service\OrderServiceImpl;
    use Service\PaymentServiceImpl;
    use View\PaymentView;

    function testViewShowPayment(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $paymentView = new PaymentView($orderService, $paymentService);
        $paymentView->showPayment();
    }

    function testViewAddPayment(): void
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $paymentView = new PaymentView($orderService, $paymentService);
        $orderService->showOrder();
        $paymentView->addPayment();
    }

    testViewShowPayment();