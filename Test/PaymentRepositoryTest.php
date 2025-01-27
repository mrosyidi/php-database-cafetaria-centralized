<?php   

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Payment.php";
    require_once __DIR__ . "/../Repository/PaymentRepository.php";

    use Config\Database;
    use Repository\PaymentRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $payments = $paymentRepository->findAll();
        var_dump($payments);
    }

    testFindAll();