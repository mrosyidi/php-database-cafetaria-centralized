<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Payment.php";
    require_once __DIR__ . "/../Entity/Detail.php";
    require_once __DIR__ . "/../Repository/PaymentRepository.php";
    require_once __DIR__ . "/../Repository/DetailRepository.php";
    require_once __DIR__ . "/../Service/PaymentService.php";
    require_once __DIR__ . "/../Service/DetailService.php";
    require_once __DIR__ . "/../View/DetailView.php";
    require_once __DIR__ . "/../Helper/InputHelper.php";

    use Config\Database;
    use Entity\Detail;
    use Repository\PaymentRepositoryImpl;
    use Repository\DetailRepositoryImpl;
    use Service\PaymentServiceImpl;
    use Service\DetailServiceImpl;
    use VIew\DetailView;

    function testViewShowDetail(): void 
    {
        $connection = Database::getConnection();
        $paymentRepository = new PaymentRepositoryImpl($connection);
        $paymentService = new PaymentServiceImpl($paymentRepository);
        $detailReposiory = new DetailRepositoryImpl($connection);
        $detailService = new DetailServiceImpl($detailReposiory);
        $detailView = new DetailView($detailService, $paymentService);
        $detailView->showDetail();
    }

    testViewShowDetail();
