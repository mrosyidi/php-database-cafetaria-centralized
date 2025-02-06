<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Entity/Payment.php";
    require_once __DIR__ . "/../Entity/Detail.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Repository/PaymentRepository.php";
    require_once __DIR__ . "/../Repository/DetailRepository.php";
    require_once __DIR__ . "/../Service/OrderService.php";
    require_once __DIR__ . "/../Service/PaymentService.php";
    require_once __DIR__ . "/../Service/DetailService.php";
    require_once __DIR__ . "/../View/PaymentView.php";
    require_once __DIR__ . "/../Helper/DuplicateHelper.php";
    require_once __DIR__ . "/../Helper/FindHelper.php";
    require_once __DIR__ . "/../Helper/InputHelper.php";
    require_once __DIR__ . "/../Helper/PayHelper.php";

    use Config\Database;
    use Repository\OrderRepositoryImpl;
    use Repository\PaymentRepositoryImpl;
    use Repository\DetailRepositoryImpl;
    use Service\OrderServiceImpl;
    use Service\PaymentServiceImpl;
    use Service\DetailServiceImpl;
    use View\PaymentView;

    function testViewShowPayment(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $detailRepository = new DetailRepositoryImpl($connection);
        $orderService = new OrderServiceImpl($orderRepository);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $detailService = new DetailServiceImpl($detailRepository);
        $paymentView = new PaymentView($orderService, $paymentService, $detailService);
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