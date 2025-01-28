<?php 

    require_once __DIR__ . "/Config/Database.php";
    require_once __DIR__ . "/Entity/Food.php";
    require_once __DIR__ . "/Entity/Drink.php";
    require_once __DIR__ . "/Entity/Order.php";
    require_once __DIR__ . "/Entity/Payment.php";
    require_once __DIR__ . "/Repository/FoodRepository.php";
    require_once __DIR__ . "/Repository/DrinkRepository.php";
    require_once __DIR__ . "/Repository/OrderRepository.php";
    require_once __DIR__ . "/Repository/PaymentRepository.php";
    require_once __DIR__ . "/Service/FoodService.php";
    require_once __DIR__ . "/Service/DrinkService.php";
    require_once __DIR__ . "/Service/OrderService.php";
    require_once __DIR__ . "/Service/PaymentService.php";
    require_once __DIR__ . "/View/FoodView.php";
    require_once __DIR__ . "/View/DrinkView.php";
    require_once __DIR__ . "/View/OrderView.php";
    require_once __DIR__ . "/View/PaymentView.php";
    require_once __DIR__ . "/Helper/CheckHelper.php";
    require_once __DIR__ . "/Helper/CodeHelper.php";
    require_once __DIR__ . "/Helper/DataHelper.php";
    require_once __DIR__ . "/Helper/RangeHelper.php";
    require_once __DIR__ . "/Helper/InputHelper.php";

    use Config\Database;
    use Repository\FoodRepositoryImpl;
    use Repository\DrinkRepositoryImpl;
    use Repository\OrderRepositoryImpl;
    use Repository\PaymentRepositoryImpl;
    use Service\FoodServiceImpl;
    use Service\DrinkServiceImpl;
    use Service\OrderServiceImpl;
    use Service\PaymentServiceImpl;
    use View\FoodView;
    use View\DrinkView;
    use View\OrderView;
    use View\PaymentView;
    use Helper\InputHelper;

    $connection = Database::getConnection();
    
    $foodRepository = new FoodRepositoryImpl($connection);
    $drinkRepository = new DrinkRepositoryImpl($connection);
    $orderRepository = new OrderRepositoryImpl($connection);

    $foodService = new FoodServiceImpl($foodRepository);
    $drinkService = new DrinkServiceImpl($drinkRepository);
    $orderService = new OrderServiceImpl($orderRepository);

    $foodView = new FoodView($foodService);
    $drinkView = new DrinkView($drinkService);
    $orderView = new OrderView($foodService, $drinkService, $orderService);

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
            $foodView->showFood();
        }else if($pilihan == "2")
        {
            $drinkView->showDrink();
        }else if($pilihan == "3")
        {
            $orderView->showOrder();
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