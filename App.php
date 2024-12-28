<?php 

    require_once __DIR__ . "/Config/Database.php";
    require_once __DIR__ . "/Entity/Food.php";
    require_once __DIR__ . "/Repository/FoodRepository.php";
    require_once __DIR__ . "/Helper/InputHelper.php";

    use Config\Database;
    use Entity\Food;
    use Repository\FoodRepositoryImpl;
    use Helper\InputHelper;

    echo "Cafetaria App" . PHP_EOL;