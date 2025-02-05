<?php 

    namespace View 
    {
        use Service\PaymentService;
        use Service\DetailService;
        use Helper\InputHelper;

        class DetailView
        {
            private PaymentService $paymentService;
            private DetailService $detailService;

            public function __construct(DetailService $detailService, PaymentService $paymentService)
            {
                $this->detailService = $detailService;
                $this->paymentService = $paymentService;
            }

            public function showDetail(): void
            {
                while(true)
                {
                    $this->paymentService->showPayment();

                    echo "Menu Detail" . PHP_EOL;
                    echo "1. Tampilkan Detail" . PHP_EOL;
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