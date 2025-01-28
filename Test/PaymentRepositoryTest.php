<?php   

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Payment.php";
    require_once __DIR__ . "/../Repository/PaymentRepository.php";

    use Config\Database;
    use Entity\Payment;
    use Repository\PaymentRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $payments = $paymentRepository->findAll();
        var_dump($payments);
    }

    function testSave(): void 
    {
        $connection = Database::getConnection();
        $payment = new Payment(2,45000,50000,5000);
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentRepository->save($payment);
        $payments = $paymentRepository->findAll();
        var_dump($payments);
    }

    testSave();