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

    testShowPayment();