<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Detail.php";
    require_once __DIR__ . "/../Repository/DetailRepository.php";
    require_once __DIR__ . "/../Service/DetailService.php";

    use Config\Database;
    use Entity\Detail;
    use Repository\DetailRepositoryImpl;
    use Service\DetailServiceImpl;

    function testShowDetail(): void
    {
        $connection = Database::getConnection();
        $detailRepository = new DetailRepositoryImpl($connection);
        $detailService = new DetailServiceImpl($detailRepository);
        $detailService->showDetail(2);
    }

    testShowDetail();