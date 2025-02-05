<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Order.php";
    require_once __DIR__ . "/../Entity/Detail.php";
    require_once __DIR__ . "/../Repository/OrderRepository.php";
    require_once __DIR__ . "/../Repository/DetailRepository.php";
    require_once __DIR__ . "/../Service/DetailService.php";

    use Config\Database;
    use Entity\Order;
    use Entity\Detail;
    use Repository\OrderRepositoryImpl;
    use Repository\DetailRepositoryImpl;
    use Service\DetailServiceImpl;

    function testShowDetail(): void
    {
        $connection = Database::getConnection();
        $detailRepository = new DetailRepositoryImpl($connection);
        $detailService = new DetailServiceImpl($detailRepository);
        $detailService->showDetail(2);
    }

    function testAddDetail(): void 
    {
        $connection = Database::getConnection();
        $orderRepository = new OrderRepositoryImpl($connection);
        $detailRepository = new DetailRepositoryImpl($connection);
        $detailService = new DetailServiceImpl($detailRepository);
        $orders = $orderRepository->findAll();
        $detailService->addDetail($orders);
        $detailService->showDetail(2);
    }

    testAddDetail();