<?php

use ;

return [
    'currencies' => [
        'TRY' => 949,
        'USD' => 840,
        'EUR' => 978,
        'GBP' => 826,
        'JPY' => 392,
        'RUB' => 643,
    ],

    'account' => [
        'bank' => 'akbank',
        'clientId' => '600100000',
        'storekey' => '123456BDR',
        'username' => 'BDRTEST',
        'password' => 'BDRTEST1021**',
        'storeType' => '3d',
        'mode' => 'T', // [T = TEST, P = PRODUCTION]
    ],

    // Banks
    'banks' => [
        'akbank' => [
            'name' => 'AKBANK T.A.S.',
            'class' => AhmetBedir\LaravelEstPos\EstPos::class,
            'urls' => [
                'production' => 'https://www.sanalakpos.com/fim/api',
                'test' => 'https://entegrasyon.asseco-see.com.tr/fim/api',
                'gateway' => [
                    'production' => 'https://www.sanalakpos.com/fim/est3Dgate',
                    'test' => 'https://entegrasyon.asseco-see.com.tr/fim/est3Dgate',
                ],
            ],
            'okUrl' => url('/bank/response'),
            'failUrl' => url('/bank/response'),
            'lang' => 'tr',
        ],
    ],
];
