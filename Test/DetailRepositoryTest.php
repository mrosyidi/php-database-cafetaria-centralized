<?php 

    require_once __DIR__ . "/../Config/Database.php";
    require_once __DIR__ . "/../Entity/Detail.php";
    require_once __DIR__ . "/../Repository/DetailRepository.php";

    use Config\Database;
    use Entity\Detail;
    use Repository\DetailRepositoryImpl;

    function testFindAll(): void 
    {
        $connection = Database::getConnection();
        $detailRepository = new DetailRepositoryImpl($connection);
        $details = $detailRepository->findAll();
        var_dump($details);
    }

    function testSave(): void 
    {
        $connection = Database::getConnection();
        $detailRepository = new DetailRepositoryImpl($connection);
        $detail = new Detail(1,"Es Oyen",1,12000,12000);
        $detailRepository->save($detail);
        $details = $detailRepository->findAll();
        var_dump($details);
    }

    testSave();