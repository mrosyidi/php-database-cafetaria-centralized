<?php   

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Payment.php";
    require_once __DIR__ . "/../Repository/PaymentRepository.php";
    require_once __DIR__ . "/../Service/PaymentService.php";

    use Config\Database;
    use Entity\Payment;
    use Repository\PaymentRepositoryImpl;
    use Service\PaymentServiceImpl;

    function testShowPayment(): void
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $paymentService->showPayment();
    }

    function testAddPayment(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $paymentService->addPayment(2, 60000, 100000);
        $paymentService->showPayment();
    }

    function testGetPayment(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $payments = $paymentService->getPayment();
        var_dump($payments);
    }

    testGetPayment();