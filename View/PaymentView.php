<?php 

    namespace View 
    {
        use Service\OrderService;
        use Service\PaymentService;
        use Helper\InputHelper;

        class PaymentView
        {
            private OrderService $orderService;
            private PaymentService $paymentService;

            public function __construct(OrderService $orderService, PaymentService $paymentService)
            {
                $this->orderService = $orderService;
                $this->paymentService = $paymentService;
            }

            public function showPayment(): void
            {
                while(true)
                {
                    $this->orderService->showOrder();

                    echo "Menu Pembayaran" . PHP_EOL;
                    echo "1. Bayar Pesanan" . PHP_EOL;
                    echo "x. Kembali" . PHP_EOL;

                    $pilihan = InputHelper::input("Pilih");

                    if($pilihan == "1")
                    {

                    }else if($pilihan == "x")
                    {
                        break;
                    }else
                    {
                        echo "Pilihan tidak dimengerti" . PHP_EOL;
                    }
                }
            }
        }
    }