<?php 

    require_once __DIR__ . "/Config/Database.php";
    require_once __DIR__ . "/Entity/Food.php";
    require_once __DIR__ . "/Repository/FoodRepository.php";
    require_once __DIR__ . "/Service/FoodService.php";
    require_once __DIR__ . "/Helper/InputHelper.php";

    use Config\Database;
    use Entity\Food;
    use Repository\FoodRepositoryImpl;
    use Service\FoodServiceImpl;
    use Helper\InputHelper;

    echo "Cafetaria App" . PHP_EOL;

    while(true)
    {
        echo "MENU UTAMA" . PHP_EOL;
        echo "1. Daftar Makanan" . PHP_EOL;
        echo "2. Daftar Minuman" . PHP_EOL;
        echo "3. Pemesanan" . PHP_EOL;
        echo "4. Pembayaran" . PHP_EOL;
        echo "5. Detail" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = InputHelper::input("Pilih");

        if($pilihan == "1")
        {

        }else if($pilihan == "2")
        {

        }else if($pilihan == "3")
        {

        }else if($pilihan == "4")
        {

        }else if($pilihan == "5")
        {

        }else if($pilihan == "x")
        {
            break;
        }else 
        {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;